<?php
// Set response header for JSON format
header('Content-Type: application/json; charset=utf-8');

// Config settings
$admin_email = "info@24sevensparky.com.au";
// IMPORTANT: From header domain MUST match your actual hosting domain to pass SPF check
$from_email  = "no-reply@" . ($_SERVER['SERVER_NAME'] ?? "24sevensparky.com.au");
$site_name   = "24/7 Sparky";

// Ensure request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Sanitize and collect form fields
$name         = isset($_POST['contactName']) ? trim(filter_var($_POST['contactName'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$phone        = isset($_POST['contactPhone']) ? trim(filter_var($_POST['contactPhone'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$email        = isset($_POST['contactEmail']) ? trim(filter_var($_POST['contactEmail'], FILTER_VALIDATE_EMAIL)) : '';
$service_type = isset($_POST['serviceType']) ? trim(filter_var($_POST['serviceType'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$message      = isset($_POST['contactMessage']) ? trim(filter_var($_POST['contactMessage'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';

// Basic validation
if (empty($name) || empty($phone) || !$email || empty($service_type) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please complete all required fields with valid details.']);
    exit;
}

// Load email template
$template_path = __DIR__ . '/includes/components/email_template.html';

if (!file_exists($template_path)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Email template not found.']);
    exit;
}

$template_content = file_get_contents($template_path);

// Determine dynamic badge style
$badge_class = (stripos($service_type, 'Emergency') !== false) ? "badge-emergency" : "badge-contact";

// Format submission time
$submitted_at = date("d M Y, h:i A");

// Build HTML body content
$body_content = '
    <div style="text-align: center;">
        <span class="badge ' . $badge_class . '">New Website Enquiry</span>
    </div>

    <h2 class="section-title">Request Details</h2>

    <table class="data-table">
        <tr>
            <td class="data-label">Full Name</td>
            <td class="data-value"><strong>' . htmlspecialchars($name) . '</strong></td>
        </tr>
        <tr>
            <td class="data-label">Phone</td>
            <td class="data-value"><a href="tel:' . preg_replace('/[^0-9+]/', '', $phone) . '" style="color:#0f172a; text-decoration:none;">' . htmlspecialchars($phone) . '</a></td>
        </tr>
        <tr>
            <td class="data-label">Email</td>
            <td class="data-value"><a href="mailto:' . htmlspecialchars($email) . '" style="color:#0f172a; text-decoration:none;">' . htmlspecialchars($email) . '</a></td>
        </tr>
        <tr>
            <td class="data-label">Service</td>
            <td class="data-value">' . htmlspecialchars($service_type) . '</td>
        </tr>
        <tr>
            <td class="data-label">Date/Time</td>
            <td class="data-value">' . $submitted_at . '</td>
        </tr>
        <tr>
            <td class="data-label">Message</td>
            <td class="data-value" style="white-space: pre-line;">' . nl2br(htmlspecialchars($message)) . '</td>
        </tr>
    </table>

    <div class="btn-container">
        <a href="tel:' . preg_replace('/[^0-9+]/', '', $phone) . '" class="btn">Call Customer Now</a>
    </div>
';

// Inject dynamic content into template
$final_email_body = str_replace('{{body_content}}', $body_content, $template_content);

// Subject line
$subject = "⚡ New Service Request: " . $service_type . " - " . $name;

// Clean RFC 2822 Headers
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/html; charset=UTF-8";
$headers[] = "From: {$site_name} <{$from_email}>";
$headers[] = "Reply-To: {$name} <{$email}>";
$headers[] = "Cc: {$email}";
$headers[] = "X-Mailer: PHP/" . phpversion();

// 5th parameter '-f' sets Envelope Return-Path to prevent server drops
$mail_sent = mail($admin_email, $subject, $final_email_body, implode("\r\n", $headers), "-f{$from_email}");

if ($mail_sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Your quote request has been sent successfully! We will contact you shortly.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Failed to send email. Please try calling us directly at 0405 005 869.'
    ]);
}