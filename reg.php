
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c82427e6c1.js" crossorigin="anonymous"></script>
</head>
<body>
    
<section class="vh-100 bg-image"
  style="background-image: url('images/img1.avif'); background-repeat: no-repeat; background-size:cover;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 10px;" >
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account <p class="fs-6 text-primary"><U>(Only for students)</U></p></h2>
              

              <form>

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example1cg"><i class="fa-solid fa-user"></i> Your Name</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example3cg"><i class="fa-solid fa-envelope"></i> Your Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example4cg"><i class="fa-solid fa-lock"></i> Password</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-2">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example4cdg"><i class="fa-solid fa-check"></i> Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-primary btn-block btn-lg gradient-custom-4" style="color: white;">Register</button>
                </div>

                <p class="text-center text-muted mt-4 mb-0">Have already an account? <a href="login.php">
                  Login here</a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>