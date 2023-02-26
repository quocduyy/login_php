<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['user'] = $username;
        header("location:main.php");
    } else {
        echo "incorrect username and password";
        require "login.html";
    }
 
?>