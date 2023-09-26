<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FORM STNK</title>
</head>

<body>
   <form action="hasil_stnk.php" method="post">
      <table>
         <tr>
            <td>Nama Pemilik</td>
            <td>:</td>
            <td><input type="text" name="nama_pemilik"></td>
         </tr>
         <tr>
            <td>Nomor Polisi</td>
            <td>:</td>
            <td><input type="text" name="nopol"></td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>
               <button type="submit">Submit</button>
               <button type="reset">Batal</button>
            </td>
         </tr>
      </table>
   </form>
</body>

</html>