<?php 
$message = $_POST['message'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$address = $_POST['address'];
$country = $_POST['country'];



$formcontent="From: $name \n Experience: $message \n Age: $age \n Email: $email \n Phone: $phone \n Subject: $subject \n Address: $address \n Country/location: $country ";
$recipient = "rajkamalgautam2001@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<h4>Thank you for contacting us – we will get back to you soon!</h4>";
?>  