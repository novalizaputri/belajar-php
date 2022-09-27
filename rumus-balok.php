<form action="" method="POST">
    <h1> Hitung Volume dan Luas Balok </h1>
    <p>Sisi :</p>
    <input type="number" name="Sisi" placeholder="Ex. 5" /><br>
    <br>
    <input type="submit" name="proses" value="Hitung Volume & Luas" />
</form>

<?php 
    if (isset($_POST["proses"])){
        echo "<hr>"; 
        $sisi = $_POST["Sisi"];
        $volume = $sisi * $sisi * $sisi;
        $luas = 6 * $sisi * $sisi;

        echo "Sisi : $sisi<br>";
        echo "Volume : $volume <br>";
        echo "Luas : $luas <br>";
    }
?>