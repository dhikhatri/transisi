<?php

function CountSmall($string) {
 return strlen(preg_replace('/[^a-z]+/', '', $string));
}
$str = 'TranSISI';

$result = CountSmall($str);


echo ''.$str.' mengandung ' .$result.' buah huruf kecil';

?>