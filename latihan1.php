<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan 1</title>
</head>

<body>
   <?php
   $nama = 'Ahmad';
   $umur = 25.3;
   $jomblo = true;
   $dompet = 50000;
   $dompet_teman = 70000;
   $nomor_telepon = '085388633319';
   $jumlah = $dompet + $dompet_teman;

   var_dump($nama);
   var_dump($umur);
   var_dump($jomblo);
   var_dump($jumlah);

   echo '<br>Nama Saya : ' . $nama;
   echo '<br>Nomor Telepon Saya : ' . $nomor_telepon;
   ?>
</body>

</html>