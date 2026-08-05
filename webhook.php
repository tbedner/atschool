<?php
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
  require_once __DIR__ . '/vendor/autoload.php';
} else {
  require_once __DIR__ . '/stripe/init.php';
}
require_once __DIR__ . '/secrets.php';

$stripe = new \Stripe\StripeClient($stripeSecretKey);

function split_name_parts(string $fullName): array {
    $trimmed = trim($fullName);
    if ($trimmed === '') {
        return ['Student', ''];
    }

    $parts = preg_split('/\s+/', $trimmed);
    $first = $parts[0] ?? 'Student';
    $last = count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : '';
    return [$first, $last];
}

// To run this example, set an environment variable STRIPE_WEBHOOK_SECRET to
// your endpoint's unique secret.
//
// If you are testing with the CLI, find the secret by running 'stripe listen'.
// If you are using an endpoint defined with the API or dashboard, look in
// your webhook settings at https://dashboard.stripe.com/webhooks.
//
// Don't include webhook secrets in code.
$endpoint_secret = getenv('STRIPE_WEBHOOK_SECRET') ?: '';

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if ($requestMethod !== 'POST') {
    http_response_code(405);
    echo 'Stripe webhook endpoint: send a POST request from Stripe or Stripe CLI.';
    exit();
}

$payload = @file_get_contents('php://input');
if ($payload === false || $payload === '') {
    http_response_code(400);
    echo 'Webhook error: empty request body.';
    exit();
}

$event = null;

if ($endpoint_secret !== '') {
    $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE']
        ?? $_SERVER['REDIRECT_HTTP_STRIPE_SIGNATURE']
        ?? null;

    if ($sig_header === null && function_exists('getallheaders')) {
        $headers = getallheaders();
        $sig_header = $headers['Stripe-Signature'] ?? $headers['stripe-signature'] ?? null;
    }

    if ($sig_header === null || $sig_header === '') {
        http_response_code(400);
        echo 'Webhook error: missing Stripe-Signature header.';
        exit();
    }

    try {
        $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
    } catch (\UnexpectedValueException $e) {
        http_response_code(400);
        echo 'Webhook error: invalid payload.';
        exit();
    } catch (\Stripe\Exception\SignatureVerificationException $e) {
        http_response_code(400);
        echo 'Webhook error: invalid signature.';
        exit();
    }
} else {
    $decoded = json_decode($payload, true);
    if (!is_array($decoded)) {
        http_response_code(400);
        echo 'Webhook error: payload is not valid JSON object.';
        exit();
    }

    try {
        $event = \Stripe\Event::constructFrom($decoded);
    } catch (\Throwable $e) {
        http_response_code(400);
        echo 'Webhook error: failed to construct event object.';
        exit();
    }
}

// Handle the event
switch ($event->type) {
  case 'checkout.session.completed':
    $session = $event->data->object;

    $email = $session->customer_details->email
        ?? $session->customer_email
        ?? null;
    $fullName = $session->customer_details->name ?? null;

    // Fallback to the Customer object if Checkout details are missing.
    if (($email === null || $fullName === null) && !empty($session->customer)) {
        try {
            $customer = $stripe->customers->retrieve((string) $session->customer, []);
            if ($email === null && !empty($customer->email)) {
                $email = (string) $customer->email;
            }
            if ($fullName === null && !empty($customer->name)) {
                $fullName = (string) $customer->name;
            }
        } catch (\Throwable $e) {
            error_log('Stripe customer lookup failed for session ' . (string) $session->id);
        }
    }

    if ($email === null || trim($email) === '') {
        error_log('checkout.session.completed missing email for session ' . (string) $session->id);
        break;
    }

    [$firstName, $lastName] = split_name_parts((string) ($fullName ?? ''));

    // Replace this with your DB insert or Moodle provisioning call.
    $capture = [
        'event_id' => (string) $event->id,
        'session_id' => (string) $session->id,
        'email' => trim((string) $email),
        'full_name' => (string) ($fullName ?? ''),
        'first_name' => $firstName,
        'last_name' => $lastName,
        'amount_total' => (int) ($session->amount_total ?? 0),
        'currency' => (string) ($session->currency ?? ''),
        'created_at' => gmdate('c'),
    ];

    @file_put_contents(
        __DIR__ . '/webhook-captures.log',
        json_encode($capture, JSON_UNESCAPED_SLASHES) . PHP_EOL,
        FILE_APPEND | LOCK_EX
    );
    break;
  default:
    error_log('Received event type: ' . (string) $event->type);
}

http_response_code(200);