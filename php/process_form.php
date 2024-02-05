<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message";

    $to = "infante.portero@gmail.com"
    $subject = "Contact Form Submission";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    $headers = "From: $email";

    mail($to, $subject, $email_message, $headers);

    echo "Email sent successfully!";
    exit();

}
?>