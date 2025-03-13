<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.dash{
    height: 100vh;
}
.std a{
    text-decoration: none;
    color: white;
}
.std li{
    margin-bottom: 20px;
    font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
}
body{
    font-family: 'Times New Roman', Times, serif;
}
label{
    font-size: 20px;
}
table{
    font-size: 25px;
}

</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 dash bg-primary">
                <div class="row text-white text-center mt-5">
                <a href="Admin.php" class="border mb-3" style="color: white; text-decoration: none; font-size:25px; font-family: 'Times New Roman', Times, serif;"><i class="fa-duotone fa-solid fa-backward"></i> Home</a>
                    <h2>Student</h2>
                    <hr>
                </div>
                <div class="row text-center std">
                      <ul>
                        <li><a href="student.php"> Admissions</a></li>
                        <li><a href="mannage.php">Manage Student</a></li>
                        <li><a href="show.php">Show Student</a></li>
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
             <h2>Manage student</h2> <hr>
             <div class="row">
                <div class="col">
                    <div class="row">
                   
                     <table>
                        <tr>
                            <th class="text-center">Sr.No</th>
                            <th class="text-center">Student Name</th>
                           
                        </tr>

                        <?php
                        $qry="SELECT * from student_register";
                        $result=mysqli_query($con,$qry);
                        $count=1;
                        while($row=mysqli_fetch_assoc($result)){
                            // echo"<tr><td class='text-center'>".$count."</td><td class='text-center'>".$row["fname"]." ".$row["lname"]"</td>";
                            //    $count++;



                               echo"<tr><td class='text-center'>".$count."</td><td class='text-center ms-5'>".$row["fname"]." ".$row["lname"];
                               echo "<td><a href='view_student.php?id=".$row["id"]."'><button class='btn btn-success me-5 mt-3'>View</button></a> 
                               <a href='edit_student_profile.php?id=".$row["id"]."'><button class=' mt-3 me-5 btn btn-primary'>Edit Profile</button></a> 
                               <a href='update_admission.php?id=".$row["id"]."'><button class=' mt-3 me-5 btn btn-info'>Update Fee</button></a> 
                               <a href='remove_student_profile.php?id=".$row["id"]."'><button class=' mt-3 btn btn-danger'>Remove </button></a></td></td> <tr>";
                               $count++;
                        }
                        
                        ?>

                     </table>
                     </div>
                     
                </div>
               </div>
              
             
        </div>
    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>