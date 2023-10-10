<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ujian Tengah Semester</title>
   <!-- Import Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-12">

            <h5 class="alert alert-primary mt-2">Aplikasi Perhitungan Gaji</h5>
            <form action="" method="post">
               <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
               <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan"><br>
               <label for="golongan" class="form-label">Golongan</label>
               <select name="golongan" class="form-select" id="golongan">
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
               </select><br>
               <label for="thn_kerja" class="form-label">Tahun Masuk Kerja</label>
               <input type="number" name="thn_kerja" class="form-control" id="thn_kerja"><br>
               <label for="jumlah_anak" class="form-label">Jumlah Anak</label>
               <input type="number" name="jumlah_anak" class="form-control" id="jumlah_anak"><br>
               <button type="submit" class="btn btn-outline-primary btn-sm ">Submit</button>
            </form>

            <?php
            $nama_karyawan = $_POST['nama_karyawan'];
            $golongan = $_POST['golongan'];
            $thn_kerja = $_POST['thn_kerja'];
            $jumlah_anak = $_POST['jumlah_anak'];
            // No 1
            switch ($golongan) {
               case 'A':
                  $gaji = 3500000;
                  break;
               case 'B':
                  $gaji = 2750000;
                  break;
               case 'C':
                  $gaji = 2200000;
                  break;
               default:
                  $gaji = 1500000;
                  break;
            }
            // No 2
            $lama_kerja = 2023 - $thn_kerja;
            // No 3
            if ($lama_kerja >= 5) {
               $bonus = 2000000;
            } else {
               $bonus = 750000;
            }
            // No 4
            if ($jumlah_anak > 3) {
               $tunjangan_anak = 200000 * 3;
            } else {
               $tunjangan_anak = 200000 * $jumlah_anak;
            }
            // No 5
            $total = $gaji + $bonus + $tunjangan_anak;
            ?>
            <hr>
            Nama Karyawan : <?= $nama_karyawan ?><br>
            Golongan : <?= $golongan ?><br>
            Gaji : <?= $gaji ?><br>
            Lama Kerja : <?= $lama_kerja ?><br>
            Bonus : <?= $bonus ?><br>
            Tunjangan Anak : <?= $tunjangan_anak ?><br>
            Total Gaji : <?= $total ?><br>
         </div>
      </div>
   </div>

   <!-- Import Boostrap JS -->
   <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>