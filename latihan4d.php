<?php
// Multidimensional array for ASEAN countries
$asean_countries = [
    "Indonesia" => [
        "Ibukota" => "D.K.I. Jakarta",
        "Kode Telepon" => "+62"
    ],
    "Singapura" => [
        "Ibukota" => "Singapura",
        "Kode Telepon" => "+65"
    ],
    "Malaysia" => [
        "Ibukota" => "Kuala Lumpur",
        "Kode Telepon" => "+60"
    ],
    "Brunei" => [
        "Ibukota" => "Bandar Seri Begawan",
        "Kode Telepon" => "+673"
    ],
    "Thailand" => [
        "Ibukota" => "Bangkok",
        "Kode Telepon" => "+66"
    ],
    "Laos" => [
        "Ibukota" => "Vientiane",
        "Kode Telepon" => "+856"
    ],
    "Filipina" => [
        "Ibukota" => "Manila",
        "Kode Telepon" => "+63"
    ],
    "Myanmar" => [
        "Ibukota" => "Naypyidaw",
        "Kode Telepon" => "+95"
    ]
];

// Display the data in a table
echo "<h3>Daftar Negara ASEAN, Ibukota, dan Kode Telepon :</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

foreach ($asean_countries as $country => $info) {
    echo "<tr>";
    echo "<td>$country</td>";
    echo "<td>{$info['Ibukota']}</td>";
    echo "<td>{$info['Kode Telepon']}</td>";
    echo "</tr>";
}

echo"</table>";
?>