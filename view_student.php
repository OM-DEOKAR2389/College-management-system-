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
    height: 135vh;
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
if(isset($_GET["id"])){
   $qry="SELECT * FROM student_register where id=".$_GET["id"];
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
}

?>

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
             <h2>Admission</h2> <hr>
             <form action="" method="">
               <div class="row">
                <div class="col-6">
                    <h3>Student Details</h3>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label" for="">Student Name</label>
                        </div>
                        <div class="col-4">
                        <h5>  <?php echo $row["fname"]." ".$row["lname"]?></h5>
                        </div>
                       
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label " for="">Date Of Birth</label>
                        </div>
                        <div class="col-6">
                            <h5><?php echo $row["dob"]?></h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                           <div class="col-4 ">
                            <label class="form-label " for="">Gender</label>

                           </div>
                           <div class="col-8">
                            <div class="row">
                            <div class="col-4">
                            
                            <div>
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label>
                            </div>
                            <div>
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other</label>
                            </div>
                            </div>
                           

                           </div>
                           </div>
                           
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Blood Group</label>
                           </div>
                           <div class="col-6">
                           
                           <h5><?php echo $row["bloodg"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Nationality</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["nationality"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Religion</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["religion"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Category</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["catagory"]?></h5>
                           </div>
                    </div>
                    <h3 class="mt-4">Educational Details</h3>

                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">SSC Marks</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["10marks"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Year Of Passing</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["10year"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">HSC Marks</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["12mark"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Year Of Passing</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["12year"]?></h5>
                           </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>Parent Details</h3>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label" for="">Father's Name</label>
                        </div>
                        <div class="col-4">
                        <h5><?php echo $row["ffname"]." ".$row["flname"]?></h5>
                        </div>
                       
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mobile No</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["fmobile"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Email</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["femail"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Father's Occupations</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["foccupation"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label" for="">Mother's Name</label>
                        </div>
                        <div class="col-4">
                        <h5><?php echo $row["mfname"]." ".$row["mlname"]?></h5>
                        </div>
                        
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mobile No</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["mmobile"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Email</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["memail"]?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mother's Occupations</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row["moccupation"]?></h5>
                           </div>
                           <h3>Addmision Details</h3>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Course</label>
                           </div>
                           <div class="col-6">
                           <h5><?php echo $row['course']?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Class</label>
                           </div>
                           <div class="col-6">
                        <h5><?php echo $row['class']?></h5>
                          
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Course_Fee</label>
                           </div>
                           <div class="col-6">
                               <h5><?php echo $row['course_fee']?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Fee Paid</label>
                           </div>
                           <div class="col-6 ">
                               <h5><?php echo $row['fee_paid']?></h5>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Due Fee</label>
                           </div>
                           <div class="col-6 ">
                               <h5><?php echo $row['due_fee']?></h5>
                           </div>
                    </div>
                </div>
                    </div>
                    

                </div>
                
               </div>
               
               <div class="sub-btn text-center mb-5 mt-4" >
               <button type="submit" class="btn btn-primary" style="width:150px;">Submit</button>
               </div>
            </div>
        </div>
        </form>
    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>