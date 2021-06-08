<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="menu.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="contact.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <link rel="icon" href="pictures/dayzero-drop-nobg.png" />

    <title>Day Zero - Contact Us</title>
  </head>
  <body>
    <nav>
      <div class="logo">
        <a href="index.php">
          <img src="pictures/dayzero-alt2-1.png" alt="logo" width="200rem" />
        </a>
      </div>

      <!-- MENU -->

      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="causes.php">Causes</a></li>
        <li><a href="effects.php">Effects</a></li>
        <li><a href="whatishappening.php">What is happening</a></li>
        <li><a href="account.php">Account</a></li>
        <li>
          <a href="search.php"
            ><img src="pictures/search-icon.png" alt="search" width="25px"
          /></a>
        </li>
      </ul>
      <div class="mobile-nav">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <!-- MAIN -->

    <main>
      <div class="contact">
        <h1>Get in touch with us</h1>
        <div class="border"></div>
        <form class="contact-form" action="contact.html" method="post">
          <input type="text" class="contact-text" placeholder="Your E-mail" />
          <input type="text" class="contact-text" placeholder="Your Name" />
          <textarea
            name=""
            class="contact-text"
            placeholder="Your Message"
          ></textarea>
          <input type="submit" class="contact-button" value="Submit" />
        </form>
      </div>
    </main>

    <!-- FOOTER -->

    <div class="footer">
      <div class="row">
        <div class="col-sm">
          <div class="footerleft">
            <h3 class="title1">Find us on:</h3>
            <div class="social">
              <a href="https://www.facebook.com/">
                <img src="pictures/facebook-f.png" style="width: 6.5%" />
              </a>
              <a href="https://twitter.com/?lang=el">
                <img src="pictures/twitter.png" style="width: 10%" />
              </a>
              <a href="https://www.instagram.com/">
                <img src="pictures/instagram.png" style="width: 9%" />
              </a>
              <a href="#">
                <img src="pictures/mail.png" style="width: 13%" />
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="fl2">
            <h3 class="title2">Overview</h3>
            <div class="mini-menu">
              <ul class="list-unstyled mb-0">
                <li><a href="index.php">Home</a></li>
                <li><a href="causes.php">Causes</a></li>
                <li><a href="effects.php">Effects</a></li>
                <li><a href="whatishappening.php">What is happening</a></li>
                <li><a href="account.php">Log in/ Sign up</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="fl3">
            <h3 class="title3"><a href="references.php">References</a></h3>
            <h3 class="title4"><a href="contact.php">Contact Form</a></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-end py-3">
      <p>&copy;DAY ZERO 2021</p>
    </div>

    <script src="menu.js"></script>
  </body>
</html>
