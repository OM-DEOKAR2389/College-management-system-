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
             <form action="do_student_update.php" method="post">
               <div class="row">
                <div class="col-6">
                    <h3>Student Details</h3>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label" for="">Student Name</label>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="First name" value="<?php echo $rw['fname']?>" id="" class="form-control " required name="fname"/>
                            <input type="hidden" value="<?php echo $rw["id"]; ?>" name="id" >
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="Last name" id="" value="<?php echo $rw['lname']?>" class="form-control " required name="lname"/>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label " for="">Date Of Birth</label>
                        </div>
                        <div class="col-6">
                            <input type="date" id="" value="<?php echo $rw['dob']?>"class="form-control " required name="dob"/>
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
                           <select class="form-select" name="bloodg" id="" required>
                                <option selected disabled>Select blood group</option>
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
                               <input type="text" id="" value="<?php echo $rw['nationality']?>" placeholder="Eg...Indian" class="form-control " required name="nationality"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Religion</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="" placeholder="Eg...Hindu" value="<?php echo $rw['religion']?>" class="form-control " required name="religion"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Category</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="" value="<?php echo $rw['catagory']?>" placeholder="Eg...Regular" class="form-control " required name="catagory"/>
                           </div>
                    </div>
                    <h3 class="mt-4">Educational Details</h3>

                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">SSC Marks</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="" value="<?php echo $rw['10marks']?>" placeholder="in %" class="form-control " required name="10m"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Year Of Passing</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="" value="<?php echo $rw['10year']?>" placeholder="" class="form-control " required name="10y"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">HSC Marks</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id="" value="<?php echo $rw['12mark']?>"placeholder="in %" class="form-control " required name="12m"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Year Of Passing</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="" value="<?php echo $rw['12year']?>" class="form-control " required name="12y"/>
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
                            <input type="text" placeholder="First name" value="<?php echo $rw['ffname']?>" id="" class="form-control " required name="ffname"/>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="Last name" id="" class="form-control " value="<?php echo $rw['flname']?>" required name="flname"/>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mobile No</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="Mobile No" class="form-control "  value="<?php echo $rw['fmobile']?>"required name="fmobile"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Email</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="Email" class="form-control " value="<?php echo $rw['femail']?>" required name="femail"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Father's Occupations</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="" class="form-control " value="<?php echo $rw['foccupation']?>" required name="foccupation"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                         <label class="form-label" for="">Mother's Name</label>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="First name" id="" class="form-control " value="<?php echo $rw['mfname']?>"required name="mfname"/>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="Last name" id="" class="form-control " value="<?php echo $rw['mlname']?>" required name="mlname"/>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mobile No</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="Mobile No" class="form-control "value="<?php echo $rw['mmobile']?>" required name="mmobile"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Email</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="Email" class="form-control " value="<?php echo $rw['memail']?>"  name="memail"/>
                           </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label class="form-label " for="">Mother's Occupations</label>
                           </div>
                           <div class="col-6">
                               <input type="text" id=""placeholder="" class="form-control " value="<?php echo $rw['moccupation']?>" required name="moccupation"/>
                           </div>
                    </div>
                    <br>
                    <h3>Addmision Details</h3>
                    <div class="row mt-4">

                        <div class="col-4">
                            <label class="form-label " for="">Course</label>
                           </div>
                           <div class="col-6">
                           <input type="text" value="<?php echo $rw['course']?>" class="form-control" name="course" readonly>
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
                               <input type="text" id="due_fee" placeholder="" class="form-control " value="<?php echo $rw['due_fee']?>" required name="due_fee" readonly/>
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
  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    document.getElementById("fee_paid").addEventListener("input",fee);

    function fee(){
   
    let course_fee = document.getElementById("course_fee");
    let fee_paid = document.getElementById("fee_paid");
    let due_fee = document.getElementById("due_fee");
       
       let fee=course_fee.innerHTML-fee_paid.value;

       due_fee.value=fee;
 

       if(fee<0){
        alert("paid fee should be less than or equal to course fee ");
       due_fee.value=null;
       fee_paid.value=null


       }


}
</script>
<script>
    let course = "";  // Initialize the variable

    $(document).ready(function() {
        Filters(); // Call function on page load

        function Filters() {
            $.ajax({
                url: "fetching.php",
                type: "POST",
                data: { course: course }, // Send selected course
                success: function(data) {
                    $(".query").html(data);
                    // alert(data); // Debugging purpose (remove in production)
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + " - " + error);
                }
            });
        }

        // Correct event listener for <select>
        $("#course").on("change", function() {
            course = $(this).val(); // Get the selected value
            Filters(); // Fetch data based on selection
        });
    });


</script>


</body>
</html>