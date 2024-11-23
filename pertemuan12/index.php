<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// Ketika tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<!-- Fitur Pencarian -->
<form action="" method="post">
<input type="text" name="keyword" size="40" autofocus placeholder="Inputkan data pencarian..." autocomplete="off">
<button type="submit" name="cari" >Cari!</button>
</form>

<br>

<table border="1" cellpadding="10" cellspacing="0">

    
    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row): ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin menghapus?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>

</table>

</body>
</html>