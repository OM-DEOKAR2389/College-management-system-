<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.dash{
    height:1200px;
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
    if(isset($_GET["id"]))
    {
        $qry="SELECT * from teacher_register where id=".$_GET["id"];
        $result=mysqli_query($con,$qry);
        $row=mysqli_fetch_assoc($result);
        
        
    }
   
?>
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
                        <li><a href="#"> Add Teacher</a></li>
                        <li><a href="teacher_mannage.php">Manage Teacher</a></li>
                        <li><a href="#">Show Teacher</a></li>
                        <li><a href="#">Show Leave</a></li>
                        <li><a href="#">Notify staff</a></li>
                      
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
             <h2>View Teacher Info</h2> <hr>
             <!-- <form action="do_teacher_reg.php" method="post"> -->
             <div class="row">
                <div class="col-9 ms-5">
                    <h3>Teacher Details</h3>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label" for="">Teacher Name</label>
                        </div>
                        <div class="col-4">
                            <h4><?php echo $row["fname"]." ".$row["lname"] ?></h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label " for="">Date Of Birth</label>
                        </div>
                        <div class="col-6">
                          <h4><?php echo $row["dob"]  ?></h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                           <div class="col-4 ">
                            <label class="form-label " for="">Gender</label>

                           </div>
                           <div class="col-8">
                            <div class="row">
                            <div class="col-4">
    
                            <h4><?php echo $row["gender"]  ?></h4>
                          
</div>


                           </div>
                           </div>
                           
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Address</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo $row["addres"]  ?></h4>
                              
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Photo</label>
                           </div>
                           <div class="col-6">
                               <input type="file" id="" placeholder="Eg...O+" class="form-control " required/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Blood Group</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo $row["bloodg"]  ?></h4>
                              
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Nationality</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo $row["nationality"]  ?></h4>
                               
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Religion</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo $row["religion"]  ?></h4>
                               
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Catagory</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo $row["catagory"]  ?></h4>
                               
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Qualification</label>
                           </div>
                           
                           <div class="col-6">
                          <h4><?php echo $row["qualification"]  ?></h4>
                              
                           </div>
                    </div>
                    <br><br>
                    <h3>Class Assining</h3><br>
                    <div class="row">
                        <div class="col-4 ms-5">
                        <select class="form-select" name="course" id="" required>
                                 <option >Select Course</option>

                               
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
                            <div class="col-3">
                                <label for="">Subject</label>
                            
                          <h4>
                        <?php
                       echo $row["subject"];
                        ?> </h4>
                            
                            </div>                        
                    </div>


                    <h3>Login Details</h3>

                    <div class="row mt-4">
                        
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mobile No</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo $row["mobile"]  ?></h4>
                               
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Email Id</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo $row["email"]  ?></h4>
                               
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Password</label>
                           </div>
                           <div class="col-6">
                          <h4><?php echo "*******" ?></h4>
                              
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <img src="<?php echo $row["photo"] ?>" alt="image not found">
                           </div>
                           <div class="col-6">
                          
                              
                           </div>
                    </div>
                    <div class="btn text-center">
                     <button type="submit" class="mt-5 btn-primary" style="width: 200px;">Edit Profile</button>
                    </div>

                    </div>
                </div>
              </div>
              <!-- </form> -->
        </div>
    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>