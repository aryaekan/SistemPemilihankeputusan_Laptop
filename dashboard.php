<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Dashboard Admin</h1>

<nav>
    <a href="data.php">Kelola Data Laptop</a>
    <a href="rekomendasi.php">Rekomendasi</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <h2>Selamat datang Admin</h2>
    <p>Kamu bisa mengelola data laptop di sini.</p>
</div>

</body>
</html>