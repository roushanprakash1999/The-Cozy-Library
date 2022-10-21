<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>

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
    <link rel="stylesheet" href="styles/contact.css" type="text/css"/>

    <style>
      <?php include "styles/contact.css" ?>
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
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contact_us";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `query` (`name`, `email`, `contact`, `message`) VALUES ('$name', '$email', '$contact', '$message')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
          }
        }
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
              <a class="nav-link" href="login.php">Enroll</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container w-50 margin-auto">
      <div class="section-title text-center">
        <h1 class="text-center" id="contact-heading">Get in Touch</h1>
      </div>
      <div class="contact">
        <form action="contact.php" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              required
              name="name"
              placeholder="Your Name"
            />
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              required
              name="email"
              placeholder="Your Email"
            />
          </div>
          <div class="form-group">
            <label for="mobile">Contact</label>
            <input
              type="text"
              class="form-control"
              id="mobile"
              name="contact"
              required
              placeholder="Your Contact"
            />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea
              rows="6"
              name="message"
              class="form-control"
              placeholder="Your Message"
              id="message"
              required
            ></textarea>
          </div>

          <button
            type="submit"
            class="btn btn-primary btn-lg btn-block"
            id="submitButton"
          >
            <i class="fa-solid fa-paper-plane"></i> &nbsp;Send Message
          </button>
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
    <!-- Adding required Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>
