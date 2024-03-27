<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>FORM INPUT NILAI</h1>
<form action="latihan5.php" method="POST" abframeid="iframe.0.9000169463464569" abineguid="843C2D3769CE4924A4F875CF4FBD44FC">
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama:</label> 
    <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah:</label> 
    <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="">--- PILIHAN MATAKULIAH ---</option>
            <option value="html">HTML</option>
            <option value="uiux">UI/UX</option>
            <option value="php">PHP</option>
            <option value="laravel">Laravel</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai:</label> 
    <div class="col-8">
        <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-8">
        <button name="proses" type="submit" class="btn btn-primary">Submit</button>
        <button name="unproses" type="reset" class="btn btn-danger">Batal</button>
    </div>
</div>
</form>
<hr>

<!-- NAMA MAHASISWA: Budi Santoso => variabel
Mata Kuliah: PHP => variabel
Nilai: 80 => ini yang diinput
Keterangan: Lulus => Ternary
Grade: B => if/else
Predikat: Bagus => switch case
-->
<?php
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $proses = $_POST['proses'];

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

    if(isset($proses)){ // sebagai pencegah error handling
?>

<!-- cetak di dalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PHP</title>
</head>
<body>
    <h1>Nama Mahasiswa: <?= $nama ?></h1>
    <h2>Mata Kuliah: <?= $matkul ?></h2>
    <h2>Nilai: <?= $nilai ?></h2>
    <h2>Keterangan: <?= $ket ?></h2>
    <h2>Grade: <?= $grade ?></h2>
    <h2>Predikat: <?= $predikat ?></h2>
</body>
</html>
<?php } ?>