<?php
function topla($sayi1, $sayi2)
{
    echo $sayi1 + $sayi2; echo"<br>";
}
topla(5, 6);
topla(4545,787878);

//RETURN İLE DEĞER DÖNDÜRME 

function carp($sayi1,$sayi2){

    $toplam = $sayi1 * $sayi2;
    return $toplam;
}

echo carp(5,6);
?>