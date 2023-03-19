<?php
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send the email
  $to = 'nutriseamoss@gmail.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  mail($to, $subject, $body, $headers);

  // Redirect the user to a thank-you page
  header('Location: thank-you.html');
?>
