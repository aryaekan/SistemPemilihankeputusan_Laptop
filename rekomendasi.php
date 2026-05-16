

<!DOCTYPE html>
<html>
<head>
    <title>Rekomendasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Rekomendasi Laptop</h1>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="data.php">Data Laptop</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">

<h2>🎯 Input Bobot Kriteria</h2>

<p>
Masukkan tingkat prioritas setiap kriteria.
Semakin besar nilai, semakin penting kriteria tersebut.
</p>

<br>

<form action="proses.php" method="POST">

<div class="input-group">
<label>Harga (C1)</label>
<input type="number" name="w1" value="5">
</div>

<div class="input-group">
<label>Processor (C2)</label>
<input type="number" name="w2" value="2">
</div>

<div class="input-group">
<label>GPU (C3)</label>
<input type="number" name="w3" value="1">
</div>

<div class="input-group">
<label>RAM (C4)</label>
<input type="number" name="w4" value="2">
</div>

<div class="input-group">
<label>Penyimpanan (C5)</label>
<input type="number" name="w5" value="2">
</div>

<div class="input-group">
<label>Layar (C6)</label>
<input type="number" name="w6" value="3">
</div>

<button type="submit">
Hitung Rekomendasi
</button>

</form>
</div>

</body>
</html>