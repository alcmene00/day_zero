<!DOCTYPE html>
<html lang="en" >

<?php 
  include_once 'head.php';
?>

<head>
  <title>Day Zero - Profile</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./profileUsers.css">

</head>

<?php 
  include_once 'menu.php';
?>



<body>


<div class="space"></div>

  
<!-- profile - bubble - image -->

<div class="box">
  <div id="overlay">
    <div class="image"> <!-- get from database -->
      <div class="trick">

      
      <?php
      $email = $_SESSION["useremail"];
      ?>

      </div>
    </div>
    <ul class="text"><?php echo htmlspecialchars($email) ?></ul> <!-- get from database -->
    <div class="text1">User</div> <!-- get from database -->
  </div>
</div>


<div class="space"></div>





<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  
  

  <!-- first panel - info -->

  <div class="panel panel-default">
    <div class="panel-heading " role="tab" id="headingOne">
      <h4 class="panel-title ">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="" aria-controls="collapseOne">
          <div class="title  btn btn-danger btn-outline btn-lg">Information</div>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        email: <?php echo htmlspecialchars($email) ?><br> <!-- get from database -->
      </div>
    </div>
  </div>
 
  
  
  
  <!-- second panel - profile editing -->

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseThree">
          <div class="title btn btn-danger btn-outline btn-lg">Profile Editing</div>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

        
        
      <form id="form" class="topBefore" action="includes/update.inc.php" method="post">
        <input name="update-email" type="text" placeholder="change e-mail"> <!-- get from database -->
        <input name="update-password" type="text" placeholder="change password"> <!-- get from database -->
        <input name="update-submit" type="submit" value="Done!">

      </form>

      <?php
              if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                  echo "<p>Please fill in all the fields</p>";
                }
                else if ($_GET["error"] == "none"){
                  echo "<p>Updating was successful!</p>";
                }
              }
      ?>

        
      </div>
    </div>
    
  </div>

  <!-- log out -->

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="logout">
      <h4 class="panel-title">
      </h4>
    </div>
    <form id="form" class="topBefore" action="includes/logout.inc.php" method="post" type="submit">
    <input id="submit" type="submit" value="Log Out">
    </form>
  </div>

  



</div>


<!-- F O O T E R -->
<?php 
include_once 'footer.php';
?>



<!-- script -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
</body>
</html>
