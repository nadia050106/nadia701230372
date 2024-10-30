<?php
// Membuat associative array negara ASEAN dan ibukotanya
$negara_asean = array(
    "Indonesia" => "D.K.I Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);

// Menampilkan judul
echo "<h2>Daftar Negara ASEAN dan Ibukota :</h2>";

// Menampilkan daftar menggunakan foreach dalam format list
echo "<ul>";
foreach($negara_asean as $negara => $ibukota) {
    echo "<li>$negara : $ibukota</li>";
}
echo "</ul>";
?>