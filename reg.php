<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="stylereg.css">
    <style>
        body {
            background-image: url('cake-bg-3.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <title>WAD||ABBS</title>
</head>
<body>

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

           <div class="col-md-6 right-box">
              <div class="row align-items-center">
                    <div class="header-text text-center mb-4">
                        <h2>Sign Up Now</h2>
                        <p>It's free & take a miniute</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" id="input" placeholder="Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control form-control-lg bg-light fs-6" id="input" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="Mobile Number">
                    </div>
                    <div class="input-group mb-3">
                        <input type="mail" class="form-control form-control-lg bg-light fs-6" id="input" placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" id="input" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg  w-100 fs-6 text-light" id="btn">Sign Up</button>
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                    </div>
                    <div class="row">
                        <small>Already have an account? <a class="link" href="login.php">Login here</a></small>
                    </div>
              </div>
           </div> 

           <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #faa3a5;">
               <div class="featured-image mb-3">
                <img src="1.png" class="img-fluid " style="width: 300px;">
               </div>
               <p class=" fs-2 mb-1 text-light" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Yummy, Be Creamy!</p>
               <small class=" text-wrap text-center text-light" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Sweet Moments Delivered: Indulge in Joy, Order Cake Online Today!</small>
           </div>

      </div>
    </div>

</body>
</html>
