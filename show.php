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
             <h2>Show Student</h2> <hr>
             <form action="do_view_student.php" method="post">

               <div class="row">
                <div class="col-4">
                <h4>Select Course :  <select  name="course" id="" class="form-select" >
                <option selected disabled>Select course</option>

                     
                        <?php
                        $qry3="SELECT * from course";
                        // echo $qry3;
                        $result3=mysqli_query($con,$qry3);
                        
                           while($row3=mysqli_fetch_assoc($result3)){
                           echo "<option value=".$row3["course"].">".$row3["course"]."</option>";
                           }
                           ?>
                          </select></h4>
                </div>
                <div class="col-4">
                <h4>Select Class : <select class="form-select" name="class" id="" required>
                                <option selected disabled>Select class</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                
                              </select></h4>                    
                </div>
            
              
                <div class="col-4">
                <button type="submit" class="btn btn-primary mt-3 mb-5">Apply</button>
               
                </div>
                </form>
                <hr>
                <div class="col">
                    <?php
                    if(isset($_GET["cid"])){
                    $cou=$_GET["cid"];
                    $cls=$_GET["class"];
                    $qr="SELECT * FROM course where id=$cou";
                    $rslt=mysqli_query($con,$qr);
                    $roww=mysqli_fetch_assoc($rslt);  
                    $course=$roww["course"];

                    ?>
                    <h3>Course:- <?php echo $roww["course"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class:-<?php echo $cls;?> </h3> 
                    <div class="row">
                        <?php 
                        } else {
                            $cou=null;
                            $cls=null;
                            $course=null;
                          }
                        $qry="SELECT * from student_register where course='".$course."' AND class='$cls'";
                    
                        $result=mysqli_query($con,$qry);
                        $count=1;

                        if(isset($_GET["cid"])){
                        ?>
                     <table>
                        <tr>
                            <th class="text-center">Sr.No</th>
                            <th class="text-center">Student Name</th>
                            <th class="text-center">Gender</th>
                        </tr>

                        <?php
                          
                        while($row=mysqli_fetch_assoc($result)){
                            echo"<tr><td class='text-center'>".$count."</td><td class='text-center'>".$row["fname"]." ".$row["ffname"]." ".$row["lname"]."</td><td class='text-center'>".$row["gender"]."</td></tr>";
                               $count++;
                        }

                      
                        
                        ?>

                     </table>
                       <form action="download_student_list.php" method="post">
                        <input type="text"  name="course" value="<?php echo $course ?>">
                        <input type="text"  name="class" value="<?php echo $cls ?>">

                         <button type="submit">Download Pdf</button>
                       </form>
                     <?php 
                        } else {?>
                        <h2>Student Not found !</h2>

                            <?php
                        }
                        ?>
                     </div>
                </div>
               </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>