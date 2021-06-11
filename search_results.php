<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="search_results.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Day Zero - Search Results</title>
  </head>

  
  <?php 
      include_once 'menu.php';
  ?>

  <body>
    <!-- MAIN -->
    <main class="background-search">

      <form  class="search" action="search_results.php" method="POST">
          <div class="search-box">
            <input type="text" name="search" placeholder="SEARCH" />
            <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
          </div>
      </form>



      <div class = "results-container">
      <?php 
        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM article WHERE a_category LIKE '%$search%' OR a_main_title LIKE '%$search%' OR a_title LIKE '%$search%'
            OR a_text LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            if ($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)){
                  echo "<div class= 'result'> ";
               //   if ($row['a_title'] == "") echo "<a href=".$row['a_category'].".php ><h2> ".$row['a_category']."> ".$row['a_main_title']. "</h2></a>";
                    if ($row['a_title'] == "") echo "<a href=".$row['path']."><h2> ".$row['a_category']."> ".$row['a_main_title']. "</h2></a>";
                    else echo "<a href=".$row['path']."><h2> ".$row['a_category']."> ".$row['a_main_title']. "> ".$row['a_title']. "</h2></a>";
                    echo " <p> ".$row['a_text']." </p>"  ; 
                  echo "</div>";
                }
            }
            else{
                echo "<div class= 'result'> <h2> There are no results maching your search! </h2> </div>";
            }
        }
      ?>

      </div>
    </main>

    <!-- FOOTER -->
    <?php 
      include_once 'footer.php';
    ?>
  </body>
</html>
