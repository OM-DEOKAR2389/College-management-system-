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

</style>
</head>
<?php
include("connection.php");
                        session_start();
                  //echo $_SESSION["id"];
                  $qry="SELECT * FROM teacher_register where id=".$_SESSION["id"];
                  $result=mysqli_query($con,$qry);
                 $row=mysqli_fetch_assoc($result) ;
              


                       ?>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 dash bg-primary">
                <div class="row text-white text-center mt-5">
                    <h2>Teacher profile</h2>
             
                       
                        <h6><?php echo $_SESSION['email']?></h6>
                    <hr>
                </div>
                <div class="row text-center std">
                      <ul>
                        <li><a href="AP.php"> Take Attendance</a></li>
                        <li><a href="view_attendance.php">View Attendance</a></li>
                        <li><a href="show.html">Show Student</a></li>
                    
                </div>
            </div>

            <div class="col-md-10">
             <h2>Take Attendance</h2> <hr>
             <form action="fetch_student.php" method="post">
             <div class="row">
                <div class="row">
                   
                </div>
               
                <div class="col-3">
                <h4>Select Course :  <select name="course" id="" class="form-select">
                <option selected disabled>Select course</option>

                     
                        <?php
                        $qry3="SELECT distinct course from class_assigning where tid=".$_SESSION["id"];
                        // echo $qry3;
                        $result3=mysqli_query($con,$qry3);
                        
                           while($row3=mysqli_fetch_assoc($result3)){
                           echo "<option value=".$row3["course"].">".$row3["course"]."</option>";
                           }
                           ?>
                          </select></h4>
                </div>
                <div class="col-3">
                <h4>Select Class : <select class="form-select" name="class" id="" required>
                                <option selected disabled>Select class</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                
                              </select></h4>                    
                </div>
                <div class="col-3">
                <h4>Select Subject :  <select name="sub" id="" class="form-select">
                <option selected disabled>Select subject</option>

                     
                        <?php
                        $qry3="SELECT * from class_assigning where tid=".$_SESSION["id"];
                        // echo $qry3;
                        $result3=mysqli_query($con,$qry3);
                        
                           while($row3=mysqli_fetch_assoc($result3)){
                           echo "<option value='".$row3["sub"]."'>".$row3["sub"]."</option>";
                           }
                           ?>
                          </select></h4>                    
                </div>
                <div class="col-3 text-center">
                <h4>Date : <?php echo date("d/m/Y "); ?><br><button type="submit" class="btn btn-primary">Apply</button>
            
            </h4>   
                         
                </div>
              
             </div>
        
             </form>   
               <hr> 
               <div class="row">
                <h3>Students</h3>
                 <div class="col">
                <form action="do_attendance.php" method="post" class="text-center fs-4 ms-5">
             <div class="row justify-content-center">

                <table >
                    <tr >
                        <th >Roll NO</th>
                        <th>Student Name</th>
                        <th>Status</th>

                    </tr>
                <?php
                if(isset($_GET["cid"])){
                $cid= $_GET["cid"];
                $class=$_GET["class"];
                $sub=$_GET["sub"];
               
                $query= "SELECT * from course where id=".$cid;
                $res=mysqli_query($con,$query);
                $ro=mysqli_fetch_assoc($res);
                $course=$ro["course"];
                
                
               
                $qry2 = "SELECT * FROM student_register WHERE course = '" . $course . " ' AND class='".$class."'"; 
               
                $result2=mysqli_query($con,$qry2);
                $rollno=101;
                while($row2 = mysqli_fetch_assoc($result2))
                { 
                    echo"<tr class='me-5'><td> $rollno </td><td>".$row2["fname"]." ".$row2["lname"]."</td><td> "?>
                    <input type='hidden' name='sname[]' value="<?php echo $row2["fname"]." ".$row2["lname"]?>">
                    <input type="hidden" name="course" value="<?php echo $course ?>">
                    <input type="hidden" name="class" value="<?php echo $class ?>">
                    <input type="hidden" name="sub" value="<?php echo $sub ?>">
                    <input type='hidden' name='student_id[]' value='<?php echo $row2['id']; ?>'>
                    <input type="hidden" name="teacher_id" value="<?php echo $row["id"] ?>">


                        <select name='status[]'>
                            <option selected  value='Present'>Present</option>
                            <option value='Absent'>Absent</option>
                        </select>
                        

 
</div>
                    </td></tr>
                    <?php
                    $rollno++;
                  } 
                }
                ?>
                <tr>
                    <td colspan="4"><button type="submit" class="btn btn-outline-primary mt-5">Submit Attendance</button></td>
                </tr>
                </table>
             </div>
                </form>
                </div>
                 
             </div>
              
             
        </div>
    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>