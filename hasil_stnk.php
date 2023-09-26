<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hasil</title>
</head>

<body>
   <table border='1' cellspacing="0" cellpadding="5">
      <thead>
         <tr>
            <th>Nama Pemilik</th>
            <th>Nomor Polisi</th>
            <th></th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><?= $_POST['nama_pemilik'] ?></td>
            <td><?= $_POST['nopol'] ?></td>
            <td></td>
            <td></td>
         </tr>
      </tbody>
   </table>
</body>

</html>