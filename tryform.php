<?php 
$message = $_POST['message'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$address = $_POST['address'];

$formcontent="From: $name \n Message: $message";
$recipient = "rajkamalgautam2001@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>  