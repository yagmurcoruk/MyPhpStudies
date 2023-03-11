<?php
$b = 10;
function carp($a)
{
    global $b; // global fonksiyon bu şekilde tanımlanabilir.
    return $a * $b;
}

echo carp(20);
echo "<br>";


// FONKSİYONLARDA VARSAYILAN DEĞER:
function yaz($ad, $soyad = "Soy isim girilmedi!")
{
    return $ad . " " . $soyad;
}

echo yaz("Yagmur"); // tek parametre gönderilince default olan değer yazılır.


//RECURSİVE FONKSİYONLAR :

$sabit = 1;
function faktoriyel($degisken)
{
    global $sabit;
    if ($degisken > 1) {
        $sabit *= $degisken;
        $degisken--;
        faktoriyel($degisken);
    }
    return $sabit;
}
echo "<br>";
echo faktoriyel(10);


?>