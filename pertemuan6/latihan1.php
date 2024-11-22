<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            background-color: pink;
            line-height: 40px;
            margin: 3px;
            text-align: center;
            transition: 1s;
            float: left;
        }

        .kotak:hover {
            transform: rotate(360 deg);
            border-radius: 50%;
            background-color: violet;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka = [[1,2,3],[4,5,6],[7,8,9]]
?>

<?php foreach($angka as $a) :?>
    <?php foreach($a as $b) :?>
        <div class="kotak"><?= $b?></div>
    <?php endforeach?>
    <div class="clear"></div>
<?php endforeach?>

</body>
</html>

