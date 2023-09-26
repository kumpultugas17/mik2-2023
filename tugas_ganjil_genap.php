<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas Ganjil Genap</title>
</head>

<body>
   <table border="1" cellpadding="4" cellspacing="0">
      <tr>
         <th>Bilangan</th>
         <th>Keterangan</th>
      </tr>
      <?php
      $angka = 2;








      for ($i = 1; $i <= $angka; $i++) {
         if ($i % 2 == 0) {
            echo "
               <tr bgcolor='salmon'>
                  <td>{$i}</td>
                  <td>Ini adalah Bilangan Genap</td>
               </tr>
            ";
         } else {
            echo "
               <tr bgcolor='aqua'>
                  <td>{$i}</td>
                  <td>Ini adalah Bilangan Ganjil</td>
               </tr>
            ";
         }
      }
      ?>
   </table>
</body>

</html>