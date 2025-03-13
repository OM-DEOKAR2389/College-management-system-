<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c82427e6c1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
      <div class="col-md-2 nav bg-primary " >
        <div class="row" style="height:100%;">
        
        <div class="admin-iteam" >
        <p class="admin-p">Admin Profile</p>
        <a href=""> Update Profile</a><br><br>
           <ul style="list-style:none;">
            <li><a href="#">Home</a></li><br>
            <li><a href="course.php">Courses</a></li><br>
            <li><a href="subject.php">Subject</a></li><br>
            <li><a href="student.php"> Student </a></li><br>
            <li><a href="teacher.php"> Teacher </a></li><br>
            <li><a href="index.php">Logout</a></li>
            <br><br><br><br><br><br>
           </ul>

       </div>
          </div>
         </div>
       <div class="col-md-10">
        <h2><i class="fa-solid fa-list fs-4"></i> Home</h2>
        <hr>
        
        <div class="row mt-5 ms-5">
            <div class="col-md-4">
                <div class="bx border border-dark " >
                  
                  <div class="row p-2">
                    <div class="col-md-6">
                      <p class="p-logo" style="background-color:#6610f2;"><i class="fa-solid fa-bars-progress"></i></p>
                    </div>
                    <div class="col-md-6">
                     <?php
                    
                      include("connection.php");
                       $qry="SELECT * from course";
                       $result=mysqli_query($con,$qry);
                       if($row=mysqli_num_rows($result)){
                         echo"<div class='row r-nm fw-bold fs-3'>".$row."</div>";
                       }else{ 
                         echo"<div class='row r-nm fw-bold fs-3'>NO Data</div>";
                           
                       }

                      ?>
                       
                       <div class="row ">Courses</div>  
                       </a>
                    </div>
                  </div>
                  </div>
            </div>
            
            <div class="col-md-4">
              <div class="bx border border-dark  " >
         
                <div class="row p-2">
                
                  <div class="col-md-6">
                    <p class="p-logo" style="background-color:#fe2a71;"><i class="fa-solid fa-users"></i></p>
                  </div>
                  <div class="col-md-6">
                  <?php
                    
                    include("connection.php");
                     $qry="SELECT * from student_register";
                     $result=mysqli_query($con,$qry);
                     if($row=mysqli_num_rows($result)){
                       echo"<div class='row r-nm fw-bold fs-3'>".$row."</div>";
                     }else{ 
                       echo"<div class='row r-nm fw-bold fs-3'>NO Data</div>";
                         
                     }

                    ?>
                     <div class="row">Student</div>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="bx border border-dark" >
                  <div class="row p-2">
                    <div class="col-md-6">
                      <p class="p-logo" style="background-color:#FF6F00;"><i class="fa-solid fa-chalkboard-user"></i></p>
                    </div>
                    <div class="col-md-6">
                    <?php
                    
                    include("connection.php");
                     $qry="SELECT * from teacher_register";
                     $result=mysqli_query($con,$qry);
                     if($row=mysqli_num_rows($result)){
                       echo"<div class='row r-nm fw-bold fs-3'>".$row."</div>";
                     }else{ 
                       echo"<div class='row r-nm fw-bold fs-3'>NO Data</div>";
                         
                     }

                    ?>
                       <div class="row">Teachers</div>
                    </div>
                  </div>
                  </div>
              </div>
        </div>
        <div class="row ms-5 mt-3">
          <div class="col-md-4">
            <div class="bx border border-dark">
              <div class="row p-2">
                <div class="col-md-6">
                  <p class="p-logo bg-success "><i class="fa-solid fa-laptop"></i></p>
                </div>
                <div class="col-md-6">
                <?php
                    
                    include("connection.php");
                     $qry="SELECT * from subjects";
                     $result=mysqli_query($con,$qry);
                     if($row=mysqli_num_rows($result)){
                       echo"<div class='row r-nm fw-bold fs-3'>".$row."</div>";
                     }else{ 
                       echo"<div class='row r-nm fw-bold fs-3'>NO Data</div>";
                         
                     }

                    ?>
                   <div class="row">Subject </div>
                </div>
              </div>
              </div>
              
        </div>
        <div class="row mt-3 ms-1">
            <div class="col-md-8 n-box ">
              <div class="row">
               <div class="col-md-12 n-name fs-5 ">Notice Board</div>
              </div>
              
              
              <form action="" class="text-end mt-2">
                <input type="text" placeholder="Notice Title" class="form-control">
                <textarea placeholder="Notice Description" class="form-control mt-3 mb-3" rows="7"></textarea>
                <button type="submit" class="btn btn-success mb-3">Submit</button>
              </form>
            </div>
              <div class="col-md-3 ms-3 border border-dark">
                <div class="row">
                <div class="col-md-12 ntp fs-5 bg-success">Notification</div>
                </div>
               </div>
        </div>
       
        
       </div>
       </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
</body>
</html>