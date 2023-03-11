<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set("Europe/Istanbul"); // Saat ayarını Türkiye için ayarladık.
    $dizi = array("yagmur", "çoruk", 10, 50, 47);
    print_r($dizi); // indisler dizilerde 0 dan başlar.
    echo "<br>";
    echo $dizi[0];
    echo "<br>";
    echo $dizi[1];
    echo "<br>";
    echo $dizi[2];
    echo "<br>";
    echo $dizi[3];
    echo "<br>";
    echo $dizi[4];
    echo "<br>";
    echo "<br>";


    echo "<pre>"; // pre  komutu indisleri alt alta yazdırarak içeriklerini gösterir.
    print_r($dizi);
    echo "</pre>";

    // DİZİLERDE SIK KULLANILAN HAZIR FONKSİYONLAR .   
    
    $yagmur = array(10, 9, 8, 7, 6, 12, 5, 4, 3, 2, 1);
    echo "<pre>";
    print_r($yagmur);
    echo "</pre>";

    // Dizi elemanlarını küçükten büyüğe doğru sıralama yapar. --> sort
    echo "küçükten büyüğe doğru sıralama ";

    echo "<pre>";
    sort($yagmur);
    print_r($yagmur);
    echo "</pre>";

    // Dizi elemanlarını büyükten küçüğe doğru sıralama yapar. --> rsort
    
    echo "<pre>";
    rsort($yagmur);
    print_r($yagmur);
    echo "</pre>";

    $yagmur = array("a", "y", "h", "k", "u", 1);
    echo "<pre>";
    sort($yagmur);
    print_r($yagmur);
    echo "</pre>";

    // Dizi içinde aradığımız eleman var mı yok mu bakar eğer varsa 1 yoksa hiç bir şey döndürmez. --> in_array.
    
    echo in_array("z", $yagmur);
    $sonuc = in_array(1, $yagmur);
    if ($sonuc == 1) {
        echo "var";
    } else {
        echo "yok";
    }

    echo "<br>";

    // Dizi değerlerini birleştirmeye yarar --> implode
    // Diziyi,dizi olmaktan çıkarır.
    $yagmur = array("a", "y", "h", "k", "u", 1);
    echo implode(" * ", $yagmur);

    // Değişkeni parçalayarak dizi haline getirir. --> explode
    $zaman = "27-10-2017 19:08";
    $sonuc = explode(" ", $zaman);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    echo "<br>";

    echo "Tarih : $sonuc[0] <br> Saat : $sonuc[1]";

    echo "<hr>";

    // TIME ZONE AYARLARI VE ANLIK ZAMAN ALMA :
    $zaman = date("d.m.y h:i:s A");
    $sonuc = explode(" ",$zaman);
    echo "Tarih : $sonuc[0] Saat : $sonuc[1]";
    

    ?>

</body>

</html>