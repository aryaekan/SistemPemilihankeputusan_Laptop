<?php
session_start();
session_destroy();

// arahkan ke beranda
header("Location: index.php");
exit();
?>