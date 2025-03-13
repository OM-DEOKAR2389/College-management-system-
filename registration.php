<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container{
            width: 400px;
            margin-top: 160px;
            height: 400px;
            opacity: 0.9;
        }
        .r1{
            margin-left: 100px;
            margin-top:50px;
        }
        
        .inp
        {
            border: none;
            border-bottom: 2px solid black;
            margin-bottom: 20px;
        }
        button{
            background-color: skyblue;
            width: 170px;
            
        }
        img{
            

        }
        body{
            background-image: url(images/img1.avif);
            background-repeat: no-repeat;
            background-size:cover ;
        }
    </style>
</head>
<body>
   
    
   
  <div class="container border border-2 bg-white ">
        <div class="row r1">
        
      
          <div class="col-md-12">
            <form action="">
            <div class="row">
              <div class="col"><h2>Register</h2></div>
            </div>
            <div class="row">
                <div class="col ">
                    <label for="">name</label><br>
                    <input type="text" class="inp" placeholder="username" name="" id="name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Email</label><br>
                    <input type="text" class="inp" placeholder="Email" name="" id="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Password</label><br>
                    <input type="text" class="inp" placeholder="password" name="" id="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                <button >Register</button>
                </div>
            </div>

            
        </form>
          </div>
   
    </div>
     



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>