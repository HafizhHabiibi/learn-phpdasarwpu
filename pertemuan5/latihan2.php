<?php 

$angka = [1, 3, 22, 13, 20, 25, 100, 110, 52, 68];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear: both;}
    </style>
</head>
<body>
<!-- Cara Lama -->
<?php for($i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]?></div>
<?php }?>

<div class="clear"></div>

<!-- Metode Template -->
<?php foreach($angka as $a) :?>
    <div class="kotak"><?= $a ?></div>
<?php endforeach?>

</body>
</html>