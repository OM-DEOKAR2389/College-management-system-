<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.dash{
    height: 145vh;
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
             <h2>Update Student</h2> <hr>
             <?php
             include("connection.php");
            
             $q="SELECT * FROM student_register where id=".$_GET['id'];
             $r=mysqli_query($con,$q);
             $rw=mysqli_fetch_assoc($r);


             ?>
             <form action="do_update_admission.php" method="post">
               <div class="row">
                
                     <form action="do_update_admission.php" method="post">
                    <h3>Addmision Details</h3>
                    <div class="row mt-4">

                        <div class="col-4">
                            <label class="form-label " for="">Course</label>
                           </div>
                           <div class="col-6">
                           <input type="text" value="<?php echo $rw['course']?>" class="form-control" name="course" readonly>
                           <input type="hidden" value="<?php echo $rw["id"]; ?>" name="id" >
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Class</label>
                           </div>
                           <div class="col-6">
                           <input type="text" value="<?php echo $rw['class']?>" class="form-control" name="class" readonly>
                          
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Course_Fee</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="" class="form-control " value="<?php echo $rw['course_fee']?>"  required name="course_fee" readonly/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Fee Paid</label>
                           </div>
                           <div class="col-6 ">
                               <input type="text" id="fee_paid" placeholder="" class="form-control " value="<?php echo $rw['fee_paid']?>" required name="fee_paid" readonly/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Due Fee</label>
                           </div>
                           <div class="col-6 ">
                               <input type="text" id="due_fee" placeholder="" class="form-control " value="<?php echo $rw['due_fee']?>" required name="due_fee" readonly />
                           </div>
                    </div>
                    <div class="sub-btn text-center mb-5 mt-5" >
                        <?php
                        if( $rw['due_fee']!=0)
                           {?>
                           <button type="submit" class="btn btn-primary" style="width:150px;">Submit</button>

                          <?php } else {
                             ?> <b><i><h3>Fee Already Paid</h3></i></b> <?php
                          }


                        ?>
               </div>
                </div>
               </div>
             
            </div>
        </div>
        </form>
    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

  
</body>
</html>