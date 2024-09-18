<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email configuration
    $to = 'abdhulfathirworks@gmail.com'; // Replace with your email address
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
      echo 'Your message has been sent. Thank you!';
    } else {
      echo 'Sorry, there was a problem sending your message.';
    }
  }
?>
