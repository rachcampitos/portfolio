<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'raulo87@gmail.com'; // Your email address
    $subject = 'New message from your website';
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
