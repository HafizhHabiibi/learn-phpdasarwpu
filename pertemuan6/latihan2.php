<?php 
// Assosiative Array

$mahasiswa = [
    ["nama" => "Ciko", "npm" => "5230411999", "prodi" => "Informatika", "gambar" => "ciko.jpg"],
    ["nama" => "Ciki", "npm" => "5230411998", "prodi" => "Informatika", "gambar" => "ciki.jpg"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswat</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) :?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>" >
            </li>
            <li>Nama : <?= $mhs["nama"]?></li>
            <li>NPM : <?= $mhs["npm"]?></li>
            <li>Prodi : <?= $mhs["prodi"]?></li>
        </ul>
    <?php endforeach?>
</body>
</html>