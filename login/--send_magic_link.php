<?php
require_once '../db-connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email (you can add more validation)
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        echo "Please provide a valid email address.";
        exit;
    }

    // Generate a random token for the magic link
    $token = bin2hex(random_bytes(16)); // Generating a random token

    // You can include additional information like IP address, device, date/time, etc.
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $deviceInfo = $_SERVER['HTTP_USER_AGENT'];
    $currentDateTime = date("Y-m-d H:i:s");

    // Compose email content
    $emailSubject = "Your Login Link";
    $emailFrom = "From: QR Codifier <info@qr-codifier.com>";
    $emailMessage = "Here is your login link: https://qr-codifier.com/login/verify-magic-link?token=$token\n\n";
    $emailMessage .= "Some information about the person:\n";
    $emailMessage .= "IP Address: $ipAddress\n";
    $emailMessage .= "Device: $deviceInfo\n";
    $emailMessage .= "Date: $currentDateTime";

    // Send email
    if (mail($email, $emailSubject, $emailMessage, $emailFrom)) {
        echo "Use a Login Link. Check your email!";
    } else {
        echo "Failed to send the email. Please try again later.";
    }
} else {
    echo "Method not allowed.";
}
?>
