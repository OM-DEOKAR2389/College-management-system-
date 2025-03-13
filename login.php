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
    
<form>
    <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
    <div class="card" style="margin-top:100px;">
        <div class="card-body">
            <h2 class="text-uppercase text-center mb-5">Login here</h2>
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control" required />
      <label class="form-label" for="form2Example1"><i class="fa-solid fa-envelope"></i> Email</label>
    </div>
  
    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" required/>
      <label class="form-label" for="form2Example2"><i class="fa-solid fa-lock"></i> Password</label>
    </div>
  
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31"  />
          <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
      </div>
  
      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>
  
    <!-- Submit button -->
     <div class="text-center">
    <a href=""><button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block btn-lg gradient-custom-4" style=" height: 40px; width: 150px;">Sign in</button></a>
    </div>
    <!-- Register buttons -->
    <div class="text-center mt-4">
      <p>Not a member? <a href="reg.html">Register</a></p>
    </div>
    
</div>
</div>    
</div> 
</div>
 </form>
    </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>