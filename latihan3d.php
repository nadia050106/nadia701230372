<?php
function faktorial($a) {
    if ($a == 1) {
        return 1;
    } else {
        return $a * faktorial($a - 1); // Menggunakan rekursi untuk menghitung faktorial
    }
}

$angka = 5;
echo "Faktorial dari $angka = " . faktorial($angka);
?>