<?php
// Prevent direct script execution if accessed without POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Direct access not allowed.';
    exit;
}

// ------------------------------------------------------------------
// 1. CONFIGURATION & REFERRAL URL CAPTURE
// ------------------------------------------------------------------
define('ADMIN_EMAIL', 'info@smartservix.com.au'); // Business inbox
define('COMPANY_NAME', 'Smart Servix');

// Build reliable sender domain (defaults to domain or falls back for local dev)
$server_host = !empty($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'smartservix.com.au';
$server_host = preg_replace('/:\d+$/', '', $server_host); // Remove port if present
if ($server_host === 'localhost' || $server_host === '127.0.0.1') {
    $server_host = 'smartservix.com.au';
}
$from_email = "noreply@" . $server_host;

// Capture the referring page URL or fall back to home page if not set
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';

// Parse base referer URL to clean old query parameters
$referer_parts = parse_url($referer);
$redirect_base = (isset($referer_parts['scheme']) ? $referer_parts['scheme'] . '://' : '') .
    (isset($referer_parts['host']) ? $referer_parts['host'] : '') .
    (isset($referer_parts['port']) ? ':' . $referer_parts['port'] : '') .
    (isset($referer_parts['path']) ? $referer_parts['path'] : '/');

// Helper function to redirect back with status
function redirect_back($status, $message = '') {
    global $redirect_base;
    $url = $redirect_base . '?status=' . urlencode($status);
    if (!empty($message)) {
        $url .= '&msg=' . urlencode($message);
    }
    header('Location: ' . $url);
    exit;
}

// Sanitization Helpers
function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function sanitize_array($arr) {
    if (!is_array($arr)) return [];
    return array_map('sanitize_input', $arr);
}

// ------------------------------------------------------------------
// 2. EXTRACT AND SANITIZE POST DATA
// ------------------------------------------------------------------
$primary_categories  = isset($_POST['primary_categories']) ? sanitize_array($_POST['primary_categories']) : [];
$electrical_services = isset($_POST['electrical_services']) ? sanitize_array($_POST['electrical_services']) : [];

$roof_type    = isset($_POST['roofType']) ? sanitize_input($_POST['roofType']) : 'N/A';
$roof_facing  = isset($_POST['houseFacing']) ? sanitize_input($_POST['houseFacing']) : 'N/A';
$ev_brand     = isset($_POST['evBrand']) ? sanitize_input($_POST['evBrand']) : 'N/A';

$property_type = isset($_POST['property_type']) ? sanitize_input($_POST['property_type']) : 'Not Specified';
$urgency       = isset($_POST['urgency']) ? sanitize_input($_POST['urgency']) : 'Not Specified';

$full_name       = isset($_POST['full_name']) ? sanitize_input($_POST['full_name']) : '';
$phone_number    = isset($_POST['phone_number']) ? sanitize_input($_POST['phone_number']) : '';
$email_address   = isset($_POST['email_address']) ? sanitize_input($_POST['email_address']) : '';
$job_description = isset($_POST['job_description']) ? sanitize_input($_POST['job_description']) : 'None provided.';

// ------------------------------------------------------------------
// 3. SERVER-SIDE VALIDATION
// ------------------------------------------------------------------
$errors = [];

if (empty($full_name)) {
    $errors[] = 'Full name is required.';
}
if (empty($phone_number)) {
    $errors[] = 'Phone number is required.';
}
if (empty($email_address) || !filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}
if (empty($primary_categories)) {
    $errors[] = 'At least one primary service category must be selected.';
}

// Redirect back with Danger status if validation fails
if (!empty($errors)) {
    $error_message = implode(' ', $errors);
    redirect_back('danger', $error_message);
}

// ------------------------------------------------------------------
// 4. FORMAT EMAIL CONTENT
// ------------------------------------------------------------------
$primary_cat_list = !empty($primary_categories) ? implode(', ', array_map('ucfirst', $primary_categories)) : 'None';
$electrical_list  = !empty($electrical_services) ? implode(', ', $electrical_services) : 'N/A';

$email_body = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; }
        .header { background-color: #000; color: #fff; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .section-title { font-size: 14px; text-transform: uppercase; font-weight: bold; color: #666; margin-top: 20px; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
        .data-row { margin: 8px 0; }
        .label { font-weight: bold; width: 160px; display: inline-block; color: #111; }
        .footer { background-color: #eee; padding: 15px; text-align: center; font-size: 12px; color: #777; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Quote Request Received</h2>
        </div>
        <div class='content'>
            <div class='section-title'>Customer Information</div>
            <div class='data-row'><span class='label'>Name:</span> {$full_name}</div>
            <div class='data-row'><span class='label'>Phone:</span> {$phone_number}</div>
            <div class='data-row'><span class='label'>Email:</span> {$email_address}</div>

            <div class='section-title'>Selected Services</div>
            <div class='data-row'><span class='label'>Primary Categories:</span> {$primary_cat_list}</div>";

if (in_array('electrical', $primary_categories)) {
    $email_body .= "<div class='data-row'><span class='label'>Electrical Services:</span> {$electrical_list}</div>";
}
if (in_array('solar', $primary_categories)) {
    $email_body .= "
            <div class='data-row'><span class='label'>Roof Type:</span> " . ucfirst($roof_type) . "</div>
            <div class='data-row'><span class='label'>Roof Direction:</span> " . ucfirst($roof_facing) . "</div>";
}
if (in_array('ev', $primary_categories)) {
    $email_body .= "<div class='data-row'><span class='label'>EV Charger:</span> " . ucfirst($ev_brand) . "</div>";
}

$email_body .= "
            <div class='section-title'>Property & Project Scope</div>
            <div class='data-row'><span class='label'>Property Type:</span> {$property_type}</div>
            <div class='data-row'><span class='label'>Urgency:</span> {$urgency}</div>
            <div class='data-row'><span class='label'>Job Description:</span><br>" . nl2br($job_description) . "</div>
        </div>
        <div class='footer'>Sent from " . COMPANY_NAME . " Quote Configurator</div>
    </div>
</body>
</html>";

// Admin Mail Headers
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/html; charset=UTF-8";
$headers[] = "From: " . COMPANY_NAME . " <{$from_email}>";
$headers[] = "Reply-To: {$full_name} <{$email_address}>";
$headers[] = "X-Mailer: PHP/" . phpversion();

// ------------------------------------------------------------------
// 5. SEND EMAIL & REDIRECT TO REFERRAL URL
// ------------------------------------------------------------------
$mail_subject = "New Quote Request - {$full_name} ({$primary_cat_list})";

// Fifth parameter '-f' sets envelope sender to pass SPF checks
$admin_mail_sent = mail(ADMIN_EMAIL, $mail_subject, $email_body, implode("\r\n", $headers), "-f{$from_email}");

if ($admin_mail_sent) {
    // Send client auto-responder
    $client_headers   = array();
    $client_headers[] = "MIME-Version: 1.0";
    $client_headers[] = "Content-Type: text/html; charset=UTF-8";
    $client_headers[] = "From: " . COMPANY_NAME . " <{$from_email}>";
    $client_headers[] = "Reply-To: " . COMPANY_NAME . " <" . ADMIN_EMAIL . ">";
    $client_headers[] = "X-Mailer: PHP/" . phpversion();

    $client_subject = "Quote Request Confirmation - " . COMPANY_NAME;
    $client_body = "<h3>Thank You, {$full_name}!</h3><p>We received your quote request and will be in touch shortly.</p>";

    @mail($email_address, $client_subject, $client_body, implode("\r\n", $client_headers), "-f{$from_email}");

    // Redirect to Referral URL with SUCCESS parameter
    redirect_back('success', 'Your quote request has been submitted successfully! We will get back to you shortly.');
} else {
    // Redirect to Referral URL with DANGER parameter
    redirect_back('danger', 'Failed to send your request due to a server error. Please try again or call us directly.');
}