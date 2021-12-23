<?php

include 'connection.php';
include "PHPMailer/PHPMailer/src/PHPMailer.php";
include "PHPMailer/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))
{


    // mail
    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'msender353@gmail.com';                     //SMTP username
    $mail->Password   = 'mailsender';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465; 
    //Recipients
    $mail->setFrom('msender353@gmail.com', 'Notification');
    $mail->addAddress('info@ecstaticinfotel.com', 'Admin');     //Add a recipient
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Notification from admin panel ';
     $mail->Body    = 'You got a query in <b>contact page!!</b>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
     $mail->send();


    // mail ends
    $a=$_POST['name'];
    $b=$_POST['lastname'];
    $c=$_POST['email'];
    $d=$_POST['enquirytype'];
    $e=$_POST['enquiry'];

    $insertquery="INSERT INTO contacts(name,lastname,email,enquirytype,enquiry) values('$a','$b','$c','$d','$e')";
    if(mysqli_query($db,$insertquery))
    {

        header("Location:Contact.php");
        
    }








}







?>