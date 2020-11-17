<?php 
$submit = $_POST['submit'];


$formcontent="From: $submit";
$recipient = "rajkamalgautam2001@gmail.com";
$subject = "Contact Mail";
$mailheader = "From: $email \r\n";
mail($submit) or die("Error!");
echo "Thank You!";
?>  