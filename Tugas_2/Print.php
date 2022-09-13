<?php

    $nama = $_GET['name'];
    $jkel = $_GET['gender'];
    $agama = $_GET['religion'];
    $alamat = $_GET['address'];
    $tglahir = $_GET['bday'];
    $cita2 = $_GET['ambition'];
    $umur = $_GET['age'];
    $asekolah = $_GET['school'];

    echo "Nama              : " . $nama;
    echo "<br/>";
    echo "Jenis Kelamin     : " . $jkel;
    echo "<br/>";
    echo "Agama             : " . $agama;
    echo "<br/>";
    echo "Alamat            : " . $alamat;
    echo "<br/>";
    echo "Tanggal Lahir     : " . $tglahir;
    echo "<br/>";
    echo "Hobi              : " ;

    if(!empty($_GET['hobby'])) {
        foreach($_GET['hobby'] as $selected) {
            echo "$selected \t";
        }
    }
    else {
        echo "-";
    }
    
    echo "<br/>";
    echo "Cita-Cita         : " . $cita2;
    echo "<br/>";
    echo "Umur              : " . $umur;
    echo "<br/>";
    echo "Asal Sekolah      : " . $asekolah;

?>