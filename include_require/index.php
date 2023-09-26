<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Web Programming</title>
</head>

<body>
   <!-- bagian navbar -->
   <?php
   include('partials/navbar.php');
   ?>
   <!-- bagian header -->
   <?php
   include 'partials/header.php';
   ?>

   <!-- bagian konten -->
   <div>
      Ini adalah halaman <b>Input Data</b>
      <p>Materi tentang Variabel GET</p>

      <form action="" method="get">
         Nama <input type="text" name="nama"><br>
         Usia <input type="text" name="usia"><br>
         Alamat <input type="text" name="alamat"><br>
         Telepon <input type="text" name="telepon"><br>
         Email <input type="text" name="email"><br>
         <button type="submit">Submit</button>
      </form>

      <?php
      $nama = @$_GET['nama'];
      $usia = @$_GET['usia'];

      echo "Nama : {$nama} dan Usia {$usia}";
      ?>
   </div>

   <!-- bagian footer -->
   <?php
   require('partials/footer.php');
   ?>
</body>

</html>