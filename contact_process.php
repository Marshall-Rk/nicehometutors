<?php 
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$sender_email = "testingpixel9943@gmail.com";
$sender_password = "marshall@9943";
function sendMail($to, $subject, $msg)
{
    global  $sender_password, $sender_email;
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $sender_email;
        $mail->Password = $sender_password;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom($sender_email, "Nice Home Tutors");
        $mail->addAddress($to);
        $mail->addCC('nicehometutors1@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->send();
        return true;
    } catch (Exception $e) {
        $error = "There was an error while sending the mail but your registartion request has been submitted to us.";
        return false;
    }
}

if(isset($_POST['teachersubmit'])){
$message = $_POST['message'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$address = $_POST['address'];
$country = $_POST['country'];



$formcontent="From: $name \n Experience: $message \n Age: $age \n Email: $email \n Phone: $phone \n Subject: $subject \n Address: $address \n Country/location: $country ";

if (sendMail($email,'STUDENT REGISTRATION FORM',$formcontent))
$_SESSION['mailflag']='sent';
else 
$_SESSION['mailflag']='unsent';
header('location:index.php');

}else{
    header('location:index.php');
    
}
?>  