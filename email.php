<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Status</title>
</head>

<body>

    <h1>Email Status
    </h1>

    <?php
session_start();
if (isset($_SESSION['email_sent'])) {
    if ($_SESSION['email_sent']) {
        echo 'Email sent successfully!';
    } elseif (isset($_SESSION['error_message'])) {
        echo 'Failed to send email. Error: ' . htmlspecialchars($_SESSION['error_message']);
    }
    unset($_SESSION['email_sent'], $_SESSION['error_message']); // Clear session variables
} else {
    echo 'Invalid request';
}
?>

<button onclick="window.location.href='index.html'">Back to Home Page</button>

</body>

</html>
