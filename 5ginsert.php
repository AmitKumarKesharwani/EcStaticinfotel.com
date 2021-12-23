<?php

include 'connection.php';

if(isset($_POST['submit']))
{
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['companyname'];
    $d=$_POST['contactnumber'];
    $e=$_POST['message'];

    $insertquery="INSERT INTO 5gservices(name,email,companyname,contactnumber,message) values('$a','$b','$c','$d','$e')";
    if(mysqli_query($db,$insertquery))
    {
        header("Location:5GServices.php");
    }








}







?>