<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email details
    $to = "100162@glr.nl";  // Replace with the email you want to send to
    $subject = "New Message from Portfolio Contact Form";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Message content
    $email_content = "<html><body>";
    $email_content .= "<h2>New Contact Message</h2>";
    $email_content .= "<p><strong>Name:</strong> {$name}</p>";
    $email_content .= "<p><strong>Email:</strong> {$email}</p>";
    $email_content .= "<p><strong>Message:</strong><br>{$message}</p>";
    $email_content .= "</body></html>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>
