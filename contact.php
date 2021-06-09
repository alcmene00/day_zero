<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="contact.css" />
    <title>Day Zero - Contact Us</title>
  </head>

  <?php 
    include_once 'menu.php';
  ?>

  <!-- MAIN -->
  <body>
    <main>
      <div class="contact">
        <h1>Get in touch with us</h1>
        <div class="border"></div>
        <form class="contact-form" action="contact.php" method="post">
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
    <?php 
      include_once 'footer.php';
    ?>

    <script src="menu.js"></script>
  </body>
</html>
