<?php 


include 'connection.php';



if(isset($_POST['submit']))
{
    echo "jddddddddd";

    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['type'];
    $d=$_POST['message'];
 

   
    $insert="INSERT INTO home(name,email,type,message) values('$a','$b','$c','$d')";

    if(mysqli_query($db,$insert))
    {
        header('Location:index.php');
    }

}
else{
    echo"eror";
}




?>