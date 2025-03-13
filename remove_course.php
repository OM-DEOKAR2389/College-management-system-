<?php
include("connection.php");
$id=$_GET['id'];
$qry="DELETE FROM course where id ='$id' ";


$data=mysqli_query($con, $qry);

   echo '<script>alert("")
           window.location.href="mannage_course.php" </script>';




?>