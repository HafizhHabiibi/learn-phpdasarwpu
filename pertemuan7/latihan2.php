<?php 
// cek apakah tidak ada data pada variabel superglobal $_GET

if (!isset($_GET["gambar"]) || !isset($_GET["nama"]) || !isset($_GET["npm"]) || !isset($_GET["prodi"])) {
        
        // redirect
        header("Location: latihan1.php");
        exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"] ?>" ></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["npm"] ?></li>
        <li><?= $_GET["prodi"] ?></li>
    </ul>

<a href="latihan1.php">Kembali Ke Menu</a>
</body>
</html>