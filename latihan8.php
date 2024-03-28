<?php
    //looping FOR
    //Hitung pengulangan 1 s.d 10
    for ($i=1; $i <= 10; $i++) { // $i++ = $i=$i+1 | $i-- = $i=$i-1
        echo $i . '<br>';
    }

    echo '<hr>';

    //Hitung pengulangan 10 s.d 1
    for ($j=10; $j >= 1; $j--) { 
        echo $j . '<br>';
    }

    echo '<hr>';

    for ($i=1; $i <= 10; $i++) { // $i++ = $i=$i+1 | $i-- = $i=$i-1
        echo 'Saya Sedang Belajar PHP Cuy<br>';
    }

    echo '<hr>';

    //Looping While
    $i = 1;
    while($i <= 10){
        echo $i . '<br>';
        $i++;
    }

    echo '<hr>';

    $j = 10;
    while($j >= 1){
        echo $j . '<br>';
        $j--;
    }

    echo '<hr>';
?>

<form action="">
    Jumlah Siswa:
    <?php
        for ($i=1; $i <= 10; $i++) { // $i++ = $i=$i+1 | $i-- = $i=$i-1
            echo '<input type="radio" name="jk" id="jk" value="laki-laki">' . $i;
        }
    ?>
</form>