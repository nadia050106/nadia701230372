<?php
// Define an associative array for Budaya Daerah di Indonesia
$budaya = [
    [
        "Nama" => "Wayang Kulit",
        "Asal" => "Jawa Tengah",
        "Deskripsi" => "Wayang kulit adalah seni pertunjukan asli Indonesia yang sangat populer di Jawa Tengah.",
        "Tahun Asal" => "Abad ke-10",
        "Gambar" => "<img src='wayang.jpg' width='100'>"
    ],
    [
        "Nama" => "Tari Saman",
        "Asal" => "Aceh",
        "Deskripsi" => "Tari Saman adalah tarian tradisional yang berasal dari Aceh dan sering dipertunjukkan dalam acara-acara adat.",
        "Tahun Asal" => "Abad ke-14",
        "Gambar" => "<img src='tarisaman.jpg' width='100'>"
    ],
    // Add more entries as needed to reach at least 10
];

echo "<table border='1'>
<tr>
    <th>Nama</th>
    <th>Asal</th>
    <th>Deskripsi</th>
    <th>Tahun Asal</th>
    <th>Gambar</th>
</tr>";

foreach ($budaya as $item) {
    echo "<tr>
        <td>{$item['Nama']}</td>
        <td>{$item['Asal']}</td>
        <td>{$item['Deskripsi']}</td>
        <td>{$item['Tahun Asal']}</td>
        <td>{$item['Gambar']}</td>
    </tr>";
}

echo "</table>";
?>