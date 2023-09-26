<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan 2</title>
</head>

<body>
   <?php
   $nim = "224.MIK.001";
   $nama = "M. IQBAL ADENAN";
   $jurusan = 'Manajemen Informatika Komputer';
   $web_desain = 73;
   $database = 87;
   $web_programming = 94;
   $rata_rata = ($web_desain + $database + $web_programming) / 3;

   echo 'Nim : ' . $nim;
   echo '<br>Nama : ' . $nama;
   echo '<br>Jurusan : ' . $jurusan;
   echo '<br>Nilai Web Desain : ' . $web_desain;
   echo '<br>Nilai Database : ' . $database;
   echo '<br>Nilai Web Programming : ' . $web_programming;
   echo '<br>Rata-rata : ' . $rata_rata;
   ?>
</body>

</html>