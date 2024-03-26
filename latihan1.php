<?php
// variabel

// ini contoh komentar didalam php

/*komentar 1
komentar 2
komentar 3
komentar 4*/

// cetak
echo 'Belajar PHP</br>';
echo "Saya Senang Belajar PHP</br>";
print("Belajar MySQL</br>");
echo 'Saya Senang Belajar "PHP"</br>'; // ini untuk kalau mau ada dua double quote
echo "Saya Senang Belajar \"PHP\"<hr>"; // ini cara lain menggunakan double quote didalam double quote

// variabel user
$nama = "Budi"; // data string
$alamat = "Bandung"; // data string
$umur = 30; // data integer
$berat = 70.5; // data float/double
$pekerjaan = "Karyawan";

// cetak didalam php
echo $nama . "&nbsp";
echo $alamat . "&nbsp";
echo $umur . "&nbsp";
echo $berat . "&nbsp";
echo "<br>";
echo "Nama Saya $nama Alamat di $alamat";
echo "<br>";
echo 'Nama Saya ' . $nama . ' Alamat di ' . $alamat . '<br>';

echo ' Umur Saya: ' . $umur . ' <br>Berat Saya: ' . $berat . ' <br>Profesi Saya Sebagai ' . $pekerjaan . '<hr>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>
<body>
    <!-- cetak di dalam html -->
    <h2>Nama Saya: <?php echo $nama ?></h2>
    <h2>Saya Berumur: <?= $umur ?> tahun</h2>
    <hr>
</body>
</html>

<?php
// Variable System
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<hr>";

// Variable Constanta
// define: untuk memanggil variabel konstanta
define('PELAJARAN', 'PHP Dasar');
echo 'Ini Matakuliah: ' . PELAJARAN;
echo "<hr>";

// operator aritmatika
$a = 100;
$b = 50;

echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
echo $a%$b.'<br>'; // modulus(%), sisa pembagian
echo $a**$b.'<br>'; // pangkat
echo pow($a,$b).'<br>'; // pangkat
echo pow(2,3); // pangkat
echo "<hr>";

// SOAL:
// Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2
define('PHI', 3.14);
$jari2 = 15;
$luas = PHI * ($jari2**2);
$keliling = 2 * PHI * $jari2;

echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<hr>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- cetak di dalam html -->
    <p>Jari - Jari: <?= $jari2 ?></p>
    <p>Luasnya: <?= $luas ?></p>
    <p>Kelilingnya: <?= $keliling ?></p>
    <hr>
</body>
</html>

<?php
// tipe data string
$itungstring = "Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo '<br>';

// mengetahui tipe variabel
$huruf = "Budi";
$hasil = gettype($huruf);
echo $hasil;
echo '<br>';

$bil = 100;
$hasil = gettype($bil);
echo $hasil;
echo '<br>';

$bil2 = 7.50;
$hasil = gettype($bil2);
echo $hasil;
echo '<hr>';

// buat nama lengkap dan alamat, cetak dengan menggunakan style css (style warna) menggunakan echo
echo '<h2 style="color:cyan;">Nama Saya ' . $nama . ' Alamat di ' . $alamat . '</h2><br>';
echo '<h2 style="color:brown;">Umur Saya: ' . $umur . '</h2><h2 style="color:blue;"><br>Berat Saya: ' . $berat . '</h2><h2 style="color:salmon;"><br>Profesi Saya Sebagai ' . $pekerjaan . '</h2><hr>'
?>