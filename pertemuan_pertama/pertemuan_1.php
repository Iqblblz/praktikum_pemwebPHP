<?php
    // phpinfo();
    $nama = 'iqbal';
    $umur = 19;
    $berat = 59.1;
    
    echo 'nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
    echo "<br />";
    echo "<h1 style = 'color : red'>nama saya $nama, umur saya $umur, berat saya $berat</h1>";
    echo "<br />";

    // variabel sistem
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";

    // variabel konstan
    define('makanan', 'sushi');
    define('buah', 'jambu');

    // echo '<h1>'.jambu.'</h1>';
    echo makanan;

?>