<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message";

    // Set the recipient email address
    $to = "infante.portero@gmail.com";

    // Set the email subject
    $subject = "Contact Form Submission";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Check your server's error log for more details.";
    }

    // Redirect to the form page
    header("Location: ../index.html");
    exit();
}
?>
