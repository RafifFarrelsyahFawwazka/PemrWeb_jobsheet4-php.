<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "Target jarak: $jarakTarget km<br><br>";

while ($jarakSaatIni < $jarakTarget) {
    $hari++;
    $jarakSaatIni += $peningkatanHarian;
    echo "Hari ke-$hari: Jarak yang ditempuh = $jarakSaatIni km<br>";
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer.";
echo "<br><br>";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $totalBuahLahan = $tanamanPerLahan * $buahPerTanaman;
    $jumlahBuah += $totalBuahLahan;
    echo "Lahan $i menghasilkan $totalBuahLahan buah<br>";
}

echo "<br>Total buah yang akan dipanen adalah: $jumlahBuah";
echo"<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $index => $skor) {
    $totalSkor += $skor;
    echo "Siswa " . ($index + 1) . ": $skor<br>";
}

echo "Total skor ujian adalah: $totalSkor";
echo"<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

$lulus = 0;
$tidakLulus = 0;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        $tidakLulus++;
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
    $lulus++;
}

echo "Jumlah siswa lulus: $lulus <br>";
echo "Jumlah siswa tidak lulus: $tidakLulus";
?>



