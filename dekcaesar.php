<?php 
    $key = $_GET["key"];
    $nmfile = "enkripsi.txt";
    $fp = fopen($nmfile, "r"); //Buka hasil file deskripsi
    $isi = fread($fp, filesize($nmfile));

    for($i=0; $i<strlen($isi); $i++)
    {
        $kode[$i] = ord($isi[$isi]); // Rubah ASCII ke desimal
        $b[$i] = ($kode[$i] - $key) % 256; // Proses deskripsi caesar
        $c[$i] = chr($b[$i]); // Rubah desimal ke ASCII
    }
    echo "Kalimat ciphertext: ";
    for($i=0; $i<strlen($isi); $i++)
    {
        echo $isi[$i];
    }
    echo "<br>";
    echo "Hasil Deskripsi = ";
    for($i=0; $i<strlen($isi); $i++)
    {
        echo $c[$i];
    }
    echo "<br>";
?>