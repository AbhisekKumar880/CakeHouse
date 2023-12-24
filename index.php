<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cake Shop</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="#">
  <style>
  .carousel-inner img {
    width: 100%;
    /* height: 400px; */
    object-fit: cover;
  }
  .offer-section {
    background-color: #f8f9fa;
    padding: 50px 0;
    text-align: center;
  }
  .offer-card{
    border-radius: 0px;
  }
  .product-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    margin-bottom: 20px;
  }
  .about-us-section,
  .contact-us-section {
    padding: 50px 0;
  }
  .link{
    color: rgb(116, 54, 28);
    transition: color 0.3s ease;
  }
  .link:hover{
    color: deeppink;
  }
  #btn{
    background-color:hotpink;
    border:none
  }
  .btn:hover,link:hover{
    background-color:deeppink
  }
  </style>
</head>
<body>
  <?php require ('header.php') ?>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="carousel1.png" class="d-block w-100 h-auto" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="carousel2.png" class="d-block w-100 h-auto" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="carousel3.png" class="d-block w-100 h-auto" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Offer -->
  <div class="offer-card text-bg-dark mt-1">
    <img src="offer.png" class="card-img w-100 h-auto" alt="...">
    <div class="card-img-overlay">
      <!-- <a href="#" class="text-light">GET IT >>> </a> -->
    </div>
  </div>
  <!-- Product -->
  <div class="container mt-4 " id="product">
    <h1 class="text-lg-center">Best Sellers</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="product1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Black Forest</h5>
            <p class="card-text">Price: ₹499/-</p>
            <div class="d-grid gap-2">
              <a class="btn btn-primary" id="btn" href="#" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="product2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Red Velvet</h5>
            <p class="card-text">Price: ₹499/-</p>
            <div class="d-grid gap-2">
              <a class="btn btn-primary" id="btn" href="#" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="product3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rajbhog</h5>
            <p class="card-text">Price: ₹599/-</p>
            <div class="d-grid gap-2">
              <a class="btn btn-primary" id="btn" href="#" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="product4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Choco Lava</h5>
            <p class="card-text">Price: ₹549/-</p>
            <div class="d-grid gap-2">
              <a class="btn btn-primary" id="btn" href="#" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="product5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Fruit Paradise</h5>
            <p class="card-text">Price: ₹599/-</p>
            <div class="d-grid gap-2">
              <a class="btn btn-primary" id="btn" href="#" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="link text-decoration-none">Show All >>></a>
    
  </div>

  <!-- About-->
  <div class="about bg-danger bg-opacity-50 pt-3  mt-0 text-light" id="about">
    <div class="container mx-100 ">
      <h1 class="text-lg-center mt-0">About</h1>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi atque perspiciatis tempora, ullam aspernatur commodi deleniti nihil numquam repellat, facilis provident reprehenderit eius iusto quasi qui nulla recusandae ipsum expedita laborum rem minus. Placeat provident ratione tenetur? Aut laborum dolorum facere quo ipsa, aliquam perferendis cum atque at tempora ipsum aspernatur beatae eos non in asperiores nobis provident pariatur eligendi!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact-->
  <div class="contact bg-dark pt-3 text-light mt-0" id="contact">
      <div class="container mx-auto ">
      <h1 class="text-lg-center mt-0">Contact</h1>
  <table class="table table-borderless text-light">
  <thead>
    <tr>
      <th scope="col">Contact Info.</th>
      <th scope="col">Open Hour</th>
      <th scope="col">Follow Us.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><i class="bi bi-telephone-fill"></i><b>Phone</b><br><a href="tel:+917325917946" class="link text-light text-decoration-none">+91 7325917946 </a></td>
      <td>Monday - Friday: 9:00 AM - 10:00 PM</td>
      <td>
        <a href=""><i class="bi bi-facebook pe-3 text-light"></i></a>
        <a href=""><i class="bi bi-instagram pe-3 text-light"></i></a>
        <a href=""><i class="bi bi-twitter pe-3 text-light"></i></a>
      </td>
    </tr>
    <tr>
      
      <td><i class="bi bi-envelope-at"></i><b>Mail us at </b><br><a href="mailto:cakehouse@gmail.com" class="link text-light text-decoration-none">cakehouse@gmail.com</a></td>
      <td>Saturday: 10:00 AM - 11:00 PM</td>
    </tr>
    <tr>
    <td><a href="https://www.google.com/maps/dir//Silicon+Hills,+near+DLF+cybercity,+Patia,+Bhubaneswar,+Odisha+751024/@20.3792722,85.6981602,12.98z/
data=!4m8!4m7!1m0!1m5!1m1!1s0x3a1908e064769e73:0x9288172f3a98c7a4!2m2!1d85.806336!2d20.3506773?entry=ttu" class="link text-light text-decoration-none"><i class="bi bi-geo-alt-fill"></i><b>Location </b></a></td>
<td>Sunday: 10:00 AM - 11:00 PM</td>
    </tr>
  </tbody>
</table>
<br>
<p class="text-center fw-lighter">Copyright © Cake House 2024 All Rights Reserved</p>
</div>
</div>
  <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
