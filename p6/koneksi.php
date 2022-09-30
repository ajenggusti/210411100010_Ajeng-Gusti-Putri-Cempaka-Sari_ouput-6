<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "tugas4";

$koneksi = mysqli_connect($host, $user, $password,$db_name);
if(!$koneksi){
    echo "koneksi gagal";
}
?>