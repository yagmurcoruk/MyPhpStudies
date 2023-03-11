<?php 

    echo " Yağmur çoruk ";

?>

<?php 
// birleştirme operatörü (.)

echo "udemy eğitmeni "." nasıl olunur?"."SELAM "

?>

<?php 
// DEĞİŞKENLER 


$ad = "Yağmur";
$soyad = "ÇORUK";
$egitimplat = 'udemy';
echo $no = 500;
echo $adSoyad = "yagmur404";
echo"<br>";

/*
Değişkenler $ işareti ile başlar
değişkene değer ataması yapılırken = işareti kullanılır.
Değişkene metinsel ifadeler aktarılırken "" ve '' kullanılır.
Değişkene int değer atarken direkt atama yapılır.
Değişkenlerde upper ve lower case durumu vardır.
Değişkenler rakam ile başlamaz.Özel karakterler de dahildir.
Değişkenlerde boşluk kullanılmaz. _ kullanılabilir.
*/

$ad1 = "Yağmur ÇORUK";
$unvan = "Öğremci";
echo$ad1.$unvan;
echo "<br>";
$ad1 = "ikinci deger : udemy";
echo$ad1.$unvan; // en sonda hangi değer atanmışsa o kullanılır.


// ÇİFT TIRNAK VE TEK TIRNAK ARASINDAKİ FARKLAR:

$ad = "YAĞMUR";
$soyad = "ÇORUK";
echo"<br>";
echo"<br>";
echo"<br>";
echo "BENİM ADIM $ad";  // çift tırnak içinde değişken içerikleri okunabilir.
echo"<br>";
echo"<br>";
echo 'BENİM ADIM $ad'; // tek tırnak içerisindeki değişken içerikleri okunamaz.


// YOK SAYMA İŞARETLERİ :
echo"<br>";
echo"<br>";
echo"Ben $ad \"udemy\" kursuna kayıt oldum."    //  \"yazacağınız metin\"   -->  \ işareti yok sayma - kaçış işaretidir.



?>
