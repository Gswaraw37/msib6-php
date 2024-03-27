<?php
// fungsi if
// jika umur lebih dari 20 tahun, maka anda dapat mengendarai mobil (if)
// jika umur lebih 17 tahun, maka anda dapat mengendarai motor (elseif)
// jika umur lebih 10 tahun, maka anda dapat mengendarai sepeda (elseif)
// selain itu tidak boleh
$umur = 18; // ubah umurnya
if($umur > 20) {
    echo "Selamat Kamu Dapat Mengendarai Mobil, Motor, dan Sepeda";
} elseif($umur > 17){
    echo "Kamu Boleh Mengendarai Motor dan Sepeda";
} elseif($umur > 10){
    echo "Kamu Hanya Boleh Mengendarai Sepeda";
} else {
    echo "Kamu Dilarang Mengendarai Kendaraan";
}
echo '<hr>';

// jika umur <40 dan umur >=17 ket: dewasa
// jika umur <17 dan umur >=9 ket: remaja
// jika umur <9 dan umur >5 ket: anak-anak
// jika umur <=5 dan umur >0 ket: balita
// selain itu umur > 40 ket: tua

// jawaban:
$usia = 25;
if($usia < 40 && $usia >= 17) {
    $ket = "Dewasa";
} elseif($usia < 17 && $usia >= 9){
    $ket = "Remaja";
} elseif($usia < 9 && $usia > 5){
    $ket = "Anak - Anak";
} elseif ($usia <= 5 && $usia > 0) {
    $ket = "Balita";
} else {
    $ket = "Tua";
}
echo "Nama Saya $umur Keterangan $ket";
echo '<hr>';

// soal:
// jika nilai > 6, maka nilai bagus
// selain itu buruk
$nilai = 7;

// cara if:
if ($nilai > 6) {
    echo 'Baik';
}else{
    echo 'Buruk';
}
echo '<br>';

// cara ternary:
echo $nilai > 6 ? 'Baik' : 'Buruk';
echo '<br>';

// cara ternary yang lain:
$nilai = 7; // Ubah nilai sesuai kebutuhan
$status_nilai = ($nilai > 6) ? "Bagus" : "Tidak Bagus";
echo "Nilai: $nilai<br>";
echo "Status Nilai: $status_nilai";

echo '<hr>';

// $baju = 'L'; // ukuran baju
// switch($baju){
//     case 'L':
//     case 'l':
//         echo 'Large';
//         break;
//     case 'M' && 'm':
//         echo 'Medium';
//         break;
//     default:
//         echo 'Small';
// }

$baju = 'L'; // ukuran baju
$baju = strtolower($baju);
switch($baju){
    case 'l':
        echo 'Large';
        break;
    case 'm':
        echo 'Medium';
        break;
    default:
        echo 'Small';
}
echo '<hr>';

// tugas switch case
// jika nilai <= 0 nilai: Buruk
// jika nilai <= 40 nilai: Kurang
// jika nilai <= 70 nilai: Cukup
// jika nilai <= 80 nilai: Memuaskan
// jika nilai <= 100 nilai: Sangat Memuaskan
// selain itu nilai: Null

// jawaban:
// statement switchcase
$nilai = 101;
switch ($nilai) {
    case $nilai <= 40:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'Ket: Nilai Kurang';
        break;
    case $nilai <= 70:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'Ket: Nilai Cukup';
        break;
    case $nilai <= 80:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'Ket: Nilai Memuaskan';
        break;
    case $nilai <= 100:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'Ket: Nilai Sangat Memuaskan';
        break;
    default:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'Ket: Null';
        break;
}
echo '<hr>';

// tugas 2 switchcase:
// jika nilai >=85 dan nilai <=100 grade: A
// jika nilai >=75 dan nilai <85 grade: B
// jika nilai >=60 dan nilai <75 grade: C
// jika nilai >=35 dan nilai <60 grade: D
// jika nilai >=0 dan nilai <35 grade: E
// selain itu grade: Null

// jawaban:
$nilai = 50;
switch ($nilai) {
    case $nilai >= 85 && $nilai <= 100:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'grade: A';
        break;
    case $nilai >= 75 && $nilai < 85:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'grade: B';
        break;
    case $nilai >= 60 && $nilai < 75:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'grade: C';
        break;
    case $nilai >= 35 && $nilai < 60:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'grade: D';
        break;
    case $nilai >= 0 && $nilai < 35:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'grade: E';
        break;
    default:
        echo 'Nilai: ' . $nilai . '<br>';
        echo 'Ket: Null';
        break;
}
echo '<hr>';
?>