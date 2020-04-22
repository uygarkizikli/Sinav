<?php
function romaRakaminaCevir($integer){
  $integer = intval($integer);
  $result = '';
  $lookup = array('M' => 1000,
  'CM' => 900,
  'D' => 500,
  'CD' => 400,
  'C' => 100,
  'XC' => 90,
  'L' => 50,
  'XL' => 40,
  'X' => 10,
  'IX' => 9,
  'V' => 5,
  'IV' => 4,
  'I' => 1);
  foreach($lookup as $roman => $value){
    $matches = intval($integer/$value);
    $result .= str_repeat($roman,$matches);
    $integer = $integer % $value;
  }
  return $result;
}
if ($_POST) {
  if (isset($_POST['sayi']) && is_numeric($_POST['sayi'])) {
    echo romaRakaminaCevir($_POST['sayi']);
  }
}
?>
