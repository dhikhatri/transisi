<?php

$nilai1 = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);
rsort($nilai1);

$nilai2 = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);
asort($nilai2);

$avg = array_sum($nilai1) / count($nilai1);
$top7 = array_slice($nilai1, 0, 7);
echo 'Nilai 7 maksimal: ';
foreach ($top7 as $key => $val1){
 echo "$val1\n";
}
echo "</br>";
$bot7 = array_slice($nilai2, 0, 7);
echo 'Nilai 7 minimal: ';
foreach ($bot7 as $key => $val2){
 echo "$val2\n";
}
echo "</br>";

echo "nilai rata-rata adalah $avg </br>";
?>