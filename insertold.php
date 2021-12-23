<?php

include 'connection.php';

if(isset($_POST['submit']))
{
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