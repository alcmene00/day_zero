<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="search.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Day Zero - Search</title>
  </head>
  <?php 
      include_once 'menu.php';
  ?>
  <body>
    <!-- MAIN -->

    <main class="background-search">
      <form  class="search" action="search_results.php" method="POST">
          <h3>What are you looking for?</h3>
          <div class="search-box">
            <input type="text" name="search" placeholder="Search" minlength="4"/>
            <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
          </div>
        </form>
    </main>
    <!-- FOOTER -->
    <?php 
      include_once 'footer.php';
    ?>
  </body>
</html>
