<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramida Angka</title>
    <style>
        .box {
            width: 30px;
            height: 30px;
            display: inline-block;
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
            line-height: 30px;
            margin: 2px;
        }
        .container {
            margin-left: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Loop untuk membuat baris
            for ($i = 1; $i <= 5; $i++) {
                // Loop untuk membuat kolom pada setiap baris
                for ($j = 1; $j <= $i; $j++) {
                    echo "<div class='box'>$j</div>";
                }
                // Memulai baris baru
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>