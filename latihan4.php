<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="latihan4.php" method="post">
        <div>
            <label for="">Nama: </label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="">Password: </label>
            <input type="password" name="pass" id="email">
        </div>
        <div>
            <label for="">Email: </label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="">Tanggal Lahir: </label>
            <input type="date" name="tgl" id="tgl">
        </div>
        <div>
            <label for="">Jenis Kelamin: </label>
            <input type="radio" name="jk" id="jk" value="laki-laki">Laki - Laki
            <input type="radio" name="jk" id="jk" value="perempuan">Perempuan
        </div>
        <div>
            <input type="submit" name="submit" value="simpan">
            <input type="reset" name="reset" value="batal">
        </div>
    </form>
    <hr>
</body>
</html>

<?php 
    error_reporting(0);
    echo 'Nama: ' . $_POST['nama'] . '<br>';
    echo 'Password: ' . $_POST['pass'] . '<br>';
    echo 'Email: ' . $_POST['email'] . '<br>';
    echo 'Tanggal Lahir: ' . $_POST['tgl'] . '<br>';
    echo 'Jenis Kelamin: ' . $_POST['jk'] . '<br>';
?>