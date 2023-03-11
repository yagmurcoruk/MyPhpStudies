<?php 
// strtolower fonksiyonu : 

echo $yazi = "Ben udemy ileri seviye php kursuna KAYITLIYIM..";
echo"<br>";
echo strtolower($yazi);  // bütün harfleri küçük yapar.
echo"<br>";
echo"<br>";
// strtoupper

echo $yazi = "Ben udemy ileri seviye php kursuna kayitliyim..";
echo"<br>";
echo strtoupper($yazi);  // bütün harfleri büyük yapar.

echo"<br>";
echo"<br>";

// ucword --> metnin kelimelerinim ilk harflerini büyük yazar.
echo $yazi = "ben udemy ileri seviye php kursuna kayitliyim..";
echo"<br>";
echo ucwords($yazi); 

echo"<hr>";

echo $yazi = "ben udemy ileri seviye php kursuna kayitliyim..";
echo"<br>";
echo ucwords($yazi); 
echo"<br>";
echo strtolower($yazi);  // bütün harfleri küçük yapar.

echo"<br>";
echo"<br>";
echo"<br>";
echo"<hr>";

// ucfirst --> metnin ilk harfini büyük yazar.
echo $yazi = "ben udemy ileri seviye php kursuna kayitliyim..";
echo"<br>";
echo ucfirst($yazi); 
echo"<hr>";
// strlen = metnin karakter sayısını verir boşlukları sayar.
echo $yazi = "ben udemy ileri seviye php kursuna kayitliyiam..";
echo"<br>";
echo strlen($yazi); 

?>