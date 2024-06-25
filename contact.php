<?php
    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
            echo "Error: Please fill in all fields.";
        } else {
            $to = "pyanz.jheo123@gmail.com"; // Replace with your email address
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $subject = trim($_POST['subject']);
            $message = trim($_POST['message']);

            $headers = "From: $email";
            $mailsent = mail($to, $subject, $message, $headers);

            if ($mailsent) {
                echo "Mail sent successfully!";
            } else {
                echo "Error sending email.";
            }
        }
    }
?>