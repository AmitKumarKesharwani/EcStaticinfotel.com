<?php 
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$E_mail="ecstaticinfotel.com";
	
//Start Email
$EmailTo = trim(stripslashes("info@ecstaticinfotel.com"));
$Subject =$E_mail;
 
// validation
$validationOK=true;
if (!$validationOK) 
{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "E-Mail : ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone No : ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Message : ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
// redirect to success page
header('location:index.php'); 
//End Email	

?>