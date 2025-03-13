<?php
include("connection.php");
//  echo($_POST['id']);
 if(isset($_POST['id']))
 {
   echo $_POST["id"];
    
    $filename=$_FILES["image"]["name"];
    $tempname=$_FILES["image"]["tmp_name"];
    $folder="profile_images/".$_POST['id'].'1'.".jpg";
    move_uploaded_file($tempname, $folder);

    

   //  echo($folder);
    $cm_id=rand(1111,9999);

    $allowed_exttension=array('gif','png','jpg','jpeg','webp');
    $file_exttension= pathinfo($filename,PATHINFO_EXTENSION);

    if(!in_array($file_exttension,$allowed_exttension))
    {
      echo("hi");
      header("location:teacher_image_upload.php");
    }
    
    $q="UPDATE teacher_register set photo='$folder' where id=".$_POST['id'];
    echo $q;
    mysqli_query($con,$q);
    // header("location:index.php?page=home");
    }
 
?>