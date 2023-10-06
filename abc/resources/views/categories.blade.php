<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile Shopping App</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="categories.css" />
    <script src="https://kit.fontawesome.com/463f82e63e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
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

        .navigation li {
            display: inline-block;
            margin-right: 15px;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

        .redirect {
            color: #fff;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .social-icons li {
            display: inline-block;
            margin-right: 15px;
        }

        .footer {
            background-color: #007bff;
            color: #fff;
            margin-top: 10px;
            padding: 10px 0;
        }

        .footer a {
            color: #fff;
        }
    </style>
</head>

<body>
    <h1>Welcome to ABC View Testing</h1>
    <h1>Category no: <?php echo $id ?></h1>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #007bff !important">
        <div class="container">
            <a class="navbar-brand" href="home.html" style="color: #fff">
                <img src="logo.png" alt="Logo" width="50" /> Mobile Shopping
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse redirect" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/abc">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.html">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.html">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Categories Section -->
    <section class="container mt-4">
        <h2>Categories</h2>
        <!-- Category: iPhone -->
        <div class="category-section mt-4">
            <h3>iPhone</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_1.png" alt="Product 1" />
                        <h4>Product 1</h4>
                        <p>Description of Product 1</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_1.png" alt="Product 2" />
                        <h4>Product 2</h4>
                        <p>Description of Product 2</p>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary">
                    <a class="redirect" href="product_page.html"> Show More </a>
                </button>
            </div>
        </div>
        <!-- Category: Oneplus -->
        <div class="category-section mt-4">
            <h3>OnePlus</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_2.png" alt="Product 1" />
                        <h4>Product 1</h4>
                        <p>Description of Product 1</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_2.png" alt="Product 2" />
                        <h4>Product 2</h4>
                        <p>Description of Product 2</p>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary">
                    <a class="redirect" href="product_page.html"> Show More </a>
                </button>
            </div>
        </div>
        <!-- Category: Samsung -->
        <div class="category-section mt-4">
            <h3>Samsung</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_1.png" alt="Product 1" />
                        <h4>Product 1</h4>
                        <p>Description of Product 1</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_1.png" alt="Product 2" />
                        <h4>Product 2</h4>
                        <p>Description of Product 2</p>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary">
                    <a class="redirect" href="product_page.html"> Show More </a>
                </button>
            </div>
        </div>
        <!-- Category: Mi -->
        <div class="category-section mt-4">
            <h3>Mi</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_2.png" alt="Product 1" />
                        <h4>Product 1</h4>
                        <p>Description of Product 1</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="mobile_2.png" alt="Product 2" />
                        <h4>Product 2</h4>
                        <p>Description of Product 2</p>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary">
                    <a class="redirect" href="product_page.html"> Show More </a>
                </button>
            </div>
        </div>
        <!-- Add more categories as needed -->
    </section>

    <!-- ... (Footer section) ... -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled navigation">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="#">Categories</a></li>
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