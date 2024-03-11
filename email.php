<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        html {
            background-color: #fbebcf;

        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        .status-message {
            margin: 20px;
            padding: 15px;
            border-radius: 5px;
        }

        .success {
            background-color: #D4EDDA;
            color: #155724;
        }

        .error {
            background-color: #F8D7DA;
            color: #721C24;
        }

        button {
            background-color: #fff;
            color: #333;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h1>Estado de tu mensaje</h1>

    <?php
    session_start();

    if (isset($_SESSION['email_sent'])) {
        if ($_SESSION['email_sent']) {
            echo '<div class="status-message success">¡Se envió tu correo!</div>';
        } elseif (isset($_SESSION['error_message'])) {
            echo '<div class="status-message error">Failed to send email. Error: ' . htmlspecialchars($_SESSION['error_message']) . '</div>';
        }
        unset($_SESSION['email_sent'], $_SESSION['error_message']); // Clear session variables
    } else {
        echo '<div class="status-message error">Error: No se pudo enviar el correo.</div>';
    }
    ?>

    <button onclick="window.location.href='index.html'">Back to Home Page</button>

</body>

</html>