<?php
require_once __DIR__ . '/secrets.php';
require_once __DIR__ . '/database.php';
require __DIR__ . '/PHPMailer.php';
require __DIR__ . '/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    http_response_code(405);
    exit('POST required.');
}

$email = strtolower(trim((string) ($_POST['email'] ?? '')));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Please enter a valid email address.');
}

try {
    $database = get_account_database();
    $statement = $database->prepare('SELECT email FROM stripe_accounts WHERE email = :email LIMIT 1');
    $statement->execute(['email' => $email]);
    $account = $statement->fetch();

    if ($account) {
        $rawToken = bin2hex(random_bytes(32));
        $statement = $database->prepare('INSERT INTO account_login_tokens (email, token_hash, expires_at) VALUES (:email, :token_hash, DATE_ADD(UTC_TIMESTAMP(), INTERVAL 30 MINUTE))');
        $statement->execute(['email' => $email, 'token_hash' => hash('sha256', $rawToken)]);

        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = $emailHost;
        $mail->SMTPAuth = true;
        $mail->Username = $emailUser;
        $mail->Password = $emailPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->setFrom($emailFromAddress, $emailFromName);
        $mail->addAddress($email);
        $link = rtrim($siteBaseUrl, '/') . '/myaccount.php?token=' . rawurlencode($rawToken);
        $mail->Subject = 'Your @School account link';
        $mail->Body = 'Use this secure link to manage your @School subscription. It expires in 30 minutes:<br><br><a href="' . htmlspecialchars($link, ENT_QUOTES, 'UTF-8') . '">Manage my account</a>';
        $mail->AltBody = "Manage your @School subscription: {$link}\nThis link expires in 30 minutes.";
        $mail->isHTML(true);
        $mail->send();
    }
} catch (Throwable $exception) {
    error_log('Account link request failed: ' . $exception->getMessage());
}

echo 'If an account exists for that email address, a secure link has been sent.';