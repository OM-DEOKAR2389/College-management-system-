<?php
include("connection.php");

if(isset($_POST["course"]))
{
 $course=$_POST["course"];
   $class=$_POST["class"];
   $course_fee=$_POST["course_fee"];    
   $fee_paid=$_POST["fee_paid"];
   $due_fee=$_POST["due_fee"];
   $id=$_POST["id"];
   
   $qry="UPDATE student_register SET

 fee_paid='$course_fee',
 due_fee='0'
 WHERE id=$id";

mysqli_query($con,$qry);
header("location:generate_updated_receipt.php?id=$id&f=$due_fee");
}
?>