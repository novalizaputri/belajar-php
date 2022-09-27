<h1>Transaksi KWU</h1>
<form action="kwu-tambah.php" method="POST">
      <label for="kodebarang">kode barang :</label><br>
      <input type="number" name="kodebarang" placeholder="Ex. 12003102" /><br>

      <label for="tanggal">tanggal :</label><br>
      <input type="date" name="tanggal" placeholder="Ex. 12-09-2000" /><br>

      <label for="pembeli">pembeli :</label><br>
      <input type="text" name="pembeli" /><br>

      <label for="namabarang">nama barang :</label><br>
      <input type="text" name="namabarang" placeholder="Ex. mie goreng" /><br>

      <label for="qty">jumlahbarang:</label><br>
      <input type="number" name="qty" placeholder="Ex. 2" /><br>

      <label for="hargabeli">harga beli :</label><br>
      <input type="number" name="hargabeli" placeholder="Ex. 2.500" /><br>

      <label for="hargajual">harga jual :</label><br>
      <input type="number" name="hargajual" placeholder="Ex.3.000" /><br>
      <br>
      <input type="submit" name="simpan" value="Simpan Data" />
      <a href="kwu.php">Kembali</a>
</form>

<?php
      if( isset($_POST["simpan"]) ){
            $kodebarang = $_POST["kodebarang"];
            $tanggal = $_POST["tanggal"];
            $pembeli = $_POST["pembeli"];
            $namabarang = $_POST["namabarang"];
            $qty = $_POST["qty"];
            $hargabeli = $_POST["hargabeli"];
            $hargajual = $_POST["hargajual"];

            // CREATE - Menambahkan Data ke Database
            $query = "
                  INSERT INTO transaksi VALUES
                  ('$kodebarang', '$tanggal', '$pembeli', '$namabarang','$qty','$hargabeli','$hargajual');
            ";

            include ('./kwu-config.php');
            $insert = mysqli_query($mysqli, $query);

            echo $kodebarang;

            if ($insert){
                  echo "
                        <script>
                              alert('Data berhasil ditambahkan');
                              window.location='kwu.php';
                        </script>
                  ";
            }

      }
?>