<?php 


include 'connection.php';

if(isset($_POST['submit']))
{

    $a=$_POST['name'];
    $b=$_POST['lastname'];
    $c=$_POST['email'];
    $d=$_POST['job'];
    $e=$_POST['country'];
    $f=$_POST['company'];
    $g=$_POST['contactnumber'];

    // $sql='INSERT INTO educationcloud(name,lastname,email,job,country,company,contactnumber)  values("$a",$b,$c,$d,$e,$F,$g)';
    $insert="INSERT INTO supplychainmanagement(name,lastname,email,job,country,company,contactnumber) values('$a','$b','$c','$d','$e','$f','$g')";

    if(mysqli_query($db,$insert))
    {
        header('Location:SupplyChain.php');
    }

}




?>