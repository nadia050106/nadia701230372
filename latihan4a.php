<?php
// Membuat array dengan 4 elemen warna
$warna = array("hijau", "kuning", "kelabu", "merah muda");

// Menampilkan teks sesuai format
echo "Balonku ada lima.\n";
echo "Rupa-rupa warna-nya\n";

// Menampilkan isi array dengan menambahkan kata "dan biru" di akhir
echo implode(", ", $warna) . ", dan biru\n";

// Menampilkan teks tambahan
echo "Meletus balon " . $warna[0] . " DOR!!!\n";
echo "Hatiku sangat kacau..";
?>