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
   <div>Ini adalah halaman contact</div>
   <table border="1" cellpadding="5" cellspacing="0">
      <thead>
         <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tangga Lahir</th>
            <th>JK</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Hobi</th>
            <th>Telepon</th>
            <th>E-Mail</th>
         </tr>
      </thead>
      <tbody>
         <td><?= @$_GET['nim'] ?></td>
         <td><?= @$_GET['nama'] ?></td>
         <td><?= @$_GET['tempat_lahir'] ?></td>
         <td><?= @$_GET['tgl_lahir'] ?></td>
         <td><?= @$_GET['jk'] ?></td>
         <td><?= @$_GET['agama'] ?></td>
         <td><?= @$_GET['alamat'] ?></td>
         <td>
            <?= @$_GET['hobi'][0] . ', ' . @$_GET['hobi'][1] . ', ' . @$_GET['hobi'][2] . ', ' . @$_GET['hobi'][3] ?>
         </td>
         <td><?= @$_GET['telepon'] ?></td>
         <td><?= @$_GET['email'] ?></td>
      </tbody>
   </table>

   <!-- bagian footer -->
   <?php
   require 'partials/footer.php';
   ?>
</body>

</html>