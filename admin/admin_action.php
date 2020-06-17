<?php
session_start();

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = sha1($_POST['password']);
    if($user == "admin@goldvelcottages.com" && $pass == "a2138231223b6325dbdeb1a08a5c9085b0b8f59f"){
        $_SESSION['success'] = "Login success";
        $_SESSION['login_status'] = 1;
        header("Location: ./dashboard.php");
    } else {
        $_SESSION['fail'] = "Login failed. Please try again";
        header("Location: ./login.php");
    }
}

if(isset($_POST['logout'])){
    try {
        $_SESSION['login_status'] = 0;
        $_SESSION['success'] = "Successfully logged out!";

        header("Location: ./login.php");
    } catch (\Throwable $th) {
        $_SESSION['fail'] = "Something went wrong. Please try again.";

        header("Location: ./login.php");
        //throw $th;
    }
}