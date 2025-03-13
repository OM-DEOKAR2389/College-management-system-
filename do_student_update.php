<?php
include("connection.php");

if(isset($_POST["fname"])){
   $fname=$_POST["fname"];
   $lname=$_POST["lname"];
   $dob=$_POST["dob"];
   $gender=$_POST["gender"];
   $bloodg=$_POST["bloodg"];
   $nationality=$_POST["nationality"];
   $religion=$_POST["religion"];
   $catagory=$_POST["catagory"];
   $sscm=$_POST["10m"];
   $sscy=$_POST["10y"];
   $hscm=$_POST["12m"];
   $hscy=$_POST["12y"];
   $ffname=$_POST["ffname"];
   $flname=$_POST["flname"];
   $fmobile=$_POST["fmobile"];
   $femail=$_POST["femail"];
   $foccupation=$_POST["foccupation"];
   $mfname=$_POST["mfname"];
   $mlname=$_POST["mlname"];
   $mmobile=$_POST["mmobile"];
   $memail=$_POST["memail"];
   $moccupation=$_POST["moccupation"];
   $course=$_POST["course"];
   $class=$_POST["class"];
   $course_fee=$_POST["course_fee"];
   $fee_paid=$_POST["fee_paid"];
   $due_fee=$_POST["due_fee"];
   $id=$_POST["id"];


   $qry="UPDATE student_register SET
 fname='$fname' ,
 lname='$lname' ,
 dob='$dob' ,
 gender='$gender' ,
 bloodg='$bloodg' ,
 nationality='$nationality' ,
 religion='$religion' ,
 catagory='$catagory' ,
 10marks='$sscm' ,
 10year='$sscy' ,
 12mark= '$hscm',
 12year='$hscy',
 ffname='$ffname' ,
 flname='$flname' ,
 fmobile='$fmobile' ,
 femail='$femail' ,
 foccupation='$foccupation' ,
 mfname='$mfname' ,
 mlname='$mlname' ,
 mmobile='$mmobile' ,
 memail='$memail' ,
 moccupation='$moccupation',
 course='$course',
 class='$class',
 course_fee='$course_fee',
 fee_paid='$fee_paid',
 due_fee='$due_fee'
 WHERE id=$id";

 mysqli_query($con,$qry);
 echo $qry;

}
// header("Location: mannage.php");

?>