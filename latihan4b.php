<?php
// Array awal dengan 5 negara ASEAN
$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

// Menampilkan daftar awal
echo "<h2>Daftar Negara ASEAN awal :</h2>";
echo "<ul>";
foreach($negara_asean as $negara) {
    echo "<li>" . $negara . "</li>";
}
echo "</ul>";

// Menambahkan 3 negara baru
array_push($negara_asean, "Laos", "Filipina", "Myanmar");

// Menampilkan daftar yang sudah diperbarui
echo "<h2>Daftar Negara ASEAN baru :</h2>";
echo "<ul>";
foreach($negara_asean as $negara) {
    echo "<li>" . $negara . "</li>";
}
echo "</ul>";
?>