<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="account.css" />
    <title>Day Zero - Account</title>
  </head>
  <?php 
    include_once 'menu.php';
  ?>
  <body>
    <!-- MAIN -->

    <main class="account-background">
      <div class="container pt-5">
        <div class="row intro">
          <h1><strong>Join our community!</strong></h1>
        </div>
        <div class="row">
          <div class="col-md-5">
            <!-- SIGN UP -->

            <div class="shadow-lg p-4 mb-4 bg-white rounded">
              <h2>Sign Up</h2>
              <p><br/></p>
              
              <form class="form-group" action="includes/signup.inc.php" method="post">
              <label for="email">Email:</label>
              <p></p>
              <input type="email" name="email" placeholder="Email...">
              <p><br/></p>
              <label for="pwd_signup">Password:</label>
              <p></p>
              <input type="password" name="pwd" placeholder="Password...">
              <p><br/></p>
              <button type="submit" name="signup-submit" class="btn btn-dark btn-lg">Sign Up</button>
              </form>

              <?php
              if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                  echo "<p>Please fill in all the fields</p>";
                }
                else if ($_GET["error"] == "invalidemail"){
                    echo "<p>Your email is wrong.</p>";
                }
                else if ($_GET["error"] == "emailtaken"){
                  echo "<p>This user already exists.</p>";
                }
                else if ($_GET["error"] == "stmtfailed"){
                  echo "<p>Something went wrong.</p>";
                }
                else if ($_GET["error"] == "none"){
                  echo "<p>You are now a member of our community!</p>";
                }
              }
              ?>

            </div>
            <p><br/></p>
          </div>

          <div class="col-md-2">
            <div class="mx-5 p-4">
              <h1><strong>OR</strong></h1>
            </div>
          </div>

          <div class="col-md-5">
            <div class="shadow-lg p-4 mb-4 bg-white rounded">
              <!-- LOG IN -->

              <h2>Log In</h2>
              <p><br/></p>

              <form class="form-group" action="includes/login.inc.php" method="post">
              <label for="email">Email:</label>
              <p></p>
              <input type="email" name="email" placeholder="Email...">
              <p><br/></p>
              <label for="pwd_login">Password:</label>
              <p></p>
              <input type="password" name="pwd" placeholder="Password...">
              <p><br/></p>
              <button type="submit" name="submit" class="btn btn-dark btn-lg">Log in</button>
              </form>

              <?php
              if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                  echo "<p>Please fill in all the fields</p>";
                }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p>This user does not exist.</p>";
                }
              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER -->
    <?php 
      include_once 'footer.php'; 
    ?>
    <script src="menu.js"></script>
  </body>
</html>