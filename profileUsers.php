<!DOCTYPE html>
<html lang="en">

  <?php 
  include_once 'head.php';
  ?>

<head>
  <meta charset="UTF-8">
  <title>Day Zero - Profile</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/sco.js/1.1.0/css/scojs.min.css'><link rel="stylesheet" href="./profileUsers.css">

</head>

<?php 
  include_once 'menu.php';
?>

<body>
<!-- partial:profile.partial.html -->
<head>

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

  <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>


</head>
  
  

  
  
  
  


<div class="space"></div>
  
<!-- profile - bubble - image -->

<div class="box">
  <div id="overlay">
    <div class="image"> <!-- get from database -->
      <div class="trick">

      </div>
    </div>
    <ul class="text">@email</ul> <!-- get from database -->
    <div class="text1">User</div> <!-- get from database -->
  </div>
</div>

<div class="space-mini"></div>




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
        email:<br> <!-- get from database -->
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

        
        
        <form id="form" class="topBefore">

          <input id="email" type="text" placeholder="change e-mail"> <!-- get from database -->
          <input id="password" type="text" placeholder="change password"> <!-- get from database -->
          <input id="submit" type="submit" value="Done!">

        </form>


        
      </div>
    </div>
  </div>





</div>

<!-- F O O T E R -->
<?php 
include_once 'footer.php';
?>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
</body>
</html>