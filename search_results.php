<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="search.css" />
    <title>Day Zero - Search Results</title>
  </head>

  


  <body>
    <!-- MAIN -->
    <main class="background-search">
      <div class = "article-container">
      <?php 
        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM article WHERE a_category LIKE '%$search%' OR a_title LIKE '%$search%' 
            OR a_text LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)){
                 echo "<h2> ".$row['a_category']."</h2>
                 <h3> ".$row['a_title']." </h3>
                 <p> ".$row['a_text']." </p>"  ; 
                }
            }
            else{
                echo "There are no results maching your search!";
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
