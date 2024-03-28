<?php
//array: sekumpulan data
//array numerik dan array assosiatif
//untuk mencetak array memerlukan foreach

//1. array numerik
$ar_buah = ['Pepaya','Mangga','Pisang','Anggur','Jeruk'];

//cetak index ke ?
echo $ar_buah[4];
echo '<hr>';

//tampilkan jumlah total pada buah
$jumlah = count($ar_buah); // agregat for array
echo $jumlah;
echo '<hr>';

//lihat hasil data buah dengan foreach
foreach ($ar_buah as $value) {
    echo $value."<br>";
}

echo '<hr>';

//2. array assosiatif
$ar_hewan = [10 => 'Babi', 20 => 'Bebek', 'Kucing', 30 => 'Putri Duyung', 'Anjing Galak'];
echo $ar_hewan[10];
echo '<hr>';

//lihat hasil data hewan dengan foreach
foreach ($ar_hewan as $id => $value) {
    echo $id .". ".$value."<br>";
}

echo '<hr>';

//3. array multidimensi (array dalam array)
//Cara 1:
$daftar_tahanan = [
    [
        "nama" => "Budi",
        "alamat" => "Depok",
        "tlp" => 12345,
        "status" => "Jomblo",
    ],
    [
        "nama" => "Alif",
        "alamat" => "Bogor",
        "tlp" => 898955,
        "status" => "Duda",
    ],
    [
        "nama" => "Jamal",
        "alamat" => "Mars",
        "tlp" => 898955,
        "status" => "Jomblo",
    ],
];

foreach ($daftar_tahanan as $namax) {
    echo $namax['nama'] . "<br>";
    echo $namax['alamat'] . "<br>";
    echo $namax['tlp'] . "<br>";
    echo $namax['status'] . "<br>";
}

echo '<hr>';

//3. array multidimensi (array dalam array)
//Cara 2:
$a1 = [
    "nama" => "Budi",
    "alamat" => "Depok",
    "tlp" => 12345,
    "status" => "Jomblo",
];

$a2 = [
    "nama" => "Alif",
    "alamat" => "Bogor",
    "tlp" => 898955,
    "status" => "Duda",
];

$a3 = [
    "nama" => "Jamal",
    "alamat" => "Mars",
    "tlp" => 898955,
    "status" => "Jomblo",
];

$daftartahanan = [$a1, $a2, $a3];

foreach ($daftartahanan as $namax) {
    echo $namax['nama'] . "<br>";
}