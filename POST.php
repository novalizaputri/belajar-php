<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Satrio" /><br>
    <input type="text" name="kelas" placeholder="Ex. 11 rpl 2" /><br>
    <input type="number" name="NIS" placeholder="Ex. 12100694" /><br>
    <input type="submit" name="simpan" value="simpan data"/>
</form>

<?php
if ( isset($_POST ["simpan"])){
    echo "<hr>";
    $nama =$_POST["namalengkap"];
    $kelas =$_POST["kelas"];
    $number =$_POST["NIS"];

    echo "nama Lengkap : $nama <br>";
    echo "kelasnya : $kelas <br>";
    echo "number : $number <br>";
}
?>