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
              <p><br /></p>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control form-control-lg"
                  id="email_signup"
                  placeholder="Enter email"
                  name="email"
                />
              </div>
              <p><br /></p>
              <div class="form-group">
                <label for="pwd_signup">Password:</label>
                <input
                  type="password"
                  class="form-control form-control-lg"
                  id="pwd"
                  placeholder="Enter password"
                  name="pswd"
                />
              </div>
              <p><br /></p>

              <button type="submit" class="btn btn-dark btn-lg">Sign Up</button>
            </div>
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
              <p><br /></p>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control form-control-lg"
                  id="email_login"
                  placeholder="Enter email"
                  name="email"
                />
              </div>
              <p><br /></p>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input
                  type="password"
                  class="form-control form-control-lg"
                  id="pwd_login"
                  placeholder="Enter password"
                  name="pswd"
                />
              </div>
              <p><br /></p>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                  />
                  Remember me
                </label>
              </div>

              <button type="submit" class="btn btn-dark btn-lg">Log In</button>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER -->
    <?php 
      include_once 'footer.php'; 
    ?>
  </body>
</html>
