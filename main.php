<?php

// Input
fwrite(STDOUT, 'Jesika: ');
$nama = trim(fgets(STDIN));

// Output
$welcomeMessage = "Halo, $nama! Welcome.";
echo $welcomeMessage . PHP_EOL;

// Variable dan Tipe Data
$umur = 17;
$tinggi = 160.5;
$sudahMenikah = false;
$status = 'Student';

echo "Umur: $umur tahun" . PHP_EOL;
echo "Tinggi: $tinggi cm" . PHP_EOL;
echo "Status: $status" . PHP_EOL;
echo "Sudah Menikah: " . ($sudahMenikah ? 'Ya' : 'Tidak') . PHP_EOL;

// Operator Aritmatika
$bil1 = 10;
$bil2 = 5;
$hasilTambah = $bil1 + $bil2;
$hasilKurang = $bil1 - $bil2;
$hasilKali = $bil1 * $bil2;
$hasilBagi = $bil1 / $bil2;

echo "Penjumlahan: $hasilTambah" . PHP_EOL;
echo "Pengurangan: $hasilKurang" . PHP_EOL;
echo "Perkalian: $hasilKali" . PHP_EOL;
echo "Pembagian: $hasilBagi" . PHP_EOL;

// Operator Pembanding
$lebihBesar = $bil1 > $bil2;
$samaDengan = $bil1 == $bil2;
$tidakSama = $bil1 != $bil2;

echo "Lebih Besar: " . ($lebihBesar ? 'Ya' : 'Tidak') . PHP_EOL;
echo "Sama Dengan: " . ($samaDengan ? 'Ya' : 'Tidak') . PHP_EOL;
echo "Tidak Sama: " . ($tidakSama ? 'Ya' : 'Tidak') . PHP_EOL;

// Percabangan
$usia = 25;

if ($usia >= 18) {
    echo 'Anda sudah dewasa' . PHP_EOL;
} elseif ($usia >= 13 && $usia < 18) {
    echo 'Anda masih remaja' . PHP_EOL;
} else {
    echo 'Anda masih anak-anak' . PHP_EOL;
}

switch ($usia) {
    case 18:
        echo 'Anda baru saja berusia dewasa' . PHP_EOL;
        break;
    case 19:
    case 20:
    case 21:
        echo 'Anda belum tua' . PHP_EOL;
        break;
    default:
        echo "Anda berusia $usia tahun" . PHP_EOL;
}

// Perulangan
for ($i = 0; $i <= 10; $i += 2) {
    echo $i . PHP_EOL;
}

$j = 0;
while ($j < 10) {
    echo $j . PHP_EOL;
    $j += 2;
}

$k = 0;
do {
    echo $k . PHP_EOL;
    $k += 2;
} while ($k < 10);

$names = ["Bunga", "Hanhan", "Dimas", "Asti"];
foreach ($names as $name) {
    echo $name . PHP_EOL;
}

// Memanggil fungsi hitungLuasPersegi  
$luas = hitungLuasPersegi(4);
echo "Luas persegi dengan sisi 4 adalah $luas" . PHP_EOL;

// Fungsi dengan Parameter untuk menghitung luas persegi
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}
?>
