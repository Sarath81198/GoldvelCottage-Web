<?php 
error_reporting(0);
session_start();
$logged_in = $_SESSION['login_status'];
if(!$logged_in){
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin - Goldvel Cottage</title>
</head>
<body>
    <body>
        <div class="login">
          <form action="./admin_action.php" method="post" class="box">
            <img src="./../img/logo/logo_name_white.png" alt="">
            <div class="footer-box">
                <p><strong>Admin Login</strong></p>
              </div>
            <div class="input-box">
              <label for="iEmail">Username</label>
              <input id="iEmail" name="username" type="email" placeholder="Admin username" required/>
            </div>
            <div class="input-box">
              <label for="iPassword">Password</label>
              <input id="iPassword" name="password" type="password" placeholder="Admin password" required/>
            </div>
            <button type="submit" name="submit">Submit</button>
            
          </form>
        </div>
      </body>
</body>
</html>
<?php
}
else{
  header("Location: ./dashboard.php");
}
?>