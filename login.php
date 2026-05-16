<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Login Admin</h2>
<div class="login-box">
    <h2>Login Admin</h2>
    <form action="cek_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>


<?php
if(isset($_GET['error'])){
    echo "<p style='color:red'>Login gagal!</p>";
}
?>

</body>
</html>