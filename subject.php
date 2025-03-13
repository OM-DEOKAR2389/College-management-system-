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

                <a href="Admin.php" class="border mb-3" style="color: white; text-decoration: none; font-size:25px; font-family: 'Times New Roman', Times, serif;"><i class="fa-duotone fa-solid fa-backward"></i> Home</a><h2>Subject</h2>
                    <hr>
                </div>
                <div class="row text-center std">
                      <ul>
                        <li><a href="Subject.php">Add Subject</a></li>
                        <li><a href="mannage_subject.php">Manage Subject</a></li>
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
             <h2>Add Subject</h2> <hr>
             <div class="row justify-content-center">
               <div class="col-9">
                <form action="" class="text-center border border-dark p-5 rounded-1 mt-5" method="post">
                  <div class="row">
                    <div class="col-4">
                    <input class="form-control" type="text" placeholder="Subject Name" name="subject" required><br>
                    </div>
                    <div class="col-4">
                    <select class="form-select" name="course" id="" required>
                                 <option >Select Course</option>

                        <?php
                        include("connection.php");
                          $qry="SELECT * from course";
                          $result=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_assoc($result)){

                            echo"<option value=".$row["course"].">".$row["course"]."</option>";
                        }

                        ?>


                                <!-- <option >Select Course</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option> -->
                               
                              </select>


                    </div>
                    <div class="col-4">
                    <select class="form-select" name="class" id="" required>
                                <option >Select class</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                
                              </select>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="row">
                    <button type="submit" class="btn btn-primary">Add Subject</button>
                    </div>
                    </div>
                    </div>
                  </div>
                   </form>
                     
                   </div>
               </div>
              
             
        </div>
    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>



<?php
include("connection.php");

if(isset($_POST["subject"])){
    $subject = $_POST["subject"];
    $course = $_POST["course"];
    $class = $_POST["class"];

    $qry="INSERT into subjects(subjects,course,class)values('$subject','$course','$class')";
    mysqli_query($con, $qry);
}

?>
