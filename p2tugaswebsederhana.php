<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web sederhana</title>
    <style type="text/css">
        .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid blue;
        }
        .row {
            display: flex;
            justify-content: ;
        }
        .box {
            width: 23.5%;
            padding: 10px;
            border: 1px solid #000;
            text-align: center;
            font-size: 30px; /*Sesuaikan ukuran font dengan lebar dan tinggi kotak*/
            Line-height: 1; /*Menghilangkan ruang diatas dan bawah teks*/
            margin: 3px;
        }
    </style>
</head>
<body>
    <?php

    $a = "A";
    $b = "B";
    $c = "C";

    ?>
    <div class= "container">
        <div class= "row">
            <div class= "box"><?php echo $a ?></div>
        </div>
        <div class= "row">
            <div class= "box"><?php echo $a ?></div>
            <div class= "box"><?php echo $b ?></div>
        </div>
        <div class= "row">
            <div class= "box"><?php echo $a ?></div>
            <div class= "box"><?php echo $b ?></div>
            <div class= "box"><?php echo $c ?></div>
        </div>
    </div>
</body>
</html>