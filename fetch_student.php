<?php
include("connection.php");
if(isset($_POST["course"])){
    $course = $_POST["course"];
    $class = $_POST["class"];
    $sub= $_POST["sub"];
$qry= "SELECT id from course where course='$course'";
$result = mysqli_query($con,$qry) ;
$row = mysqli_fetch_assoc($result); 

$cid= $row["id"];
header("Location: AP.php?cid=$cid&class=$class&sub=$sub");
exit(); // Always include exit() after header redirects



}


?>