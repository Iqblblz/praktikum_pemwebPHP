<?php
    $_Nama = $_GET ['Nama'];
    $_Matkul = $_GET ['Matkul'];
    $_NilaiUTS = $_GET ['NilaiUTS'];
    $_NilaiUAS = $_GET ['NilaiUAS'];
    $_TUGASPRAKTIKUM = $_GET ['TUGASPRAKTIKUM'];
    ?>

    <h1>Data Nilai</h1>
    Nama = <?php echo $_Nama?>
    <br/>Matkul = <?=$_Matkul?>
    <br/>NilaiUTS = <?=$_NilaiUTS?>
    <br/>NilaiUAS = <?=$_NilaiUAS?>
    <br/>Nilai Tugas/Praktikum = <?=$_TUGASPRAKTIKUM?>