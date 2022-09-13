<?php
    $nilai = 75;
    $predikat;

    if($nilai > 90){
        $predikat = "A+";
    }
    else if($nilai > 80){
        $predikat = "A";
    }
    else if($nilai > 70){
        $predikat = "B+";
    }
    else if($nilai > 60){
        $predikat = "B";
    }
    else if($nilai > 50){
        $predikat = "C+";
    }
    else if($nilai > 40){
        $predikat = "C";
    }
    else if($nilai > 30){
        $predikat = "D";
    }
    else if($nilai <= 30){
        $predikat = "E";
    }

    echo "Nilai ".$nilai. " Predikat ".$predikat;
?>