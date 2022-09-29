<?php
include('./input-config.php');
if($_SESSION["login"] != TRUE){
      header('location:login.php');
}

if($_SESSION["role"]!= "admin"){
    echo"
    <script>
        alert('akses tidak diberikan,kamu bukan admin');
        window.location='input-datadiri.php';
    </script>
    ";
}

if(isset($_GET["nis"]) && $_SESSION["role"]=="admin"){
    $nis = $_GET["nis"];
    $query = "DELETE FROM datadiri WHERE nis = '$nis'";
   
   
    $delete = mysqli_query($mysqli, $query);
   
    if($delete){
        echo "
        <script>
        alert('Data Berhasil Dihapus');
        window.location='input-datadiri.php';
        </script>
        
        ";
        } else{
        echo "
        <script>
        alert('Data Gagal Dihapus');
        window.location='input-datadiri-edit.php';
        </script>
        
        ";
        }
    }




?>