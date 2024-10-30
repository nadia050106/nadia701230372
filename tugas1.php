<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendeteksi Kategori Bilangan</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Pendeteksi Kategori Bilangan</h1>
    
    <?php
    function isPrime($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    function getNumberCategory($num) {
        $categories = [];
        if ($num % 2 == 0) {
            $categories[] = "genap";
        } else {
            $categories[] = "ganjil";
        }
        if (isPrime($num)) {
            $categories[] = "prima";
        }
        return implode(" dan ", $categories);
    }

    echo "<table>";
    echo "<tr><th>Angka</th><th>Kategori</th></tr>";
    
    for ($i = 1; $i <= 20; $i++) {
        $category = getNumberCategory($i);
        echo "<tr><td>Angka $i</td><td>adalah bilangan $category</td></tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>