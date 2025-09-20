<?php
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.2 * $hargaProduk;
}

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "Harga Produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
?>
