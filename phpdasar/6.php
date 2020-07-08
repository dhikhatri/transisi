<?php
$arr=[    ['f', 'g', 'h', 'i'],    ['j', 'k', 'p', 'q'],    ['r', 's', 't', 'u']];
$cari=strpos($arr,"fghi");
if ($cari !== FALSE){
  echo "true";
}
else {
  echo "FALSE";
}

?>

<?php
$kalimat="Sedang serius belajar PHP di duniailkom";
$posisi=strpos($kalimat,"Sedang");
if ($posisi){
  echo "Ketemu";
}
else {
  echo "Tidak ketemu";
}
// Tidak ketemu
?>