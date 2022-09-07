<form action="rumus-persegi.php" method="POST"
    <h1> Rumus luas dan keliling persegi </h1>
    <p>sisi :</p>
    <input type="number" name="sisi" Placeholder="Ex. 5" />
    <input type="submit" name="proses" value="hitung luas & keliling"
    />
</form>
<?php
if (isset ($_POST["proses"])){
    echo "<hr>";
    $sisi = $_POST["sisi"];
    $luas = $sisi * $sisi;
    $keliling = 4 * $sisi;
    
    echo"sisi : $sisi <br>";
    echo"luas Persegi : $luas <br>";
    echo"keliling Persegi : $keliling <br>";
}