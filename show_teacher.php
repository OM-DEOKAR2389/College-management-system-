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
                    <h2>Teacher</h2>
                    <hr>
                </div>
                <div class="row text-center std">
                      <ul>
                        <li><a href="teacher.php"> Add Teacher</a></li>
                        <li><a href="teacher_mannage.php">Manage Teacher</a></li>
                        <li><a href="show_teacher.php">Show Teacher</a></li>
                        <li><a href="#">Show Leave</a></li>
                        <li><a href="#">Notify staff</a></li>
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
            <a href="Admin.php" class="border mb-3" style="color: white; text-decoration: none; font-size:25px; font-family: 'Times New Roman', Times, serif;"><i class="fa-duotone fa-solid fa-backward"></i> Home</a>
             <h2>Show Teacher</h2> <hr>
               <div class="row">
                <div class="col">
                    <div class="row">
                     <table>
                        <tr>
                            <th class="text-center">Sr.No</th>
                            <th class="text-center">Teacher Name</th>
                            <th class="text-center">Course</th>
                            <th class="text-center">Class</th>
                        </tr>

                        <?php
                        $qry="SELECT * from teacher_register";
                        $result=mysqli_query($con,$qry);
                        $count=1;
                        while($row=mysqli_fetch_assoc($result)){
                            echo"<tr><td class='text-center'>".$count."</td><td class='text-center'>".$row["fname"]." ".$row["ffname"]." ".$row["lname"]."</td><td class='text-center'>".$row["course"]."</td><td class='text-center'>".$row["class"]."</td></tr>";
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