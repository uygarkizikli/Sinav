<?php
$deger = md5('Uygar Kızıklı');
//1.Soru
echo "<hr>1.Soru<hr>";
$sadeceSayi = preg_replace( '/[^0-9]/', '', $deger );
for ($i=0; $i <strlen($sadeceSayi); $i++) {
  echo $sadeceSayi[$i].' sayısının asalları<br>';
  for($a=1;$a<=$sadeceSayi[$i];$a++){
    $s=0;
    for($b=1;$b<=$a;$b++){
      if($a%$b==0){
        $s++;
      }
    }
    if($s==2){
      echo "$a"."</br>";
    }
  }
}

//2. Soru
echo "<hr>2.Soru<hr>";
$toplamHex = 0;
$hex = "";
for ($i=1; $i <=strlen($deger) ; $i++) {
  if ($i%4==0) {
    $toplamHex += hexdec($hex);
    $hex .= $deger[$i-1];
    $hex = "";
  }else {
    $hex .= $deger[$i-1];
  }
}
echo 'Değerin hexadecimal sayı toplamı : '.$toplamHex.'<br>';

//3.Soru
echo "<hr>3.Soru<hr>";
for ($i=0; $i <strlen($deger) ; $i++) {
  $hexDegeri = hexdec($deger[$i]);
  if ($hexDegeri>=8) {
    echo $deger[$i].'-'.$hexDegeri.'<br>';
  }
}

//4.Soru
echo "<hr>4.Soru<hr>";
$sadeceKarakter = preg_replace( '/[^A-Za-z]/', '', $deger );
echo "Değer içindeki harfler : ".$sadeceKarakter.'<br>';

//5.Soru
echo "<hr>5.Soru<hr>";
echo strrev($deger);
?>
