<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "ceovertical@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send the email
    mail($to, $subject, $body);
    
    // Redirect or show a thank you message
    echo "Thank you for contacting us!";
}
?>
