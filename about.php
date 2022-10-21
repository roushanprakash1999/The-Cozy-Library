<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>About Us</title>
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
    <link rel="stylesheet" href="styles/about.css" />
    <style>
      <?php include "styles/about.css" ?>
    </style>

    <!-- Adding FontAwesome -->
    <script
      src="https://kit.fontawesome.com/abec828f3c.js"
      crossorigin="anonymous"
    ></script>

    
  </head>
  <body>
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
              <a class="nav-link active" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container div1 w-50 margin-auto">
      <div class="section-title text-center">
        <h1 class="text-center" id="contact-heading">What Inspires Me</h1>
        <p class="describe">
          The Cozy Library – is an online book rental service developed with a
          mission to help people foster their habit of reading. The vision is to
          ensure that the habit of reading prevails and is passed on to the next
          generations. Reading is an expensive hobby; one cannot buy all the
          books to read,so in this era of technological revolution I came up
          with an idea so that one can easily afford the books they want.
        </p>
      </div>
    </div>

    <div class="container div2 w-50 margin-auto">
      <div class="section-title text-center">
        <h1 class="text-center" id="contact-heading">The Mission</h1>
        <p class="describe">
          To reinvent the way people share and consume knowledge.
          <br />
          I have launched the website with the understanding that renting
          textbooks could save college students lots of money.
        </p>
      </div>
      <section id="features">
        <div class="row">
          <div class="col-lg-4 mt-5">
            <i class="icons fa-solid fa-search fa-2x"></i>
            <h4 class="description-heading">Search</h4>
            <p class="description">
              If you know what you're looking for, then use the search box to
              search by Title or Author.
            </p>
          </div>
          <div class="col-lg-4 mt-5">
            <i class="icons fa-solid fa-user fa-2x"></i>
            <h4 class="description-heading">Profile</h4>
            <p class="description">
              If you want to make some changes in your profile,then go to my
              profile.
            </p>
          </div>
          <div class="col-lg-4 mt-5">
            <i class="icons fa-solid fa-book fa-2x"></i>
            <h4 class="description-heading">Books</h4>
            <p class="description">
              Find your favourite books in your own budget.
            </p>
          </div>
        </div>
      </section>
    </div>
    <div class="container div3 w-50 margin-auto">
      <div class="section-title text-center">
        <h1 class="text-center" id="contact-heading">Our Customer Service</h1>
        <p class="describe">
          The Cozy Library is dedicated to customer service and does whatever it
          takes to make sure our customers are satisfied. Contact us through
          your preferred method of communication below. If it’s outside of our
          hours, we will work diligently our next business day to get in touch
          with you.
        </p>
      </div>
      <section id="features">
        <div class="row">
          <div class="col-lg-4 mt-5">
          <i class="icons fa-solid fa-clock fa-2x"></i>
            <h4 class="description-heading">Working Hours</h4>
            <p class="description">
              Mon - Fri <br />
              8:30am - 6:00pm IST <br />
              Sat - Sun <strong>(CLOSED)</strong>
            </p>
          </div>
          <div class="col-lg-4 mt-5">
          <i class="icons fa-solid fa-mobile-screen fa-2x"></i>
            <h4 class="description-heading">Contact</h4>
            <p class="description">Give us a call : 9887745295</p>
          </div>
          <div class="col-lg-4 mt-5">
          <i class="icons fa-solid fa-envelope fa-2x"></i>
            <h4 class="description-heading">E-mail</h4>
            <p class="description">
              E-mail us : thecozylibrary43 <br />@gmail.com
            </p>
          </div>
        </div>
      </section>
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
