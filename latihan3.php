<?php
$siswa = 'Budi Santoso';
$matkul = 'PHP';
$nilai = 80; // nilai yang diinput

// Ternary
// jika nilai >= 60 Lulus
// selain itu gagal
$ket = ($nilai >= 60) ? 'Lulus' : 'Gagal';

// if
if ($nilai >= 85 && $nilai <= 100) {
    $grade = 'A';
} elseif ($nilai >= 75 && $nilai <= 85) {
    $grade = 'B';
} elseif ($nilai >= 55 && $nilai <= 75) {
    $grade = 'C';
} elseif ($nilai >= 35 && $nilai <= 55) {
    $grade = 'D';
} elseif ($nilai >= 0 && $nilai <= 35) {
    $grade = 'E';
} else {
    $grade = '';
}

// switchcase
switch ($grade) {
    case 'A':
        $predikat = 'Memuaskan';
        break;
    case 'B':
        $predikat = 'Bagus';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Buruk';
        break;
    default:
        $predikat = '';
        break;
}

echo 'Nama Mahasiswa: ' . $siswa;
echo '<br>Mata Kuliah: ' . $matkul;
echo '<br>Nilai: ' . $nilai;
echo '<br>Keterangan: ' . $ket;
echo '<br>Grade: ' . $grade;
echo '<br>Predikat: ' . $predikat;

echo '<hr>';
?>

<!-- NAMA MAHASISWA: Budi Santoso => variabel
Mata Kuliah: PHP => variabel
Nilai: 80 => ini yang diinput
Keterangan: Lulus => Ternary
Grade: B => if/else
Predikat: Bagus => switch case
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PHP</title>
</head>
<body>
    <h2>Nama Mahasiswa: <?= $siswa ?></h2>
    <h2>Mata Kuliah: <?= $matkul ?></h2>
    <h2>Nilai: <?= $nilai ?></h2>
    <h2>Keterangan: <?= $ket ?></h2>
    <h2>Grade: <?= $grade ?></h2>
    <h2>Predikat: <?= $predikat ?></h2>
    <hr>
</body>
</html>