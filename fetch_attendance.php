<?php
include("connection.php");
if(isset($_POST["course"])){
    $course = $_POST["course"];
    $class = $_POST["class"];
    $sub= $_POST["sub"];
    $date= $_POST["date"];
$qry= "SELECT id from course where course='$course'";
$result = mysqli_query($con,$qry) ;
$row = mysqli_fetch_assoc($result); 

$cid= $row["id"];
header("Location: view_attendance.php?cid=$cid&class=$class&sub=$sub&date=$date");
exit(); // Always include exit() after header redirects



} else {    
    echo "<script>alert('Please fill up all information.');
    window.location.href='view_attendance.php'</script>";
}


?>