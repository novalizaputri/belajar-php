<?php
    $nama = "Yoshi";
    echo $nama . "<br>";

    $nama_array = array("Dava","Tegep","Ferdinand", "Satrio", "Andi");
    print_r($nama_array); echo "<br>";

    echo $nama_array[0] . "<br>";
    echo $nama_array[1] . "<br>";
    echo $nama_array[2];
    echo"<hr>";
    // Versi Foreach
    foreach ($nama_array AS $namalengkap) {
        echo $namalengkap . "<br>";
    }
    //versi for
    for ($i=0; $i < 5; $i++) {
        echo $nama_array[$i] . "<br>";
    }


    //multiple Array
    $kelas11RPL2 = array (
        array("satrio", "subang", "mancing"),
        array("tegep", "bandung", array("basket", "bola")),
        array("Dian", "Jakarta", array("berenang", array("laut", "sungai"))),
        array("salsa", array("surabaya", "Jepang")),
    );
    echo "<pre>";
    print_r($kelas11RPL2);
    echo "</pre>";

    echo "<hr>"
    echo $kelas11RPL2[0][0] . "<br>"
    echo $kelas11RPL2[1][0] . "<br>"
    echo $kelas11RPL2[0][2] . "<br>"
    echo $kelas11RPL2[2][1] . "<br>"
    echo $kelas11Rpl2[1][2] . "<br>"
    echo $kelas11RPL2[2][3] . "<br>"