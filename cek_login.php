<?php
session_start();

// USER HARDCODE (bisa nanti diganti database)
$user = "admin";
$pass = "123";

if($_POST['username'] == $user && $_POST['password'] == $pass){
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    header("Location: login.php?error=1");
}
?>