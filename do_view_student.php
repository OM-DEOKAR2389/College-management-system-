<?php
include("connection.php");


if(isset($_POST["course"]))
{
    $course=$_POST["course"];
    $class=$_POST["class"];
   
    $qry="SELECT * From course where course='$course'";
    $res=mysqli_query($con,$qry);
    $row=mysqli_fetch_assoc($res);

    

      $row["id"];

    header("location:show.php?class=$class&cid=".$row["id"]);
}

?>