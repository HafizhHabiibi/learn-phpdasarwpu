<?php 
    function salam($waktu = "Datang", $nama = "Admin") { // Jika user tidak memberikan parameter maka otomatis akan memunculkan Datang dan Admin
        return "Selamat $waktu, $nama!";
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <!-- ?= artinya sama dengan php echo -->
    <h1><?= salam("Pagi", "Riri") ?></h1> 
</body>
</html>