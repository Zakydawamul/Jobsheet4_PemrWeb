<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $a + $b = $hasilTambah <br>";
echo "Hasil Pengurangan: $a - $b = $hasilKurang <br>";
echo "Hasil Perkalian: $a * $b = $hasilKali <br>";
echo "Hasil Pembagian: $a / $b = $hasilBagi <br>";
echo "Hasil Sisa Bagi: $a % $b = $sisaBagi <br>";
echo "Hasil Pangkat: $a ** $b = $pangkat <br>";
echo "<br>";

$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "Hasil Sama Dengan: $a == $b = " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Sama Dengan: $a != $b = " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil: $a < $b = " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar: $a > $b = " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil Sama Dengan: $a <= $b = " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar Sama Dengan: $a >= $b = " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: $a && $b = " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR: $a || $b = " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A: !$a = " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B: !$b = " . ($hasilNotB ? 'true' : 'false') . "<br>";
echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Nilai a setelah penambahan (a += b): $a <br>";
echo "Nilai a setelah pengurangan (a -= b): $a <br>";
echo "Nilai a setelah perkalian (a *= b): $a <br>";
echo "Nilai a setelah pembagian (a /= b): $a <br>";
echo "Nilai a setelah sisa bagi (a %= b): $a <br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: $a === $b = " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Identik: $a !== $b = " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
echo "<br>";
?>