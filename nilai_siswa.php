<?php

// buat if else
$nilai = 50;

if ($nilai >= 85 && $nilai <= 100){
    echo "Nilai Anda : A";
}elseif ($nilai >= 70 && $nilai <= 84){
    echo "Nilai Anda : B";
}elseif ($nilai >= 56 && $nilai <= 69){
    echo "Nilai Anda : C";
}elseif ($nilai >= 36 && $nilai <= 55){
    echo "Nilai Anda : D";
}elseif ($nilai >= 0 && $nilai <= 35){
    echo "Nilai Anda : E";
}else {
    echo "Nilai Anda : I";
}


switch ($nilai) {
    case $nilai >= 85 && $nilai <= 100:
        echo "sangat memuaskan";
        break;
    case $nilai >= 85 && $nilai <= 100:
        echo "sangat memuaskan";
        break;
    case $nilai >= 85 && $nilai <= 100:
        echo "sangat memuaskan";
        break;
    case $nilai >= 85 && $nilai <= 100:
        echo "sangat memuaskan";
        break;
    
    default:
        # code...
        break;
}









?>