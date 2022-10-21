<?php

$showSuccess = false;
$showError = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
  include '_dbconnect.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  
  $password = $_POST["pass"];
  $cpassword = $_POST["cpass"];
  $contact = $_POST["contact"];
  
  //Check if the user already exists

  $existSql = "SELECT * FROM `new_user` WHERE email = '$email'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows > 0){
    $showError = " User already exists.";
  }

  else{
    if($password == $cpassword){
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `new_user` (`name`, `email`, `contact`, `password`) VALUES ('$name', '$email',  '$contact', '$hash')";
      $result = mysqli_query($conn, $sql);
  
      if($result){
        $showSuccess = true;
      }
    }
    else {
      $showError = " Passwords do not match.";
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <!--Adding Title Icon-->
    <link
      href="data:image/x-icon;base64,AAABAAEAEBAAAAEACABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAADZDUYAAAAAACYmrwD/D1IAyzBHACoqwgAWpyoAKSm9AAO9FgD53uUACX4zAPv++wDXDUUA//j6AP8WVwBISMkAYLZ8ANMgUwDg/v8A/xFTAP///wAAwBUA+uLpAOH8/ABatXYAKyu+ANcPRgCgvsAAnsPDAP319wDD3PcApbS5AJ3DwgA/z1EA/OvwAJ7DwgDXE0oA/v7/AP8QUwAcO38ADsMiAKqstACFv6UAXV8qAP0eXQCfwsIA/O/zABGoIgAAohIA4P//AFdd/wDU8PsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARQUFBQUFAkUFBQUFBQUAQEUFBQUFA4kDBYUFBQUFAEBFBQUFAMxKRwtDCIUFBQBARQUFAMxMR8cHBwcDC4UAQEUFBMxMTEAGxwcHBwcHQEBFAMxMRcDAwwMGhwcHBQBARQsMSYDAwMIMCsMDBEUAQEUDQMDBBUxMSMcHBAwFAEBFBQhKDExMTEqHBwcHC8BARQUFDExMTExHBwcHBwwAQEUFCUyBQcZAicKBhggCwEBFBIxMTEzBwcHBwcHBxQBARQxMTExMQcHBwcHBwcUAQEUMTExMR4HBwcHBwcPFAEBFBQUFBQUFBQUFBQUFBQBARQUFBQUFBQUFBQUFBQUAYABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAAA="
      rel="icon"
      type="image/x-icon"
    />

    <!--Adding Bootstrap-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

    <!--Adding External CSS-->
    <link rel="stylesheet" href="styles/signup.css" />
    <style>
      <?php include "styles/signup.css" ?>
    </style>

    <!--Adding Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap"
      rel="stylesheet"
    />

    <!--Adding Body Icons-->
    <script
      src="https://kit.fontawesome.com/abec828f3c.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <?php

      if($showSuccess){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations!</strong> Your account has been created successfully. You can login to continue.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }

      if ($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    ?>

    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">The Cozy Library</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="">Enroll</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container">
      <div class="section-title text-center">
        <h4 class="text-center" id="contact-heading">
          Please register for new user
        </h4>
      </div>
      <div class="login-form">
        <form action="signup.php" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              required
              name="name"
              placeholder="Please enter your name"
            />
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input
              type="email"
              class="form-control"
              id="email"
              required
              name="email"
              placeholder="Please enter your e-mail"
            />
          </div>
          <div class="form-group">
            <label for="contact">Contact</label>
            <input
              type="text"
              class="form-control"
              id="contact"
              required
              name="contact"
              placeholder="Please enter your contact number"
            />
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input
              type="password"
              class="form-control"
              id="pass"
              required
              name="pass"
              placeholder="Please enter your password"
            />
          </div>
          
          <div class="form-group">
            <label for="pass">Confirm Password</label>
            <input
              type="password"
              class="form-control"
              id="cpass"
              required
              name="cpass"
              placeholder="Please enter your password again"
            />
          </div>
          <small id="passHelp" class="form-text text-muted">Make sure to type the same password</small>
          <button
            type="submit"
            class="btn btn-primary btn-lg btn-block"
            id="submitButton"
          >
            Register&nbsp; &nbsp;<i class="fa-solid fa-user-plus"></i>
          </button>
          <p class="old-user">
            Already have an account? &nbsp;
            <a href="login.php" id="register-link">SIGN IN</a>
          </p>
        </form>
      </div>
    </div>
    <footer class="foot">
      <a href="https://twitter.com/LibraryCozy" class="social-links"
        ><i class="footer-icon fa-brands fa-twitter"></i
      ></a>
      <a
        href="https://www.facebook.com/The-Cozy-Library-105184588915848/"
        class="social-links"
        ><i class="footer-icon fa-brands fa-facebook"></i
      ></a>
      <a href="https://www.instagram.com/thecozylibrary4/" class="social-links"
        ><i class="footer-icon fa-brands fa-instagram"></i
      ></a>
      <p>&copy; The Cozy Library</p>
    </footer>

    <!-- Adding Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
