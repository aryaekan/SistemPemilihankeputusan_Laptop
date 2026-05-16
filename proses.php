<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

// DATA
$alternatif = ["Zyrex","MSI","Lenovo","Axioo","ASUS"];

$matriks = [
    [5,1,1,1,1,3],
    [4,4,2,3,2,3],
    [3,4,3,3,3,3],
    [2,5,3,4,3,3],
    [1,5,2,5,3,5]
];

// BOBOT
$bobot = [
    $_POST['w1'],
    $_POST['w2'],
    $_POST['w3'],
    $_POST['w4'],
    $_POST['w5'],
    $_POST['w6']
];

// NORMALISASI
$normal = [];
for ($j=0;$j<6;$j++){
    $sum = 0;
    for ($i=0;$i<5;$i++){
        $sum += pow($matriks[$i][$j],2);
    }
    $akar = sqrt($sum);

    for ($i=0;$i<5;$i++){
        $normal[$i][$j] = $matriks[$i][$j] / $akar;
    }
}

// TERBOBOT
$terbobot = [];
for ($i=0;$i<5;$i++){
    for ($j=0;$j<6;$j++){
        $terbobot[$i][$j] = $normal[$i][$j] * $bobot[$j];
    }
}

// SOLUSI IDEAL
$idealPos = [];
$idealNeg = [];

for ($j=0;$j<6;$j++){
    $kolom = array_column($terbobot,$j);
    $idealPos[$j] = min($kolom);
    $idealNeg[$j] = max($kolom);
}

// JARAK
$dPlus = [];
$dMin = [];

for ($i=0;$i<5;$i++){
    $sumPlus = 0;
    $sumMin = 0;

    for ($j=0;$j<6;$j++){
        $sumPlus += pow($terbobot[$i][$j]-$idealPos[$j],2);
        $sumMin += pow($terbobot[$i][$j]-$idealNeg[$j],2);
    }

    $dPlus[$i] = sqrt($sumPlus);
    $dMin[$i] = sqrt($sumMin);
}

// NILAI
$nilai = [];
for ($i=0;$i<5;$i++){
    $nilai[$i] = $dMin[$i]/($dMin[$i]+$dPlus[$i]);
}

arsort($nilai);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Rekomendasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Hasil Rekomendasi</h1>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="rekomendasi.php">Kembali</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <h2>Ranking Laptop Terbaik</h2>

    <table>
        <tr>
            <th>Rank</th>
            <th>Laptop</th>
            <th>Nilai</th>
        </tr>

        <?php
        $rank = 1;
        foreach($nilai as $i => $v){

            $class = "";
            if($rank == 1) $class = "rank-1";
            elseif($rank == 2) $class = "rank-2";
            elseif($rank == 3) $class = "rank-3";

            echo "<tr>
                <td><span class='$class'>$rank</span></td>
                <td>{$alternatif[$i]}</td>
                <td>".round($v,4)."</td>
            </tr>";

            $rank++;
        }
        ?>
    </table>
</div>

</body>
</html>