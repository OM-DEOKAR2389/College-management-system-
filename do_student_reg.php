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
   $date=date("d/m/Y");

   $qry="INSERT into student_register (
`fname` ,
`lname` ,
`dob` ,
`gender` ,
`bloodg` ,
`nationality` ,
`religion` ,
`catagory` ,
`10marks` ,
`10year` ,
`12mark` ,
`12year` ,
`ffname` ,
`flname` ,
`fmobile` ,
`femail` ,
`foccupation` ,
`mfname` ,
`mlname` ,
`mmobile` ,
`memail` ,
`moccupation`,
`course`,
`class`,
`course_fee`,
`fee_paid`,
`due_fee`,
`adm_date`) values ('$fname','$lname', '$dob', '$gender', '$bloodg', '$nationality', '$religion', '$catagory', '$sscm%', '$sscy', '$hscm%', '$hscy', '$ffname', '$flname', '$fmobile', '$femail', '$foccupation', '$mfname', '$mlname', '$mmobile', '$memail', '$moccupation','$course','$class','$course_fee','$fee_paid','$due_fee','$date')";
  
mysqli_query($con, $qry);

echo'<script>alert("Registration Successfull")
   </script>';

   

}

header("location:generate_adimission_reciept.php");


?>