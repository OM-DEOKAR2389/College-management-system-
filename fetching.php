<?php 
include("connection.php");
if (isset($_POST["course"])) {
    $q = "select course_fee from course  where course ='".$_POST["course"]."'";
}
$check = mysqli_query($con, $q);
// echo $q;
if ($check->num_rows > 0) {
    $row=mysqli_fetch_array($check);
   echo("<h4 id='course_fee'>".$row["course_fee"]."</h4> <input type='hidden' name='course_fee' value='".$row["course_fee"]."'>");
}
// echo "hii";
    
?>