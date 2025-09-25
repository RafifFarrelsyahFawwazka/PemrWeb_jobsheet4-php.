<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahSiswa = count($nilaiSiswa);

// urutkan nilai (Bubble Sort)
for ($i = 0; $i < $jumlahSiswa - 1; $i++) {
    for ($j = 0; $j < $jumlahSiswa - $i - 1; $j++) {
        if ($nilaiSiswa[$j] > $nilaiSiswa[$j + 1]) {
            $temp = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $nilaiSiswa[$j + 1];
            $nilaiSiswa[$j + 1] = $temp;
        }
    }
}

// hitung total nilai tanpa 2 tertinggi dan terrendah
$totalNilai = 0;
for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

// rata-rata
$rataRata = $totalNilai / ($jumlahSiswa - 4);

// print
echo "Daftar nilai setelah diurutkan: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai (tanpa 2 tertinggi & 2 terendah): $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";
?>