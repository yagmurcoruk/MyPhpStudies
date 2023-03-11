<?php
date_default_timezone_set('Europe/Istanbul');
/*  $adsoyad = "Yağmur ÇORUK";
setcookie("adsoyad",$adsoyad);
echo $_COOKIE["adsoyad"];  */

// COOKI LERE ZAMAN ATAMA :
$adsoyad = "Yağmur ÇORUK";
setcookie("adsoyad", $adsoyad, strtotime("+1 week")); // 3600 dk ---> 1 saat:
echo $_COOKIE["adsoyad"];

// COOKIE SÜRE ARTTIRMA:
/* 
strtotime("+30 seconds");
strtotime("+1 hours");
strtotime("+1 day");
strtotime("+1 week");
strtotime("+1 ");  */
?>