<?php

    $mahasiswa = ['iqbal', 'restu', 'malik'];

    // echo $mahasiswa[0];
    // echo "<br/>";
    // echo $mahasiswa[2];
    // var_dump($mahasiswa)
    // perulangan
    // foreach($mahasiswa as $MHS){
    //     echo $MHS;
    //     echo "<br/>";
    // }

    //ARRAY MULTI DIMENSION
    $mahasiswa = [
        ["nama" => "iqbal", "NIM" => "0110121276", "uts" => 100, "uas" => 100],
    ];

    echo $mahasiswa[0]["nama"];
    foreach ($mahasiswa as $MHS) {
        echo $MHS["nama"];
    }
?>