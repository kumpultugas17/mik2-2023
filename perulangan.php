<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Perulangan</title>
</head>

<body>
   <?php
   echo "Menampilkan angka tanpa perulangan!<br>";
   echo "1<br>";
   echo "2<br>";
   echo "3<br>";
   echo "4<br>";
   echo "5<br>";

   echo "<br>";

   echo "Menampilkan angka dengan perulangan Ascending!<br>";
   for ($i = 1; $i <= 5; $i++) {
      echo "{$i} - Hello World!<br>";
   }

   echo "<br>";

   echo "Menampilkan angka dengan perulangan Descanding!<br>";
   for ($i = 5; $i >= 1; $i--) {
      echo "{$i} - Hello World!<br>";
   }

   echo "<br>";

   $data = ['Apel', 'Mangga', 'Anggur', 'Melon', 'Semangka', 'Pisang', 'Kacang', 'Sawi', 'Kangkung', 'Kelakai', 'Kol'];
   for ($j = 0; $j < count($data); $j++) {
      if ($j == 0) {
         echo "<b>Buah-Buahan : </b><br>";
      }

      echo "$data[$j]<br>";

      if ($j == 5) {
         echo "<b>Sayur-sayuran : </b><br>";
      }
   }

   echo "<br>";

   $kendaraan = ['Mio', 'Beat', 'Nmax', 'Vario', 'Mobilio', 'Jazz', 'Swift', 'Mirage', 'Rush', 'Agya', 'Expander'];
   for ($k = 0; $k < count($kendaraan); $k++) {
      if ($k == 0) {
         echo "<b>Motor : </b><br>";
      }
      echo "$kendaraan[$k]<br>";
      if ($k == 3) {
         echo "<b>Mobil : </b><br>";
      }
   }

   echo "<br><br>";
   echo "Menentukan Nilai Ganjil dan Genap!<br>";
   echo "<table border=1>
      <tr>
         <th>Angka</th>
         <th>Keterangan</th>
      </tr>
   ";
   $angka = 2;
   if ($angka % 2 == 0) {
      echo "<tr>
         <td>{$angka}</td>
         <td>Bilangan Genap</td>
      </tr>";
   } else {
      echo "<tr>
         <td>{$angka}</td>
         <td>Bilangan Ganjil</td>
      </tr>";
   }
   echo "<table>";
   ?>
</body>

</html>