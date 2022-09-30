<?php
$koneksi = mysqli_connect("localhost", "root", "", "tugas4");
$sql = "SELECT nrp, nama_mhs, nama_fakultas, alamat
FROM tbl_mhs  m, tbl_fakultas f
WHERE m.id_fakultas = f.id_fakultas";

$hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>TEKNIK INFORMATIKA </h2>
    <p>Ajeng Gusti Putri Cempaka Sari/210411100010 (output 6)</p>
    <form action="form_mhs.php">
    <button type="tambah" class = "btn btn-primary">Tambah</button>         
    </form>
    <table class="table table-striped">
    <thead>
        <tr>
        <th>NIM</th>
        <th>Nama MHS</th>
        <th>prodi</th>
        <th>alamat</th>
        </tr>
    </thead>

    <?php
    while($baris = mysqli_fetch_assoc($hasil)){
    ?>

    <tbody>
        <tr>
            <td><?php echo $baris ['nrp']; ?></td>
            <td><?php echo $baris ['nama_mhs']; ?></td>
            <td><?php echo $baris ['nama_fakultas']; ?></td>
            <td><?php echo $baris ['alamat']; ?></td>
            <td><button type="button" class="btn btn-danger">edit</button></td>
            <td><button type="button" class= "btn btn-warning">delete</button></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>

</body>
</html>
