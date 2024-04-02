<?php
    // sertakan file classnya
    require_once 'Siswa.php';

    // ciptakan object
    $ns1 = new Siswa('Jamal', 40, 'PHP');
    $ns2 = new Siswa('Dono', 90, 'UIUX');
    $ns3 = new Siswa('Tina', 70, 'LARAVEL');

    $ar_siswa = [$ns1, $ns2, $ns3];

    // cetak
    $no = 1;
    foreach ($ar_siswa as $siswa) {
        echo $no++ . '. ';
        echo $siswa->nama . '&nbsp';
        echo $siswa->nilai . '&nbsp';
        echo $siswa->pelajaran . '&nbsp';
        echo $siswa->getHasil() . '&nbsp';
        echo '<br>';
    }

    echo '<hr>';

    // ciptakan object
    // $ns1 = new Siswa();
    // $ns1->nama = "Jamal";
    // $ns1->nilai = 90;
    // $ns1->pelajaran = "PHP";

    // cetak
    // echo $ns1->nama;
    // echo $ns1->nilai;
    // echo $ns1->pelajaran;
    // echo $ns1->getHasil();
?>

<h2 align="center">Daftar Nilai Siswa</h2>
<table border="1" width="50%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pelajaran</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($ar_siswa as $siswa) {
                echo '<tr>';
                    echo '<td>' . $no++ . '. </td>';
                    echo '<td>' . $siswa->nama . '</td>';
                    echo '<td>' . $siswa->nilai . '</td>';
                    echo '<td>' . $siswa->pelajaran . '</td>';
                    echo '<td>' . $siswa->getHasil() . '</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>