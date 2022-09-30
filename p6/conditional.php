<?php
$koneksi = mysqli_connect("localhost", "root","","tugas4");

$sql = "SELECT *FROM tbl_mhs";
$hasil = mysqli_query($koneksi, $sql);

while ($baris = mysqli_fetch_assoc($hasil)){
    echo "nama : ". $baris["nama_mhs"]." | alamat : ". $baris["alamat"] .  "<br>";
}
?>