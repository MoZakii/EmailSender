<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$errors = [];

if (empty($name)) {
  $errors[] = "Name is required.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Invalid email address.";
}

if (empty($subject)) {
  $errors[] = "Subject is required.";
}

if (empty($message)) {
  $errors[] = "Message is required.";
}

if (!empty($errors)) {
  $errorString = implode(' ', $errors);
  header("Location: Page.php?error=" . urlencode($errorString));
  exit;
}

$to = $email;
$from = "mohamed.zaki78963@gmail.com";
$body = $message;
$headers = "From: $from\n";

if (mail($to, $subject, $body, $headers)) {
  echo "Your message has been sent successfully!";
} else {
  echo "Error sending email.";
}

?>