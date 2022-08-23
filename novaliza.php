<?php
echo "
<marquee>
 <h1>Novaliza Putri - SMKN 1 Subang</h1>
</marquee>
";

//Variable
$nama = "Novaliza";
$kelas = "XI RPL 2";
$nilai = 99.99;

echo "nama : " . $nama;
echo "<br>"; 
echo "kelas :" . $kelas;
echo "<br>";
echo "nilai : $nilai";
    //Operator jumlah
    echo"<br><br>";
    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "<br>";
    echo "hasil dari penjumlahan : $hasil";
    //Rumus Luas Segitiga
    echo "<br><br>";
    $alas = 8;
    $tinggi = 20;
    $rumus = 0.5 * $alas * $tinggi;

    echo  "Hasil rumus : $rumus";
    //Rumus Lingkaran
    echo "<br><br>";
    $phi = 3.14;
    $r = 7;
    // luas ling : phi x r x r 
    $Lingkaran = $phi*($r*$r);

    echo "Hasil Luas Lingkaran : $Lingkaran";

    //rumus volume balok
    echo "<br><br>";
    // v = p x l x t;
    // p = 10, l = 5, t = 10;
    $p = 10;
    $l = 5;
    $t = 10;

    $luas = $p * $l *$t;

    echo "Hasil volume balok : $luas";
            
?>