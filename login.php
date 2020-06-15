<html lang="en">
<?php

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == "admin" && $pass == "admin123"){
        echo "password corect";
    } else {
        echo "password mismatch";
    }
}

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <body>
        <div class="login">
          <form action="index.html" method="post" class="box">
            <img src="./img/logo/logo_name_white.png" alt="">
            <div class="footer-box">
                <p><strong>Admin Login</strong></p>
              </div>
            <div class="input-box">
              <label for="iEmail">Username</label>
              <input id="iEmail" name="username" type="email" placeholder="enter your username" />
            </div>
            <div class="input-box">
              <label for="iPassword">Password</label>
              <input id="iPassword" name="password" type="password" placeholder="enter your password" />
            </div>
            <button type="submit" name="submit">Submit</button>
            
          </form>
        </div>
      </body>
</body>
</html>