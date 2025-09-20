<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
echo "Daftar nilai awal siswa: ";
foreach ($nilaiSiswa as $nilai) {
    echo $nilai." ";
}
echo "<br>";

sort($nilaiSiswa);
echo "Nilai setelah diurutkan: ";
foreach ($nilaiSiswa as $nilai) {
    echo $nilai." ";
}
echo "<br>";

array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

echo "Nilai yang digunakan untuk perhitungan: ";
$total_nilai = 0;
foreach ($nilaiSiswa as $nilai) {
    echo $nilai." ";
    $total_nilai += $nilai;
}
echo "<br>";

$jumlah_siswa = count($nilaiSiswa);
$rata_rata = $total_nilai / $jumlah_siswa;

echo "Total nilai yang dihitung: $total_nilai <br>";
echo "Jumlah siswa yang dihitung: $jumlah_siswa <br>";
echo "Rata-rata nilai siswa: " . number_format($rata_rata, 2) . "<br>";
?>
