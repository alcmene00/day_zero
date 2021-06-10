<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="search.css" />
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
            <input type="text" name="search" placeholder="Search" />
       <!--     <input name="submit-search" type="submit" type="image" src="pictures/search-icon.png"  alt="search" width="40px"/>-->
           <button type="submit" name="submit-search">search</button>
          <!-- <img src="pictures/search-icon.png" alt="search" width="40px" />-->
          </div>
        </form>
    </main>
    <!-- FOOTER -->
    <?php 
      include_once 'footer.php';
    ?>
    <script src="menu.js"></script>
  </body>
</html>