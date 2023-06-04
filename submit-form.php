<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email message
$to = 'contact@cosmiclightaerospace.com';
$subject = 'New message from Cosmic Light Aerospace contact form';
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $email";

// Send the email
if (mail($to, $subject, $body, $headers)) {
  echo 'Thank you for your message. We will get back to you soon.';
} else {
  echo 'There was an error sending your message. Please try again later.';
}
?>