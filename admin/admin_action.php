<?php
session_start();

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = sha1($_POST['password']);
    if($user == "admin@goldvelcottages.com" && $pass == "a2138231223b6325dbdeb1a08a5c9085b0b8f59f"){
        $_SESSION['success'] = "Login success";
        header("Location: ./dashboard.php");
    } else {
        $_SESSION['error'] = "Login failed";
        header("Location: ./login.php");
    }
}