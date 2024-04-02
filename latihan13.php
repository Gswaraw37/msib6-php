<?php
    //contoh fungsi bawaan dari PHP
    $str = 'Belajar PHP di Kampus Merdeka';
    echo $str;

    echo '<br>';

    $str = strtoupper($str); // huruf kapital semua
    echo $str;

    echo '<br>';

    $str = strtolower($str); // huruf kecil semua
    echo $str;

    // ucfirst
    // ucwords

    echo '<hr>';

    $ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
    sort($ar_buah); // A-Z | asort: Z-A
    foreach ($ar_buah as $buah){
        echo "$buah<br>";
    }

    echo '<hr>';

    // 1. fungsi tanpa parameter/argumen (?)
    function salam(){
        echo "Selamat Pagi Semuanya..";
    }
    salam(); // cetak function

    echo '<br>';

    // 2. fungsi dengan parameter/arguman (...)
    function sapa($kawan){
        echo "Selamat Pagi $kawan";
    }
    sapa('Andi'); // cetak cara 1
    echo '<br>';
    $nama = 'Jamal';
    sapa($nama); // cetak cara 2

    echo '<br>';

    // 3. fungsi dengan parameter/argumen beserta isi
    function kabar($kawan = 'mipan'){
        echo "Hai Apa Kabar $kawan";
    }
    kabar();
    echo '<br>';
    kabar('Ahmad');
    echo '<br>';
    $kawan = 'Budi';
    kabar($kawan);

    echo '<hr>';

    // fungsi dengan void (tidak mengembalikan nilai)
    function hitung($x, $y){
        $z = $x + $y;
        echo $z;
    }
    hitung(50,30);

    echo '<br>';

    // fungsi dengan return (mengembalikan nilai)
    function tambah($a, $b){
        $c = $a + $b;
        return $c;
    }
    echo tambah(50,30);

    echo '<hr>';

    // buat fungsi hitung umur
    function hitungUmur($thn_lahir){
        $thn_sekarang = 2024;
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    echo 'Umur Saya Sekarang ' . hitungUmur(2002) . ' Tahun.';
?>