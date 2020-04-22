<?php
$sayilar = [22, 7, 14, 52, 4, 22, 430, 18, 54, 77, 128];
echo 'En Büyük Değer : '.max($sayilar).'<br>';
echo 'En Küçük Değer : '.min($sayilar).'<br>';
$toplam = array_sum($sayilar);
echo 'Ortanca değer : '.($toplam/count($sayilar)).'<br>';
?>
