<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aplikasi Data Mahasiswa</title>
</head>

<body>
   <fieldset>
      <legend>Form Input Mahasiswa</legend>
      <form action="insert.php" method="post">

         <div style="margin-bottom: 7px;">
            <label for="nim">NIM</label>
            <input type="text" name="nim" placeholder="Masukkan Nim">
         </div>
         <div style="margin-bottom: 7px;">
            <label for="nama">Nama</label>
            <input type="text" name="n" placeholder="Masukkan Nama">
         </div>
         <div style="margin-bottom: 7px;">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat">
         </div>
         <div style="margin-bottom: 7px;">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" placeholder="Masukkan Telepon">
         </div>
         <div style="margin-bottom: 7px;">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Masukkan Email">
         </div>
         <button type="submit" name="submit">Submit</button>
      </form>
   </fieldset>
   <hr>
   <fieldset>
      <legend>Data Mahasiswa</legend>
      <table border="1" cellpadding="7" cellspacing="0">
         <thead>
            <tr>
               <th>No</th>
               <th>NIM</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Telepon</th>
               <th>E-Mail</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'mik2_db_mhs');
            $no=1;
            $query = $conn->query("SELECT * FROM mahasiswa");
            foreach ($query as $data) :
            ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?php echo $data['nim'] ?></td>
               <td><?= $data['nama'] ?></td>
               <td><?= $data['alamat'] ?></td>
               <td><?= $data['telepon'] ?></td>
               <td><?= $data['email'] ?></td>
            </tr>
            <?php endforeach ?>
         </tbody>
      </table>
   </fieldset>
</body>

</html>