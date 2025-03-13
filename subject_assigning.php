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
    height:1500px;
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
                        <li><a href="teacher.php"> Add Teacher</a></li>
                        <li><a href="teacher_mannage.php">Manage Teacher</a></li>
                        <li><a href="show_teacher.php">Show Teacher</a></li>
                        <li><a href="#">Show Leave</a></li>
                        <li><a href="#">Notify staff</a></li>
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
             <h2>Add Teacher</h2> <hr>
             <form action="do_assigning_subject.php" method="post" >
             <div class="row">
                <div class="col-9 ms-5">
                  
                    <br><br>
                    <h3>Class Assining</h3><br>
                    <div class="row">
                       
                        <div class="col-4 ms-5">
                        <select class="form-select" name="course" id="" required>
                                 <option selected disabled >Select Course</option>

                        <?php
                        include("connection.php");
                          $qry="SELECT * from course";
                          $result=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_assoc($result)){

                            echo"<option value=".$row["course"].">".$row["course"]."</option>";
                        }

                        ?>
                               
                              </select>


                        </div>
                        <div class="col-4">
                            <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="tid" id="">
                        <select class="form-select" name="class" id="" required>
                                <option selected disabled>Select class</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                
                              </select>
                              
                            </div>
                            <div class="col-3">
                            <select class="form-select" name="sub" id="" required>
                                 <option selected disabled>Select Subject</option>

                        <?php
                        include("connection.php");
                          $qry="SELECT * from subjects";
                          $result=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_assoc($result)){

                            echo "<option value='".$row["subjects"]."'>".$row["subjects"]."</option>";
                        }

                        ?>                              
                              </select>
                             
                            </div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-4 text-center ">
                            <button type="submit" class="btn btn-primary">Add subject</button>
                            
                            </div>
                            </div>
                        
                    </div>
                    

                </div>
                </div>
              </div>
              </form>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>



<?php
// include("connection.php");
// $course=$_POST["course"];
// $tid=$_POST["tid"];
// $class=$_POST["class"];
// $sub=$_POST["sub"];
// // echo $sub;

// $qry="INSERT into class_assigning (`course`,`tid`,`class`,`sub`) values ('$course',$tid,'$class','$sub')";
// mysqli_query($con,$qry);
?>