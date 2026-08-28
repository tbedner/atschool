<?php
require_once __DIR__ . '/stripe/init.php';
require_once __DIR__ . '/secrets.php';
require_once __DIR__ . '/database.php';

$token = trim((string) ($_GET['token'] ?? ''));
$accountLinkSent = isset($_GET['account_link']) && $_GET['account_link'] === 'sent';
if ($token === '' || !preg_match('/^[a-f0-9]{64}$/', $token)) {
    $message = $accountLinkSent
        ? 'If an account exists for that email address, a secure link has been sent.'
        : 'Enter the email address used for your subscription to receive a secure account link.';
    $showForm = true;
} else {
    try {
        $database = get_account_database();
        $tokenHash = hash('sha256', $token);
        $statement = $database->prepare('SELECT email FROM account_login_tokens WHERE token_hash = :token_hash AND used_at IS NULL AND expires_at > UTC_TIMESTAMP() LIMIT 1');
        $statement->execute(['token_hash' => $tokenHash]);
        $accountToken = $statement->fetch();

        if (!$accountToken) {
            throw new RuntimeException('This account link is invalid or expired.');
        }

        $statement = $database->prepare('SELECT stripe_customer_id FROM stripe_accounts WHERE email = :email LIMIT 1');
        $statement->execute(['email' => $accountToken['email']]);
        $account = $statement->fetch();
        if (!$account) {
            throw new RuntimeException('No Stripe billing account was found for this email address.');
        }

        $database->prepare('UPDATE account_login_tokens SET used_at = UTC_TIMESTAMP() WHERE token_hash = :token_hash')->execute(['token_hash' => $tokenHash]);
        \Stripe\Stripe::setApiKey($stripeSecretKey);
        $portalSession = \Stripe\BillingPortal\Session::create([
            'customer' => $account['stripe_customer_id'],
            'return_url' => rtrim($siteBaseUrl, '/') . '/myaccount.php',
        ]);
        header('Location: ' . $portalSession->url, true, 303);
        exit;
    } catch (Throwable $exception) {
        error_log('Account portal error: ' . $exception->getMessage());
        $message = 'This account link is invalid, expired, or unavailable. Please request a new link.';
        $showForm = true;
    }
}
?>
<!DOCTYPE HTML>
<html>
<?php
include('head.php');
?>
    <body class="is-preload">
        <div id="wrapper">

<?php
include('header.php');
include('menu.php');
?>
            <div id="main">
                <div class="inner">
                    <h1>My Account</h1>
<?php if ($accountLinkSent): ?>
                    <div class="alert alert-success" role="alert"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></div>
<?php else: ?>
                    <p><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>
<?php if ($showForm): ?>
                    <form method="post" action="request-account-link.php">
                        <div class="fields">
                            <div class="field">
                                <label for="email">Email address</label>
                                <input id="email" name="email" type="email" required autocomplete="email">
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Email me an account link" class="primary"></li>
                        </ul>
                    </form>
<?php endif; ?>
                </div>
            </div>

<?php
include('contact_footer.php');
?>
        </div>
    </body>
</html>