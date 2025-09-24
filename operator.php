<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

echo "<br><br>";

$hasilSama            = $a == $b;
$hasilTidakSama       = $a != $b;
$hasilLebihKecil      = $a < $b;
$hasilLebihBesar      = $a > $b;
$hasilLebihKecilSama  = $a <= $b;
$hasilLebihBesarSama  = $a >= $b;

echo "Hasil Sama (a == b): ";
var_dump($hasilSama);
echo "<br>";

echo "Hasil Tidak Sama (a != b): ";
var_dump($hasilTidakSama);
echo "<br>";

echo "Hasil Lebih Kecil (a < b): ";
var_dump($hasilLebihKecil);
echo "<br>";

echo "Hasil Lebih Besar (a > b): ";
var_dump($hasilLebihBesar);
echo "<br>";

echo "Hasil Lebih Kecil atau Sama (a <= b): ";
var_dump($hasilLebihKecilSama);
echo "<br>";

echo "Hasil Lebih Besar atau Sama (a >= b): ";
var_dump($hasilLebihBesarSama);

echo "<br><br><br>";


$hasilAnd  = $a && $b;
$hasilOr   = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): ";
var_dump($hasilAnd);
echo "<br>";

echo "Hasil OR (a || b): ";
var_dump($hasilOr);
echo "<br>";

echo "Hasil NOT A (!a): ";
var_dump($hasilNotA);
echo "<br>";

echo "Hasil NOT B (!b): ";
var_dump($hasilNotB);

echo "<br><br>";

$a += $b;
echo "Setelah a += b, nilai a = $a <br>";
$a -= $b;
echo "Setelah a -= b, nilai a = $a <br>";
$a *= $b;
echo "Setelah a *= b, nilai a = $a <br>";
$a /= $b;
echo "Setelah a /= b, nilai a = $a <br>";
$a %= $b;
echo "Setelah a %= b, nilai a = $a <br>";
echo "<br><br>";

$hasilidentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah \$a identik dengan \$b? ";
echo $hasilidentik ? "Benar" : "Salah";
echo "<br>";

echo "Apakah \$a tidak identik dengan \$b? ";
echo $hasilTidakIdentik ? "Benar" : "Salah";
?>