<?php 
$koneksi = new mysqli('localhost', 'root', '', 'vaksinhabibi') or die (mysqli_error($koneksi));

if (isset($_POST['simpan'])){
    $idpasien = $_POST['idpasien'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $keterangan = $_POST['keterangan'];
    $koneksi->query("INSERT INTO datapasien (idpasien, nama, jk, alamat, keterangan) VALUES ('$idpasien', '$nama', '$jk', '$alamat', '$keterangan')");
    header('location:pasien.php');
}

if (isset($_GET['idpasien'])){
    $idpasien = $_GET['idpasien'];
    $koneksi->query("DELETE FROM datapasien where idpasien = '$idpasien'");
    header("location:pasien.php");
}
if(isset($_POST['edit'])){
    $idpasien = $_POST['idpasien'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST ['alamat'];
    $keterangan = $_POST ['keterangan'];
    $koneksi->query ("UPDATE datapasien SET idpasien='$idpasien', nama='$nama', jk='$jk', alamat='$alamat', keterangan= '$keterangan' where idpasien='$idpasien'");
    header("location:pasien.php");
}

