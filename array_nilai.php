<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$total = 0;
foreach ($daftarNilai as $nilai) {
    $total += $nilai['1'];
}
$rataRata = $total / count($daftarNilai);

echo "Rata-rata kelas: $rataRata <br>";
echo "Daftar siswa dengan nilai di atas rata-rata: <br>";

foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>