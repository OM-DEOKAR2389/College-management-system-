<?php

include("connection.php");
if(isset($_POST["email"]) )
{

    $email = $_POST["email"];
    $password = $_POST["password"];

    $qry="SELECT * from teacher_register Where email='$email' and pass='$password'";
    
    $res=mysqli_query($con,$qry) ;

    echo $qry;

    if($row=mysqli_fetch_assoc($res))
    {
        session_start();
        $_SESSION["id"]=$row["id"];
        $_SESSION["email"]=$row["email"];
       // header("location:AP.php?".$row["id"]);
       header("location:AP.php?".$_SESSION["id"]);


    }else{
        header("location:teacher_login.php");

    }
  

}




?>