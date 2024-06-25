<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    // Email parameters
    $to = 'info@westmeadows.com.au';
    $headers = "From: $email\r\nReply-To: $email";
    
    // Compose email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo '<script>alert("Message sent successfully!"); window.location.replace("/");</script>';
    } else {
        echo '<script>alert("Failed to send message. Please try again later."); window.location.replace("/");</script>';
    }
}
?>
