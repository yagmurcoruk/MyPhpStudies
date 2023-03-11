<?php 
// toplama : +
// çıkarma : -
// bölme : /
// çarpma : * 

$sayi1 = 50 ;
$sayi2 = 13;
$topla = $sayi1 + $sayi2;
echo "İki sayının toplamı : "." ". $sayi1+$sayi2;
echo $topla;
echo "<br>";

if($topla>50){
    echo "Toplama işlemi sonucu 50 den büyüktür."."   "."SONUÇ : ".$topla;
}

echo    "<h4> ÇIKARMA İŞLEMİ </h4>";
echo "<hr>";
$cikarma= $sayi1-$sayi2;
echo "$sayi1 - $sayi2 = $cikarma";

echo    "<h4> BÖLME İŞLEMİ </h4>";
echo "<hr>";
$bolme= $sayi1/$sayi2;
echo "$sayi1 / $sayi2 = $bolme";

echo    "<h4> ÇARPMA İŞLEMİ </h4>";
echo "<hr>";
$carpma= $sayi1*$sayi2;
echo "$sayi1 * $sayi2 = $carpma";





?>





