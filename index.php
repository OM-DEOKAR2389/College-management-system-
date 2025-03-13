<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg "style="position:fixed; width:100%; z-index:1;">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end align-item-end fs-5 me-5 " id="navbarNavDropdown">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color:white">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about" style="color:white">About us</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Enq" style="color:white">Enquiry</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Important Links
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink ">
                  <li><a class="dropdown-item text-dark" href="#">Lorem ipsum</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Lorem ipsum</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Lorem ipsum</a></li>
                </ul> -->
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                  Login As
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink ">
                  <li><a class="dropdown-item text-dark" href="admin-login.php">Admin</a></li>
                  <li><a class="dropdown-item text-dark" href="teacher_login.php">Teacher</a></li>
                  <!-- <li><a class="dropdown-item text-dark" href="login.php">Student</a></li> -->
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reg.php" style="color:white">Register</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#" style="color:white">Feedback</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
       <div class="container">
       <div class="row ">
        <div class="col-sm-12 col-md-6 t">
            <pre>
          <p class="main-text">Education is the best <br><i style="font-weight: bold; color: #6610f2; font-size: 80px;">key success in life</i></p>
             <button class="exp-btn"><a href="admin-login.php">Login To Admin</a></button>
            </pre>
        </div>
        <div class="col-sm-12 col-md-6 ">
            <img class="home-img"src="images/home.png" alt="">
        </div>
       </div>
    </div>
    <div class="container">
    <div class="row" id="about">
        <div class="col-md-6">
            <h2 class=" about">About us</h2>
            <p class="fs-5">College management system is an information system to manage College related data and transactions. College system may consist of several branches within territory or round the globe. It contains various actors for example students, staff, teachers, student's parents, managerial staff etc.A College management system refers to a computerized database system that manages and tracks various College functions and activities. It is an information system specifically designed to meet the data management needs of College and academic institutions. A robust College management system centralizes operations and provides real-time access to College data, improving efficiency and productivity across all administrative tasks. </p>
        </div>
        <div class="col-md-6 p-5">
          <div class="box">
            <h2>Notifications</h2>
            <p class="text-start ms-5">Lorem ipsum, dolor sit amet consectetur adipisicing. <button type="button" class="btn btn-danger position-relative new-btn">
              New
              <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                <span class="visually-hidden">New alerts</span>
              </span>
            </button></p>
            <p class="text-start ms-5">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
            <p class="text-start ms-5">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
            <p class="text-start ms-5">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
          </div>
        </div>
    </div>

    
   <div class="row enq-row mt-5">
    <div class="row mb-3 " id="Enq">
      <h2>Enquiry</h2>
      <div class="col">
      <label for="exampleFormControlInput1" class="form-label">First Name</label>
        <input type="text" class="form-control border-2" placeholder="First name" aria-label="First name">
      </div>
      <div class="col">
      <label for="exampleFormControlInput1" class="form-label">Last Name</label>
        <input type="text" class="form-control border-2" placeholder="Last name" aria-label="Last name">
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control border-2" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Your Questions...?</label>
      <textarea class="form-control border-2" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <button class="btn-primary send-btn">Send</button>
    </div>
</div>
</div>

<footer class="m-1 mt-5">
  <div class="row ">
    <div class="col-md-3 col-sm-6 clg mt-5">
      <h5>College</h5>
     <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quos!</p>
    </div>
    <div class="col-md-3 col-sm-6">
      <h5>Products</h5>
      
        <p>Home</p>
        <p>About</p>
        <p>Courses</p>
        <p> Contact us</p>
      
      
    </div>
    <div class="col-md-3 col-sm-6">
      <h5>Useful Links</h5>
     <p>Setting</p>
     <p>Notificaion</p>
     <p>Help</p>
     <p>Contact</p>
      
    </div>
    <div class="col-md-3 col-sm-6">
      <h5>Contact</h5>
     <p>Name:</p>
     <p>Email:</p>
     <p>Telephone:</p>
     <p>Fax:</p>
      
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col ftcp">
      <p>@2025 Copyright:all rights reserved</p>
    </div>
  </div>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>