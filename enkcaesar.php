<?php 
    $kalimat = $_GET["kata"];
    $key = $_GET["key"];
    for ($i=0; $i<strlen($kalimat); $i++)
    {
        $kode[$i]=ord($kalimat[$i]); //Rubah ASCII ke desimal
        $b[$i]=($kode[$i]+$key) % 256; // Proses enkripsi
        $c[$i]=chr($b[$i]); //Rubah decimal ke ASCII
    }
    echo "Kalimat Asli : ";
    for($i=0; $i<strlen($kalimat); $i++)
    {
        echo $kalimat[$i];
    }
    echo "<br>";
    echo "Hasil enkripsi: ";
    $hasil = '';
    for($i=0; $i<strlen($kalimat); $i++)
    {
        echo $c[$i];
        $hasil = $hasil . $c[$i];
    }
    echo "<br>";
    //Menyimpan data di file
    $fp = fopen ("enkripsi.txt","w");
    fputs ($fp,$hasil);
    fclose($fp);
?>