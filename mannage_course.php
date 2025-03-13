<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://kit.fontawesome.com/c82427e6c1.js" crossorigin="anonymous"></script>
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

                <a href="Admin.php" class="border mb-3" style="color: white; text-decoration: none; font-size:25px; font-family: 'Times New Roman', Times, serif;"><i class="fa-duotone fa-solid fa-backward"></i> Home</a><h2>Course</h2>
                    <hr>
                </div>
                <div class="row text-center std">
                      <ul>
                       <li><a href="course.php">Add Course</a></li>
                        <li><a href="mannage_course.php">Manage Course</a></li>
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
             <h2>Manage Course</h2> <hr>
             <div class="row justify-content-center">
               <table>
                <tr>
                    <th>Sr.no</th>
                    <th>Course Name</th>
                </tr>
               <?php
               
               include("connection.php");

                $qry="SELECT * from course";
                $result=mysqli_query($con,$qry);
                $count=1;
               while($row=mysqli_fetch_assoc($result)){
                    echo"<tr><td> $count</td><td>".$row["course"]."</td><td><a href='remove_course.php?id=".$row["id"]."'><button class='btn btn-danger'>Remove</button></td></tr>";

                 $count++;


               }

               ?>
                </table>




               </div>
              
             
        </div>
    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>