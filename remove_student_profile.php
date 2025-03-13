<?php
include("connection.php");
$id=$_GET['id'];
$qry="DELETE FROM student_register where id ='$id' ";

$data=mysqli_query($con, $qry);

   echo '<script>
           window.location.href="mannage.php" </script>';




?>