<?php
// Include the PHPMailer library
require 'path/to/PHPMailer/PHPMailerAutoload.php';

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'omar.elarroud13@gmail.com';

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Set up SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.example.com'; // Replace with your SMTP host
$mail->SMTPAuth = true;
$mail->Username = 'your_username'; // Replace with your SMTP username
$mail->Password = 'your_password'; // Replace with your SMTP password
$mail->Port = 587; // Replace with your SMTP port

// Set up email content
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress($receiving_email_address);
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'An error occurred. Please try again later.';
}
?>