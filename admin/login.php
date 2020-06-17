<?php
error_reporting(0);
session_start();
$logged_in = $_SESSION['login_status'];
if (!$logged_in) {
?>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Admin - Goldvel Cottage</title>
  </head>

  <body>
    <center>
      <!-- Alerts -->

      <?php
      if (isset($_SESSION['success'])) {
      ?>
        <div class="alert alert-success alert-dismissible fade show" style="position: fixed; width: 100%" role="alert">
          <?php echo $_SESSION['success']; ?>
        </div>
      <?php
        unset($_SESSION['success']);
      } elseif (isset($_SESSION['fail'])) {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" style="position: fixed; width: 100%" role="alert">
          <?php echo $_SESSION['fail']; ?>
        </div>
      <?php
        unset($_SESSION['fail']);
      }
      ?>
    </center>

    <!-- --------- -->
    <div class="login">
      <form action="./admin_action.php" method="post" class="box">
        <img src="./../img/logo/logo_name_white.png" alt="">
        <div class="footer-box">
          <p><strong>Admin Login</strong></p>
        </div>
        <div class="input-box">
          <label for="iEmail">Username</label>
          <input id="iEmail" name="username" type="email" placeholder="Admin username" required />
        </div>
        <div class="input-box">
          <label for="iPassword">Password</label>
          <input id="iPassword" name="password" type="password" placeholder="Admin password" required />
        </div>
        <button type="submit" name="submit">Submit</button>

      </form>
    </div>
  </body>

  </html>
<?php
} else {
  header("Location: ./dashboard.php");
}
?>