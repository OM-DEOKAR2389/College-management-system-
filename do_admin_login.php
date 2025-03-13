<?php

include("connection.php");
if(isset($_POST["email"]) )
{

    $email = $_POST["email"];
    $password = $_POST["password"];

    $qry="SELECT * from admin_login Where email='$email' and pass='$password'";
    
    $res=mysqli_query($con,$qry) ;

    echo $qry;

    if($row=mysqli_fetch_assoc($res))
    {
        session_start();
        $_SESSION["id"]=$row["id"];
        echo '<script>alert("Login Successful");
        window.location.href="Admin.php";
        </script>';

      
    }else{
       
        echo '<script>alert("Oops Try again");
        window.location.href="admin-login.php";
        </script>';

    }
  

}




?>