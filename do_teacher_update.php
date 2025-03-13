<?php 
    include('connection.php');
    
    if(isset($_POST["fname"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $bloodg = $_POST["bloodg"];
        $nationality = $_POST["nationality"];
        $religion = $_POST["religion"];
        $catagory = $_POST["catagory"];
        $qualification = $_POST["qualification"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $id = $_POST["id"];
        
        if(!isset($_POST["image"])){
            // echo $_POST["image"];
            // echo "image";
            $folder=$_POST["hidden_img"];
        } else {
            $filename=$_FILES["image"]["name"];
            $tempname=$_FILES["image"]["tmp_name"];
            $cm_id=rand(1111,9999);
            $folder="profile_images/".$cm_id.".jpg";
            move_uploaded_file($tempname, $folder);    

            $allowed_exttension=array('gif','png','jpg','jpeg','webp');
            $file_exttension= pathinfo($filename,PATHINFO_EXTENSION);

        // if(!in_array($file_exttension,$allowed_exttension))
        // {
        //     echo("hi");
        //     // header("location:teacher.php");
        // }
        }

        

        // Check if the email already exists
        $duplication = mysqli_query($con, "SELECT * FROM teacher_register WHERE email='$email' AND id != $id");

        if(mysqli_num_rows($duplication) > 0){
            // If email already exists
            echo '<script>alert("Email Id Already Exist");</script>';
        } else {
            // If email does not exist, proceed with updating the record
            $qry = "UPDATE teacher_register SET 
                    fname='$fname', 
                    lname='$lname', 
                    dob='$dob', 
                    gender='$gender', 
                    addres='$address', 
                    photo='$folder',
                    bloodg='$bloodg', 
                    nationality='$nationality', 
                    religion='$religion',
                    catagory='$catagory',
                    qualification='$qualification',
                    mobile='$mobile', 
                     email='$email',
                     pass='$password', 
                     cpassword='$cpassword' 
                    WHERE id=$id";

            // Execute the update query
            $result = mysqli_query($con, $qry);

            // Check if query executed successfully
            if($result){
                echo '<script>alert("Details updated successfully.");</script>';
                // echo '<script>alert("'.$folder.'");</script>';
            } else {
                echo '<script>alert("Error updating details.");</script>';
            }
        }
    }

    // Redirect after update (if needed)
    header("Location: teacher_mannage.php");
?>
