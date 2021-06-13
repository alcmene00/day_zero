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
    echo '<script>alert("Your message has been sent!")</script>';
  } else{
    echo "Error: ".$sql."<br>".$db->error;
  }
  
  $db->close();
  }
  ?>

<script>
function validateForm() {
  var x = document.forms["contact-form"]["contact-e-mail"].value;
  var y = document.forms["contact-form"]["contact-name"].value;
  var z = document.forms["contact-form"]["contact-subject"].value;

  if (x == "" || x == null) {
    alert("E-mail must be filled out");
    return false;
  }
  if (y == "" || y == null) {
    alert("Name must be filled out");
    return false;
  }
  if (z == "" || z == null) {
    alert("Subject must be filled out");
    return false;
  }
}

</script>

  <!-- MAIN -->
  <body>
    <main>
      <div class="contact">
        <h1>Get in touch with us</h1>
        <div class="border"></div>
        <form class="contact-form" name="contact-form" action="contact.php" onsubmit="return validateForm()" method="post">
          <input type="text" class="contact-text" name="contact-e-mail" placeholder="Your E-mail" />
          <input type="text" class="contact-text" name="contact-name" placeholder="Your Name" />
          <input type="text" class="contact-text" name="contact-subject" placeholder="Subject" />
          <textarea
            name="contact-message"
            class="contact-text"
            placeholder="Your Message"
            minlength="10">
            </textarea>
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
