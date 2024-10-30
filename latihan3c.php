<?php
function pangkat($angka, $pangkat) {
    $hasil = 1;
    for ($i = 0; $i < $pangkat; $i++) {
        $hasil *= $angka;
    }
    return $hasil;
}

$angka = 5;
$pangkat = 4;
echo $angka . " pangkat " . $pangkat . " = " . pangkat($angka, $pangkat);
?>