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
                        <li><a href="teacher.php"> Add Teacher</a></li>
                        <li><a href="teacher_mannage.php">Manage Teacher</a></li>
                        <li><a href="#">Show Teacher</a></li>
                        <li><a href="#">Show Leave</a></li>
                        <li><a href="#">Notify staff</a></li>
                        
                      </ul>
                      
                </div>
            </div>
            <div class="col-md-10">
             <h2 class="text-center text-bold">Update Teacher Details</h2> <hr>
             <form action="do_teacher_update.php" method="post" onsubmit="return check();" enctype="multipart/form-data">
             <div class="row">
                <div class="col-9 ms-5">
                    <h3>Teacher Details</h3>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label" for="">Teacher Name</label>
                        </div>
                        <div class="col-4">
                            <input type="text" value="<?php echo $row["fname"]?>" placeholder="First name" id="" class="form-control " required name="fname"/>
                            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                        </div>
                        <div class="col-4">
                            <input type="text" value="<?php echo $row["lname"]?>" placeholder="Last name" id="" class="form-control " required name="lname"/>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label " for="">Date Of Birth</label>
                        </div>
                        <div class="col-6">
                            <input type="date" value="<?php echo $row["dob"]?>" id="" class="form-control " required name="dob"/>
                        </div>
                    </div>
                    <div class="row mt-4">
                           <div class="col-4 ">
                            <label class="form-label " for="">Gender</label>

                           </div>
                           <div class="col-8">
                            <div class="row">
                            <div class="col-4">
    <?php
         if($row ["gender"]== "male"){

         

    ?>
    <div>
        <input type="radio" checked id="male" name="gender" value="male">
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
    <?php } 
     else {
            ?>
             <div>
        <input type="radio"  id="male" name="gender" value="male">
        <label for="male">Male</label>
    </div>
    <div>
        <input type="radio" checked id="female" name="gender" value="female">
        <label for="female">Female</label>
    </div>
    <div>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
    </div>
            <?php

     }
    ?>
</div>


                           </div>
                           </div>
                           
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Address</label>
                           </div>
                           <div class="col-6">
                               <textarea cols="53" name="address"><?php echo $row["addres"]?></textarea>
                           </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Previous Photo</label>
                           </div>
                           <div class="col-6">
                                <img src="<?php echo $row["photo"] ?>" alt="image not found">
                           </div>
                    </div>
                    

                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Photo</label>
                           </div>
                           <div class="col-6">
                               <input type="file" name="image" id=""class="form-control " />
                               <input type="hidden"  name="hidden_img" value="<?php echo $row["photo"] ?>" id=""class="form-control " />
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Blood Group</label>
                           </div>
                           <div class="col-6">
                              <select class="form-select" name="bloodg" id="" required>
                                <option >Select blood group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>

                              </select>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Nationality</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="" value="<?php echo $row["nationality"]?>" placeholder="Eg...Indian" class="form-control " required name="nationality"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Religion</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="" placeholder="Eg...Hindu" value="<?php echo $row["religion"]?>" class="form-control " required name="religion"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Catagory</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="Eg...Regular" value="<?php echo $row["catagory"]?>" class="form-control " required name="catagory"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Qualification</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="Qualification" class="form-control " value="<?php echo $row["qualification"]?>" required name="qualification"/>
                           </div>
                    </div>
                    <br><br>
                    <h3>Login Details</h3>

                    <div class="row mt-4">
                        
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mobile No</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="Mobile No"value="<?php echo $row["mobile"]?>" class="form-control " required name="mobile"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Email Id</label>
                           </div>
                           <div class="col-6">
                               <input type="email" id=""placeholder="Email Id" value="<?php echo $row["email"]?>" class="form-control " required name="email"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Password</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="pass" placeholder="password" value="<?php echo $row["pass"]?>" class="form-control " required name="password"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Confirm Password</label> 
                           </div>
                           <div class="col-6">
                               <input type="text" id="c_pass" placeholder="Confirm Password"  onkeyup="match();" value="<?php echo $row["cpassword"]?>"class="form-control " required name="cpassword"/> <div id="msg"></div>
                           </div>
                    </div>
                    <div class="btn text-center">
                    <button type="submit" class="mt-5 btn-primary" style="width: 200px;">Update</button>
                    </div>
                </div>
                </div>
              </div>
              </form>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
        function match() {
            var p = document.getElementById("pass").value;
            var c = document.getElementById("c_pass").value;
            if (c == p) {
                document.getElementById("msg").style.color = "green";
                document.getElementById("msg").innerHTML = "Password Match";
            } else {
                document.getElementById("msg").style.color = "red";
                document.getElementById("msg").innerHTML = "Password and confirm password does not Match";
            }
        }

        function check() {
            var p = document.getElementById("pass").value;
            var c = document.getElementById("c_pass").value;
            if (c == p)
                return true;
            else {
                alert("Password and confirm password does not match");
                document.getElementById("c_pass").value = "";
                document.getElementById("c_pass").focus();
            }
            return false;
        }
    </script>

</body>
</html>






