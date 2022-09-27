<form action="" method="POST">
    <h1> Hitung Luas Belah Ketupat </h1>
    <p>Luas:</p>
</form>

<?php
$nilaiA = $_POST['sisiA'];
$nilaiB = $_POST['sisiB'];
function add($nilaiA, $nilaiB) {
$luas = ($nilaiA*$nilaiB)/2;
return $luas;
}
echo "<strong><U> Dengan Diagonal 1 : $nilaiA, </u></strong><br><br>";
echo "<strong><U> Dan Diagonal 2 : $nilaiB, maka:</strong></u><br><br>";
echo "Luas Belah Ketupat adalah : <br>";
$luas = add($nilaiA, $nilaiB);
Printf("Luas : (%d * %d) / 2 = " ,$nilaiA, $nilaiB);
echo (double) $luas;
?></td>
<tr><td height="43" colspan="4" align="center"><input type="submit" value="Home" /></td></tr>
</table></form>
</body>
</html>