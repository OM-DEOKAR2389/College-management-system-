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

tr{
    font-size: 25px;
}
th{
   
}

</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 dash bg-primary">
                <div class="row text-white text-center mt-5">
                <a href="Admin.php" class="border mb-3" style="color: white; text-decoration: none; font-size:25px; font-family: 'Times New Roman', Times, serif;"><i class="fa-duotone fa-solid fa-backward"></i> Home</a>
                    <h2>Teacher</h2>
                    <hr>
                </div>
                <div class="row text-center std">
                      <ul>
                        <li><a href="teacher.php">Add Teacher </a></li>
                        <li><a href="teacher_mannage.php">Manage Teacher</a></li>
                        <li><a href="show_teacher.php">Show Teacher</a></li>
                        <li><a href="#">Show Leave</a></li>
                        <li><a href="#">Notify staff</a></li>
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
             <h2>Manage Teacher</h2> <hr>
              <div class="row">
                <div class="col-12">
                    <div class="row">
                    <table border="1">
                        <tr>
                            <th  class='text-center'>Sr.no </th>
                            <th >Teacher Name</th>
                        </tr>
                        <?php
                        $qry="SELECT * From teacher_register";
                        $result=mysqli_query($con, $qry) or die(mysqli_error());
                        $count=1;
                        while($row=mysqli_fetch_assoc($result))
                        {
                            echo"<tr><td class='text-center'>".$count."</td><td class='ms-5'>".$row["fname"]." ".$row["lname"];
                            echo "<td><a href='view_teacher.php?id=".$row["id"]."'><button class='btn btn-success me-5 mt-3'>View</button></a> 
                            <a href='edit_teacher_profile.php?id=".$row["id"]."'><button class=' mt-3 me-5 btn btn-primary'>Edit Profile</button></a> 
                             <a href='subject_assigning.php?id=".$row["id"]."'><button class=' mt-3 btn btn-info'>Add Subject </button></a>
                            <a href='remove_teacher_profile.php?id=".$row["id"]."'><button class=' mt-3 btn btn-danger'>Remove </button></a></td>
                            <tr>";
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