<?php
      if ( isset($_GET["kodebarang"]) ){
            $kodebarang = $_GET["kodebarang"];
            $check_kodebarang = "SELECT * FROM transaksi WHERE kodebarang = '$kodebarang'; ";
            include('./kwu-config.php');
            $query = mysqli_query($mysqli, $check_kodebarang);
            $row = mysqli_fetch_array($query);
      }
?>
<h1>transaksi kwu</h1>
<form action="kwu-edit.php" method="POST">
      <label for="kodebarang">kode barang :</label><br>
      <input value="<?php echo $row["kodebarang"]; ?>" type="number" name="kodebarang" placeholder="Ex. 12003102" readonly/><br>

      <label for="tanggal">tanggal :</label><br>
      <input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" placeholder="Ex.11-09-2022" /><br>

      <label for="pembeli">pembeli :</label><br>
      <input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" /><br>

      <label for="namabarang">namabarang :</label><br>
      <input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholder="Ex. mie goreng" /><br>

      <label for="qty">jumlahbarang :</label><br>
      <input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholder="Ex. 2" /><br>

      <label for="hargabeli">hargabeli :</label><br>
      <input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli" placeholder="Ex. 2.500" /><br>

      <label for="hargajual">hargajual :</label><br>
      <input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual" placeholder="Ex. 3.000" /><br>
      <br>
      <input type="submit" name="edit" value="Edit Data" />
      <a href="kwu.php">Kembali</a>
</form>

<?php
      if ( isset($_POST["edit"]) ) {
            $kodebarang = $_POST["kodebarang"];
            $tanggal = $_POST["tanggal"];
            $pembeli = $_POST["pembeli"];
            $namabarang = $_POST["namabarang"];
            $qty = $_POST["qty"];
            $hargabeli = $_POST["hargabeli"];
            $hargajual = $_POST["hargajual"];

            // EDIT - Memperbaharui Data
            $query = "
                  UPDATE transaksi SET tanggal = '$tanggal', 
                  pembeli = '$pembeli',
                  namabarang = '$namabarang',
                  qty = '$qty',
                  hargabeli = '$hargabeli',
                  hargajual = '$hargajual'
                  WHERE kodebarang = '$kodebarang';
            ";
            
            include ('./kwu-config.php');
            $update = mysqli_query($mysqli, $query);

            if($update){
                  echo "
                        <script>
                        alert('Data berhasil diperbaharui');
                        window.location='kwu.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='kwu-edit.php?kodebarang=$kodebarang';
                        </script>
                  ";
            }
      }
?>