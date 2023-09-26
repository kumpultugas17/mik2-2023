<?php
echo "<h5>Menentukan Bilangan Ganjil & Genap!</h5>";
echo "<table border=1 cellpadding=5 cellspacing=0>
   <tr>
      <th>Bilangan</th>
      <th>Keterangan</th>
   </th>";
for ($i = 1; $i <= 4; $i++) {
   if ($i % 2 == 0) {
      echo "<tr bgcolor=aqua>
         <td>{$i}</td>
         <td>Bilangan Genap!</td>
      </tr>";
   } else {
      echo "<tr bgcolor=salmon>
         <td>{$i}</td>
         <td>Bilangan Ganjil!</td>
      </tr>";
   }
}
echo "</table>";
