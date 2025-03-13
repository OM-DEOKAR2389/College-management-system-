<?php 
    include('connection.php');
    if(isset($_POST["fname"])){
        $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $addres=$_POST["address"];
    //$photo=$_POST["photo"];
    $bloodg=$_POST["bloodg"];
    $nationality=$_POST["nationality"];
    $religion=$_POST["religion"];
    $catagory=$_POST["catagory"];
    $qualification=$_POST["qualification"];
    $course=$_POST["course"];
    $class=$_POST["class"];
    $sub=$_POST["sub"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    $filename=$_FILES["image"]["name"];
    $tempname=$_FILES["image"]["tmp_name"];
    $cm_id=rand(1111,9999);
    $folder="profile_images/".$cm_id.".jpg";
    move_uploaded_file($tempname, $folder);

    

   //  echo($folder);
    

    $allowed_exttension=array('gif','png','jpg','jpeg','webp');
    $file_exttension= pathinfo($filename,PATHINFO_EXTENSION);

    if(!in_array($file_exttension,$allowed_exttension))
    {
      echo("hi");
      header("location:teacher.php");
    }
    

            $duplication=mysqli_query($con,"SELECT * FROM teacher_register WHERE email='$email'");
            if(mysqli_num_rows($duplication)>0){

       
                echo '<script>alert("Email Id Already Exist");
                </script>';
            }
                 else{

                $qry="INSERT INTO teacher_register (fname,lname,dob,gender,addres,photo,bloodg,nationality,religion,catagory,qualification,course,class,subject,mobile,email,pass,cpassword) values('$fname','$lname','$dob','$gender','$addres','$folder','$bloodg','$nationality','$religion','$catagory','$qualification','$course','$class','$sub','$mobile','$email','$password','$cpassword')  ";
                // header("location:teacher.php");
            }            
            
        
        
        echo $qry;
        mysqli_query($con,$qry);
      
        // echo '<script>
        // alert("Registration successfully");
        // </script>';

        // if (mysqli_query($con, $qry)) {
        //     echo '<script>alert("Record saved successfully!");</script>';
        // } else {
        //     echo '<script>alert("Error: ' . mysqli_error($con) . '");</script>';
        // }

}

    header("location:teacher.php");
    
?>