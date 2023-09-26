<?php
$data1 = ["Jimianto", "Dery", "Doni", "Gustian", "Ida", "Junita", "Kevin", "Oktavina"];
$data2 = ["Arya", "Nadia", "Riki", "Romi", "Simon", "Tina"];

echo "{$data1[0]}<br>";
echo "{$data1[1]}<br>";
echo "{$data1[2]}<br>";
echo "{$data2[5]}<br>";
echo "<hr>";
for ($i = 0; $i < count($data1); $i++) {
   echo "{$data1[$i]}<br>";
}
echo "<hr>";
foreach ($data2 as $row) {
   echo "{$row}<br>";
}
