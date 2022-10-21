<?php

include "_component.php";

session_start();
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']!=true)){
    header("location: login.php");
    exit;
}

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "product_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    
    die("Error".mysqli_connect_error());
}

if(isset($_POST['remove'])){
  if($_GET['action']=='remove'){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['book_id'] == $_GET['id']){
        unset($_SESSION['cart'][$key]);
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Done!</strong> Your product has been removed.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }

      else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong> Failed to remove the product.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
      }
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
    <title>Cart</title>
    <!-- Adding Title Icon -->
    <link
      href="data:image/x-icon;base64,AAABAAEAEBAAAAEACABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAADZDUYAAAAAACYmrwD/D1IAyzBHACoqwgAWpyoAKSm9AAO9FgD53uUACX4zAPv++wDXDUUA//j6AP8WVwBISMkAYLZ8ANMgUwDg/v8A/xFTAP///wAAwBUA+uLpAOH8/ABatXYAKyu+ANcPRgCgvsAAnsPDAP319wDD3PcApbS5AJ3DwgA/z1EA/OvwAJ7DwgDXE0oA/v7/AP8QUwAcO38ADsMiAKqstACFv6UAXV8qAP0eXQCfwsIA/O/zABGoIgAAohIA4P//AFdd/wDU8PsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARQUFBQUFAkUFBQUFBQUAQEUFBQUFA4kDBYUFBQUFAEBFBQUFAMxKRwtDCIUFBQBARQUFAMxMR8cHBwcDC4UAQEUFBMxMTEAGxwcHBwcHQEBFAMxMRcDAwwMGhwcHBQBARQsMSYDAwMIMCsMDBEUAQEUDQMDBBUxMSMcHBAwFAEBFBQhKDExMTEqHBwcHC8BARQUFDExMTExHBwcHBwwAQEUFCUyBQcZAicKBhggCwEBFBIxMTEzBwcHBwcHBxQBARQxMTExMQcHBwcHBwcUAQEUMTExMR4HBwcHBwcPFAEBFBQUFBQUFBQUFBQUFBQBARQUFBQUFBQUFBQUFBQUAYABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAAA="
      rel="icon"
      type="image/x-icon"
    />

    <!-- Adding Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <!-- Adding External CSS -->
    <link rel="stylesheet" href="styles/cart.css" />
    <style>
      <?php include "styles/cart.css" ?>
    </style>

    <!-- Adding FontAwesome -->
    <script
      src="https://kit.fontawesome.com/abec828f3c.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <section id="title">
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
                <a class="nav-link" href="welcome.php">Collections</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="cart.php"
                  ><i class="fas fa-shopping-cart"></i>&nbsp;Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link log-out-link" href="logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>

    <div class="container-fluid cart-list" style="background:none">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="book-cart">
                    <h4>My Cart</h4>
                    <hr>

                    <?php
                      $total = 0;
                      if(isset($_SESSION['cart'])){
                        $book_id = array_column($_SESSION['cart'], 'book_id');

                      $sql = "SELECT * FROM book_list";
                      $result = mysqli_query($conn, $sql);
                      while($row = mysqli_fetch_assoc($result)){
                        foreach($book_id as $id){
                          if($row['book_id']==$id){
                            cartElement($row['book_image'], $row['book_name'], $row['author_name'],$row['rent_price'],$row['book_id']);
                            $total = $total + (int)$row['rent_price'];
                          }
                        }

                      }
                      }
                      else{
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Cart is empty.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      }
                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25 price-tag">

            <div class="pt-4">
                <h4>PRICE DETAILS</h4>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Extra Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>₹<?php echo $total.'/day'; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>₹<?php
                            echo $total.'/day';
                            ?></h6>
                    </div>
                </div>
                <button type='submit' class='btn btn-success btn-lg btn-block mx-0 my-3 w-75 ml-5' id='remove' name='remove'>Pay
              </button>
            </div>

        </div>
      </div>
  </div>



    <!-- Footer -->
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
