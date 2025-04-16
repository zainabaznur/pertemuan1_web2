<?php 
    // Cara mencetak suatu nilai
    echo "hello word!<br>";
    $namaDepan = "Zainab";
    $namaBelakang = "Aznur";
    echo $namaDepan . " ". $namaBelakang;
    echo "$namaDepan $namaBelakang";
    echo "<br> ini uji coba!";
    $namaDepan .= " ahmad";
    echo $namaDepan;
    echo "<br>";
    define("PHI", 3.14);
    // echo PHI;
    $jari = 10;
    $luas = PHI * $jari ** 2;

    echo "luas lingkaran adalah $luas";
?>