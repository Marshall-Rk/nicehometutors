

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
if(isset($_POST['register_student'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$location = $_POST['location'];
$address = $_POST['address'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$course = $_POST['course'];
$subjects = $_POST['subjects'];
$board = $_POST['board'];
$session = $_POST['session'];
$gender = $_POST['gender'];
$when = $_POST['when'];
$leclocation = $_POST['leclocation'];

$formcontent = "<p style='color:teal; font-weight:1000'>Student Registration From: \n  $first_name $last_name \n Birthday: $birthday  \n E-mail: $email \n Location: $location \n Address: $address \n Phone no: $phone1 $phone2   \n Course: $course \n Subjects: $subjects \n Board: $board \n Session: $session \n gender: $gender \n when: $when \n Lecture location: $leclocation </p>";

if (sendMail($email,'STUDENT REGISTRATION FORM',$formcontent))
$_SESSION['mailflag']='sent';
else 
$_SESSION['mailflag']='unsent';
header('location:index.php');

}else{
    header('location:index.php');
    
}
?>  