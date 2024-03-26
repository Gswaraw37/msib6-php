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
?>