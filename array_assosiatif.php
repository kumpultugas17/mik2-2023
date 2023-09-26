<?php
$data = array(
   [
      'nim' => '224.MIK.030',
      'nama' => 'Tina',
      'alamat' => 'Palangkaraya',
      'telepon' => '0852***',
      'email' => 'tina@gmail.com'
   ], [
      'nim' => '224.MIK.016',
      'nama' => 'Jimianto',
      'alamat' => 'Banjarmasin',
      'telepon' => '0813***',
      'email' => 'jimi@gmail.com'
   ], [
      'nim' => '224.MIK.017',
      'nama' => 'Dery',
      'alamat' => 'Sampit',
      'telepon' => '0821***',
      'email' => 'dery@gmail.com'
   ], [
      'nim' => '224.MIK.027',
      'nama' => 'Riki Andiki',
      'alamat' => 'Pangkalanbun',
      'telepon' => '0898***',
      'email' => 'riki@gmail.com'
   ], [
      'nim' => '224.MIK.025',
      'nama' => 'Arya',
      'alamat' => 'Pulang Pisau',
      'telepon' => '0819***',
      'email' => 'arya@gmail.com'
   ]
);
echo "{$data[4]['nama']}<br>";
echo "{$data[2]['nim']}<br>";
echo "<hr>";

echo "<table cellpadding=5 cellspacing=0 border=1 style=dashed>
   <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Telepon</th>
      <th>E-Mail</th>
   </tr>
";
foreach ($data as $row) {
   echo "<tr>
      <td>{$row['nim']}</td>
      <td>{$row['nama']}</td>
      <td>{$row['alamat']}</td>
      <td>{$row['telepon']}</td>
      <td>{$row['email']}</td>
   </tr>";
}
echo  "</table>";
