<?php
/**
 * Standalone Contact Form Processor (Zero-DB)
 * Zia Ul Ain Portfolio
 * 
 * Securely logs incoming messages to data/messages.json
 * Responds with 'OK' for assets/vendor/php-email-form/validate.js
 */

if (!headers_sent()) {
    header('Content-Type: text/plain; charset=utf-8');
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    if (!headers_sent()) {
        http_response_code(405);
    }
    exit('Method Not Allowed');
}

// 1. Honeypot check (anti-bot trap)
if (!empty($_POST['website_url'])) {
    // Silently drop bot submission
    exit('OK');
}

// 2. Extract and sanitize inputs
$name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$email   = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// 3. Validate
if (empty($name)) {
    exit('Please enter your name.');
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Please enter a valid email address.');
}

if (empty($subject)) {
    exit('Please enter a message subject.');
}

if (empty($message)) {
    exit('Please write a message.');
}

// 4. Record to data/messages.json
$dataFile = dirname(__DIR__) . '/data/messages.json';
$messages = [];

if (file_exists($dataFile)) {
    $content = file_get_contents($dataFile);
    $decoded = json_decode($content, true);
    if (is_array($decoded)) {
        $messages = $decoded;
    }
}

$newRecord = [
    'id'         => uniqid('msg_', true),
    'name'       => $name,
    'email'      => $email,
    'subject'    => $subject,
    'message'    => $message,
    'ip'         => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
    'created_at' => date('Y-m-d H:i:s')
];

// Prepend so the newest message is always first
array_unshift($messages, $newRecord);

// Keep max 500 messages to prevent unbounded growth
if (count($messages) > 500) {
    $messages = array_slice($messages, 0, 500);
}

// Save atomically with lock
file_put_contents($dataFile, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), LOCK_EX);

// 5. Optionally attempt PHP mail() if configured
$to = 'zziaulain@gmail.com';
$emailBody = "You have received a new contact message from your portfolio website:\n\n"
           . "Name: $name\n"
           . "Email: $email\n"
           . "Subject: $subject\n\n"
           . "Message:\n$message\n\n"
           . "IP Address: " . ($newRecord['ip']) . "\n"
           . "Sent At: " . ($newRecord['created_at']) . "\n";
$headers = "From: webmaster@localhost\r\n"
         . "Reply-To: $email\r\n"
         . "X-Mailer: PHP/" . phpversion();

@mail($to, "Portfolio Inquiry: $subject", $emailBody, $headers);

// 6. Output EXACT 'OK' as required by validate.js
echo 'OK';
exit;
