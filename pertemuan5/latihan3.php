<?php 
// array multi dimensi

$mahasiswa = [["Hafizh", "5230411296", "Informatika"], ["Riri", "5230411222", "Informatika"], ["Ciko", "5230411296", "Informatika"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>Nama : <?= $mhs[0]?></li>
            <li>NPM : <?= $mhs[1]?></li>
            <li>Prodi : <?= $mhs[2]?></li>
        </ul>
    <?php endforeach?>
</body>
</html>