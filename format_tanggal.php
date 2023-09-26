<?php
// $daftarTimezone = DateTimeZone::listIdentifiers();

// foreach ($daftarTimezone as $timezone) {
//    echo "{$timezone} <br>";
// }

date_default_timezone_set("Asia/Jakarta") . '<br>';
$hariIni = new DateTime();

echo $hariIni->format('d-m-Y H:i') . '<br>';
echo $hariIni->format('l F Y, H:i') . '<br>';
echo $hariIni->format('D M y, H:i') . '<br>';
echo $hariIni->format('d-m-Y, h:i A') . '<br>';

echo '<hr>';

$tglSekarang = date('d-m-Y');
echo $tglSekarang . '<br>';
echo "<u>Format Hari</u><br>";
echo date('d') . '<br>';
echo date('j') . '<br>';
echo date('D') . '<br>';
echo date('l') . '<br>';
echo "<u>Format Bulan</u><br>";
echo date('m') . '<br>';
echo date('n') . '<br>';
echo date('M') . '<br>';
echo date('F') . '<br>';
echo "<u>Format Tahun</u><br>";
echo date('y') . '<br>';
echo date('Y') . '<br>';

echo "<hr>";
$angsuran = 750000;
$tempo = date('03-09-2023');
$bayar = date('03-09-2023');
$denda = 45000;
$potongan = 100000;

if ($bayar > $tempo) {
   $total = $angsuran + $denda;
} else {
   $total = $angsuran;
}

echo "Angsuran : {$angsuran}<br>";
echo "Denda : {$denda}<br>";
echo "Tgl Jatuh Tempo : {$tempo}<br>";
echo "Tgl Bayar : {$bayar}<br>";
echo "Total Bayar : {$total}<br>";

echo "<hr>";
if ($bayar < $tempo) {
   $total = $angsuran - $potongan;
} elseif ($bayar > $tempo) {
   $total = $angsuran + $denda;
} else {
   $total = $angsuran;
}

echo $total;
