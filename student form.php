<?php 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$location = $_POST['location'];
$address = $_POST['address'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$course = $_POST['course'];
$board = $_POST['board'];
$session = $_POST['session'];
$gender = $_POST['gender'];
$when = $_POST['when'];
$exist = $_POST['exist'];


$formcontent="Student Registration From:$subject \n  $first_name $last_name \n Birthday: $birthday  \n E-mail: $email \n Location: $location \n Address: $address \n Phone no: $phone1 $phone2   \n Course: $course \n Board: $board \n Session: $session \n gender: $gender \n when: $when \n exist: $exist  ";

$recipient = "rajkamalgautam2001@gmail.com";
$subject = "Student Registration Form";
$mailheader = "From: $email \r\n";
mail($recipient,  $formcontent, $mailheader) or die("Error!");
echo "<h6>Thank you for contacting us – we will get back to you soon!</h6>";
?>  