<?php
include("connection.php");
if(isset($_POST["course"]) && isset($_POST["class"]) && isset($_POST["sub"])){
$course=$_POST["course"];
$tid=$_POST["tid"];
$class=$_POST["class"];
$sub=$_POST["sub"];
// echo $tid;

$qry="INSERT into class_assigning (`course`,`tid`,`class`,`sub`) values ('$course',$tid,'$class','$sub')";
echo $qry;
mysqli_query($con,$qry);

    echo "<script>
        alert('Subject Assigned Successfully..');
        window.location.href='subject_assigning.php';
        </script>";
}
else {
    echo "<script>
    alert('Please fillup all fields.');
    window.location.href='subject_assigning.php';
    </script>";
}
?>