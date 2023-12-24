<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="#">
  <style>
.nav-link{
    color: rgb(116, 54, 28);
    transition: color 0.3s ease;
}
.nav-link:hover{
  color:deeppink;
}

.navbar {
    box-shadow: 0 1px 2px rgb(121, 121, 121);
    background-color:white;
    padding: 0px;
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Logo1.png" alt="Logo" width="170" height="70" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link mx-2 mt-1" id="link" aria-current="page" href="index.php">HOME</a>
          <a class="nav-link mx-2 mt-1" id="link" href="#">PRODUCTS</a>
          <a class="nav-link mx-2 mt-1" id="link" href="#about">ABOUT</a>
          <a class="nav-link mx-2 mt-1" id="link" href="#contact">CONTACT US</a>
        </div>
        <div class="navbar-nav ms-auto">
            <a class="nav-link " href=""><i class="bi bi-cart-fill fs-3" id="link"></i></a>
            <a class="nav-link fs-5 mt-1" href="login.php"><i class="bi bi-person-circle fs-4" id="link"></i> Login</a>
            
        </div>
      </div>
    </div>
  </nav>
 <script src="bootstrap.bundle.min.js"></script>
</body>
</html>