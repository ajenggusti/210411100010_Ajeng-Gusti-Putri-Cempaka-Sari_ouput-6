<?php
include "koneksi.php";
$nama = $_POST['nama_mhs'];
$ID_prodi = $_POST['nama_fakultas'];
$alamat = $_POST['alamat'];
$nim = $_POST['nrp'];


$sql = "INSERT INTO tbl_mhs VALUES ('$ID_prodi', '$nim', '$nama', '$alamat' )";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data mahasiswa gagal";
}else {
    echo "eksekusi tambah data mahasiswa berhasil";
    echo "<a href='data_mhs.php'>show data</a>";
}
?>