

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$sender_email = "";
$sender_password = "";
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
        $mail->setFrom($sender_email, "Maple Space");
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = "$subject";
        $mail->Body = "<h1 style='color:#ff3300'>$msg</h1>";
        $mail->send();
        return true;
    } catch (Exception $e) {
        $error = "There was an error while sending the mail but your registartion request has been submitted to us.";
        return false;
    }
}


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
$leclocation = $_POST['leclocation'];


$formcontent = "Student Registration From: \n  $first_name $last_name \n Birthday: $birthday  \n E-mail: $email \n Location: $location \n Address: $address \n Phone no: $phone1 $phone2   \n Course: $course \n Board: $board \n Session: $session \n gender: $gender \n when: $when \n Lecture location: $leclocation  ";

$recipient = "rajkamalgautam2001@gmail.com";
$subject = "Student Registration Form";

sendMail($recipient,  $formcontent, $mailheader);
echo "<h4>Thank you for contacting us – we will get back to you soon!</h4>";
?>  