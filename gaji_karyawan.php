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
         <input type="text" name="jabatan" id="jabatan"> <br>

         <label>Status</label>
         <input type="radio" name="status" value="Menikah"> Menikah
         <input type="radio" name="status" value="Belum Menikah"> Belum Menikah <br>

         <label for="tunjangan">Tunjangan</label>
         <input type="number" name="tunjangan" id="tunjangan"> <br>
         <label for="gaji_pokok">Gaji Pokok</label>
         <input type="number" name="gaji_pokok" id="gaji_pokok"> <br>
         <button type="submit">Submit</button>
      </form>
   </fieldset>

   <fieldset>
      <legend>Output</legend>
      <?php
      if (@$_POST['status'] == 'Menikah') {
         $tunjangan_keluarga = 0.25 * $_POST['gaji_pokok'];
      } else {
         $tunjangan_keluarga = 0;
      }

      $gaji_bersih = @$_POST['tunjangan'] + @$_POST['gaji_pokok'] + $tunjangan_keluarga;
      ?>
      Nama Karyawan : <?= @$_POST['nama_karyawan'] ?> <br>
      Jabatan : <?= @$_POST['jabatan'] ?> <br>
      Tunjangan Menikah : <?= $tunjangan_keluarga ?> <br>
      Tunjangan : <?= @$_POST['tunjangan'] ?> <br>
      Gaji Pokok : <?= @$_POST['gaji_pokok'] ?> <br>
      Gaji Bersih : <?= $gaji_bersih ?> <br>
   </fieldset>

</body>

</html>