<?php 
// LATIHAN GET
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
    <title>Latihan GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach($mahasiswa as $mhs) :?>
        <li>
            <a href="latihan2.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&prodi=<?= $mhs["prodi"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach?>
</ul>
</body>
</html>