<?php
include("connection.php");
$id=$_GET['id'];
$qry="DELETE FROM teacher_register where id ='$id' ";

$data=mysqli_query($con, $qry);
if($data){
    header("location:teacher_mannage.php");
}



?>