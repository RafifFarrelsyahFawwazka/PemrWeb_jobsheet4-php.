<?php
$daftarSiswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

// total nilai
$total = 0;
$jumlah = count($daftarSiswa);

for ($i = 0; $i < $jumlah; $i++) {
    $total += $daftarSiswa[$i][1];
}

// rata2
$rataRata = $total / $jumlah;

echo "Daftar Nilai Siswa: <br>";
for ($i = 0; $i < $jumlah; $i++) {
    echo $daftarSiswa[$i][0] . " - " . $daftarSiswa[$i][1] . "<br>";
}

echo "<br>Rata-rata kelas: $rataRata<br><br>";

// nilai di atas rata2
echo "Siswa dengan nilai di atas rata-rata:<br>";
for ($i = 0; $i < $jumlah; $i++) {
    if ($daftarSiswa[$i][1] > $rataRata) {
        echo $daftarSiswa[$i][0] . " - " . $daftarSiswa[$i][1] . "<br>";
    }
}
?>
