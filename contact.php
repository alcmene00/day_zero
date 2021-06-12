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

<?php 

$db = new mysqli("localhost", "root", "", "day_zero_db");

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
} 

  if(isset($_POST['contact-e-mail']) && isset($_POST['contact-name']) && isset($_POST['contact-subject']) && isset($_POST['contact-message'])){
    $contact_email=$_POST['contact-e-mail'];
    $contact_name=$_POST['contact-name'];
    $contact_subject=$_POST['contact-subject'];
    $contact_message=$_POST['contact-message'];

    $sql="INSERT INTO `contact_us`(`contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES ('$contact_name','$contact_email','$contact_subject','$contact_message')";

    if($db->query($sql) == TRUE){
      echo "<p> Your message has been sent!</p>";
    } else{
      echo "Error: ".$sql."<br>".$db->error;
    }
   $db->close();
  }

  ?>


  <!-- MAIN -->
  <body>
    <main>
      <div class="contact">
        <h1>Get in touch with us</h1>
        <div class="border"></div>
        <form class="contact-form" action="contact.php" method="post">
          <input type="text" class="contact-text" name="contact-e-mail" placeholder="Your E-mail" />
          <input type="text" class="contact-text" name="contact-name" placeholder="Your Name" />
          <input type="text" class="contact-text" name="contact-subject" placeholder="Subject" />
          <textarea
            name="contact-message"
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
