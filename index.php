<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>The Cozy Library</title>
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

    <!-- Adding External CSS -->
    <link rel="stylesheet" href="styles/home.css" />
    <style>
      <?php include "styles/home.css" ?>
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
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cta">Enroll</a>
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

        <!-- Title -->

        <div class="row">
          <div class="col-lg-6">
            <h1>Preserving the past, opening the future.</h1>
            <a href="login.php" id="sign-link-head" class="download-link-head">Sign in</a>
      <a href="signup.php" id="register-link-head" class="download-link-head">Register for free</a>
          </div>
          <div class="col-lg-6 mt-5">
            <img
              class="book"
              src="Pics/Book_reading.jpg"
              alt="Girl-reading-book"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->

    <section id="features">
      <div class="row">
        <div class="col-lg-4 mt-5">
          <i class="icons fa-solid fa-book fa-4x"></i>
          <h3 class="description-heading">No Boundaries of Knowledge.</h3>
          <p class="description">
            Allow access any text from any corner of the world.
          </p>
        </div>
        <div class="col-lg-4 mt-5">
          <i class="icons fa-solid fa-hourglass fa-4x"></i>
          <h3 class="description-heading">No Time-Bound.</h3>
          <p class="description">
            Pay a minimum subscription price, and have access to all the
            materials.
          </p>
        </div>
        <div class="col-lg-4 mt-5">
          <i class="icons fa-solid fa-language fa-4x"></i>
          <h3 class="description-heading">No Language Bar.</h3>
          <p class="description">
            Not only a wide variety of texts and books, but also have texts in
            many languages.
          </p>
        </div>
      </div>
    </section>

    <!-- Carousel -->

    <section id="testimonials">
      <div id="testimonial-carousel" class="carousel slide" data-ride="false">
        <ol class="carousel-indicators">
          <li
            data-target="#testimonial-carousel"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#testimonial-carousel" data-slide-to="1"></li>
          <li data-target="#testimonial-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h2>A book is a gift you can open <br />again and again.</h2>
            <img
              class="testimonial-image"
              src="Pics/garrison-keillor.jpg"
              alt="garrison-keillor"
            />
            <em>Garrison Keillor</em>
          </div>
          <div class="carousel-item">
            <h2>
              That's the thing about books. They let you travel without moving
              your feet.
            </h2>
            <img
              class="testimonial-image"
              src="Pics/jhumpa-lahiri.jpg"
              alt="jhumpa-lahiri"
            />
            <em>Jhumpa Lahiri</em>
          </div>
          <div class="carousel-item">
            <h2>
              Books are as useful to a stupid person as a mirror is useful to a
              blind person.
            </h2>
            <img
              class="testimonial-image"
              src="Pics/chanakya.jpg"
              alt="chanakya"
            />
            <em>Chanakya</em>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#testimonial-carousel"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a
          class="carousel-control-next"
          href="#testimonial-carousel"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>

    <!-- Call to Action -->

    <section id="cta">
      <h3 class="footer-tag">Discover... Connect... Inspire...</h3>

      <a href="login.php" id="sign-link" class="download-link">Sign in</a>
      <a href="signup.php" id="register-link" class="download-link">Register for free</a>
    </section>

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
