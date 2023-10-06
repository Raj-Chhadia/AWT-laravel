<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mobile Shopping App</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/463f82e63e.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body,
    html {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .container {
      flex: 1;
    }

    .navbar {
      background-color: #007bff;
      margin-bottom: 25px;
    }

    .navbar-brand {
      color: #fff !important;
    }

    .nav-link {
      color: #fff !important;
    }

    .slider-container {
      background-color: #f2f2f2;
      padding: 20px;
    }

    .container {
      padding: 0;
    }

    .carousel-inner img {
      width: 100%;
      height: auto;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background: rgba(0, 0, 0, 0.8);
    }

    .product-list {
      margin-bottom: 25px;
    }

    .product-card {
      height: 400px;
    }

    .product-card img {
      object-fit: cover;
      height: 70%;
      width: 100%;
      margin-bottom: 15px;
    }

    .navigation li {
      display: inline-block;
      margin-right: 15px;
    }

    .social-icons li {
      display: inline-block;
      margin-right: 15px;
    }

    .footer {
      margin-top: 75px;
      background-color: #007bff;
      color: #fff;
      padding: 10px 0;
    }

    .footer a {
      color: #fff;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "shopping");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$products1 = mysqli_query($conn, "SELECT * FROM products where product_id=1");
$product1 = mysqli_fetch_assoc($products1);

$products2 = mysqli_query($conn, "SELECT * FROM products where product_id=2");
$product2 = mysqli_fetch_assoc($products2);

$products3 = mysqli_query($conn, "SELECT * FROM products where product_id=3");
$product3 = mysqli_fetch_assoc($products3);

$products4 = mysqli_query($conn, "SELECT * FROM products where product_id=4");
$product4 = mysqli_fetch_assoc($products4);
  ?>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#007bff!important;">
    <div class="container">
      <a class="navbar-brand" href="/abc" style="color: #fff;">
        <img src="logo.png" alt="Logo" width="50" /> Mobile Shopping
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse redirect" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/registration">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.html">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Image Carousel -->
  <section class="container mt-4 slider-container">
    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#imageCarousel" data-slide-to="1"></li>
        <li data-target="#imageCarousel" data-slide-to="2"></li>
        <!-- Add more slides as needed -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="bg1.jpg" alt="Slider 1">
        </div>
        <div class="carousel-item">
          <img src="bg2.jpg" alt="Slider 2">
        </div>
        <div class="carousel-item">
          <img src="bg3.jpg" alt="Slider 3">
        </div>
        <!-- Add more slides as needed -->
      </div>
      <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- Product List -->
  <section class="product-list container mt-4">
    <h2>Featured Products</h2>
    <div class="row">
      <!-- Add product cards here -->
      <div class="col-md-3 mb-4">
        <div class="product-card">
          <img src="mobile_1.png" class="card-img-top" alt="Product 1" />
          <div class="card-body">
            <h5 class="card-title"><?php echo $product1['name']; ?></h5>
            <p class="card-text"><?php echo $product1['description']; ?>.</p>
            <a href="product_page.php?id=<?php echo $product1['product_id']; ?>" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-4">
        <div class="product-card">
          <img src="mobile_2.png" class="card-img-top" alt="Product 1" />
          <div class="card-body">
          <h5 class="card-title"><?php echo $product2['name']; ?></h5>
            <p class="card-text"><?php echo $product2['description']; ?>.</p>
            <a href="product_page.php?id=<?php echo $product2['product_id']; ?>" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-4">
        <div class="product-card">
          <img src="mobile_1.png" class="card-img-top" alt="Product 1" />
          <div class="card-body">
          <h5 class="card-title"><?php echo $product3['name']; ?></h5>
            <p class="card-text"><?php echo $product3['description']; ?>.</p>
            <a href="product_page.php?id=<?php echo $product3['product_id']; ?>" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-4">
        <div class="product-card">
          <img src="mobile_2.png" class="card-img-top" alt="Product 1" />
          <div class="card-body">
          <h5 class="card-title"><?php echo $product4['name']; ?></h5>
            <p class="card-text"><?php echo $product4['description']; ?>.</p>
            <a href="product_page.php?id=<?php echo $product4['product_id']; ?>" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Navigation</h5>
          <ul class="list-unstyled navigation">
            <li><a href="#">Home</a></li>
            <li><a href="categories.html">Categories</a></li>
            <li><a href="registration.html">Register</a></li>
            <li><a href="login.html">Sign In</a></li>
            <li><a href="about_us.html">About Us</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Socials</h5>
          <ul class="list-unstyled social-icons">
            <li>
              <a href="#"><i class="fa-brands fa-facebook"></i> </a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-twitter"></i> </a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-instagram"></i> </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <p>&copy; 2023 Your Mobile Shopping App. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>