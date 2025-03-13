<?php
include("connection.php");
$id=$_GET['id'];
$qry="DELETE FROM subjects where id ='$id' ";

$data=mysqli_query($con, $qry);

   echo '<script>
           window.location.href="mannage_subject.php" </script>';




?>