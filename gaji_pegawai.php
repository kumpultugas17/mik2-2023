<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Gaji Karyawan</title>
</head>

<body>
   <h4>Hitung Gaji Karyawan</h4>
   <fieldset>
      <legend>FORM INPUT</legend>
      <form action="" method="post">
         <label for="nama_karyawan">Nama Karyawan</label>
         <input type="text" name="nama_karyawan" id="nama_karyawan"> <br>

         <label for="jabatan">Jabatan</label>
         <select name="jabatan" id="jabatan">
            <option disabled selected>Pilih</option>
            <option value="General Manager">General Manager</option>
            <option value="HRD">HRD</option>
            <option value="Accounting">Accounting</option>
            <option value="Staff">Staff</option>
         </select> <br>

         <label>Status</label>
         <input type="radio" name="status" value="Menikah"> Menikah
         <input type="radio" name="status" value="Belum Menikah"> Belum Menikah <br>
         <button type="submit">Submit</button>
      </form>
   </fieldset>

   <fieldset>
      <legend>Output</legend>
      <?php
      switch (@$_POST['jabatan']) {
         case 'General Manager':
            $tunjangan = 3000000;
            $gaji_pokok = 7000000;
            break;
         case 'HRD':
            $tunjangan = 2500000;
            $gaji_pokok = 6000000;
            break;
         case 'Accounting':
            $tunjangan = 2350000;
            $gaji_pokok = 5500000;
            break;

         default:
            $tunjangan = 2000000;
            $gaji_pokok = 4000000;
            break;
      }

      if (@$_POST['status'] == 'Menikah') {
         $tunjangan_keluarga = 0.25 * $gaji_pokok;
      } else {
         $tunjangan_keluarga = 0;
      }

      $gaji_bersih = $tunjangan + $gaji_pokok + $tunjangan_keluarga;
      ?>
      Nama Karyawan : <?= @$_POST['nama_karyawan'] ?> <br>
      Jabatan : <?= @$_POST['jabatan'] ?> <br>
      Tunjangan Menikah : <?= $tunjangan_keluarga ?> <br>
      Tunjangan : <?= $tunjangan ?> <br>
      Gaji Pokok : <?= $gaji_pokok ?> <br>
      Gaji Bersih : <?= $gaji_bersih ?> <br>
   </fieldset>

</body>

</html>