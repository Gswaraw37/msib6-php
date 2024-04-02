<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form - Kalkulator</title>
</head>
<body>
    <form action="#" method="GET">
        <table align="center" border="1" cellpadding="10" cellspacing="0" width="30%">
            <thead>
                <tr bgcolor="cyan">
                    <th colspan="2">Kalkulator</th>
                </tr>
            </thead>
            <tbody>
                <tr bgcolor="snow">
                    <td width="30%">
                        <label for="a1">Angka 1</label></td>
                    <td>
                        <input type="text" name="a1" id="a1">
                    </td>
                </tr>
                <tr bgcolor="snow">
                    <td width="30%">
                        <label for="a2">Angka 2</label></td>
                    <td>
                        <input type="text" name="a2" id="a2">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="cyan">
                    <th colspan="2">
                        <button type="submit" name="proses" value="Tambah">+</button>
                        <button type="submit" name="proses" value="Kurang">-</button>
                        <button type="submit" name="proses" value="Kali">x</button>
                        <button type="submit" name="proses" value="Bagi">/</button>
                        <button type="submit" name="proses" value="Pangkat">^</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>

<?php
    // buat fungsi
    function hitung($a1,$a2,$tombol){
        if($tombol == 'Tambah'){ 
            $hasil = $a1 + $a2;
        } elseif($tombol == 'Kurang'){ 
            $hasil = $a1 - $a2;
        } elseif($tombol == 'Kali'){ 
            $hasil = $a1 * $a2;
        } elseif($tombol == 'Bagi'){ 
            $hasil = $a1 / $a2;
        } elseif($tombol == 'Pangkat'){ 
            $hasil = pow($a1,$a2);
        } else{ 
            $hasil = 0;
        }
        return $hasil;
    }

    // tangkap request form
    $a1 = $_GET['a1'];
    $a2 = $_GET['a2'];
    $tombol = $_GET['proses'];
    $hasil = hitung($a1,$a2,$tombol);

    // cetak dari pemanggilan fungsi
    if (isset($tombol)) {
        echo "<center><h3>Hasil Bilangan: $a1 $tombol $a2 adalah $hasil</h3></center>";
    }
?>