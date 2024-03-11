<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "infante.portero@gmail.com";

    // Set the email subject
    $subject = "Contact Form Submission";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Send the email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Change this to your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'infante.portero@gmail.com'; // Change this to your SMTP username
        $mail->Password = 'vhla vnns yevs qmof'; // Change this to your SMTP password
        $mail->SMTPSecure = 'tls'; // Change this to 'ssl' or 'tls' based on your server
        $mail->Port = 587; // Change this to your SMTP port

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $email_message;

        $mail->send();

        // Set a session variable for success
        session_start();
        $_SESSION['email_sent'] = true;

        // Redirect to email.html
        header("Location: ../email.php");
        exit();
    } catch (Exception $e) {
        // Set a session variable for error
        session_start();
        $_SESSION['email_sent'] = false;
        $_SESSION['error_message'] = "Failed to send email. Error: {$mail->ErrorInfo}";

        // Redirect to email.html
        header("Location: ../email.php");
        exit();
    }
}

