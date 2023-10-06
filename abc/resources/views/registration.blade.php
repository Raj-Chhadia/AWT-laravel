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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    form {
      max-width: 400px;
      margin: 0 auto;
    }

    .navbar-brand {
      color: #fff !important;
    }

    .nav-link {
      color: #fff !important;
    }
  </style>

  <!-- ... (validation section) ... -->
  <script>
    function validateForm() {
      var username = document.getElementById("username").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;
      var agreeTerms = document.getElementById("agreeTerms").checked;

      // Check if required fields are filled
      if (
        username.trim() === "" ||
        email.trim() === "" ||
        password === "" ||
        confirmPassword === ""
      ) {
        alert("Please fill in all the required fields.");
        return false;
      }

      // Check if email is in a valid format
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }

      // Check if passwords match
      if (password !== confirmPassword) {
        alert("Passwords do not match. Please try again.");
        return false;
      }

      // Check if the terms and conditions are agreed
      if (!agreeTerms) {
        alert("Please agree to the terms and conditions.");
        return false;
      }
      return true; // Return true to submit the form
    }
  </script>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost", "root", "", "shopping");

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    // echo $result; 
    if ($result) {
      echo '<script type ="text/JavaScript"> alert("Registration succesfull")  </script>';
    } else {
      echo "Connection failed: " . mysqli_connect_error();
    }

    mysqli_close($conn);
    echo "<script>window.location.href='home.php'</script>";
  }
  ?>
</body>

</html>
</head>

<body>
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
            <a class="nav-link" href="/categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
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
  <!-- User Registration Section -->
  <section class="container mt-4">
    <h2>User Registration</h2>
    <form method="POST" onsubmit="return validateForm()" action="/registration?>">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" />
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" />
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" />
      </div>
      <!-- <div class="form-group">
          <label for="phoneNumber">Phone Number</label>
          <input
            type="tel"
            class="form-control"
            id="phoneNumber"
            placeholder="Enter your phone number"
          />
        </div> -->
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="agreeTerms" />
        <label class="form-check-label" for="agreeTerms">I agree to the terms and conditions</label>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Register</button>
    </form>
  </section>
</body>

</html>