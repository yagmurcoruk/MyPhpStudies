<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* $say = 0;
    while ($say <= 10) 
    {
    $say++;
    echo "$say"." ";
    }*/

    $dizi = array("elma", "armut", "kavun", "karpuz");
    // ÖZ İZLEME İLE ELEMAN SAYISINI BİLDİĞİMİZ DİZİYİ YAZDIRMA.
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    echo "<hr>";

    // ELEMAN SAYISINI BİLDİĞİMİZ DİZİNİN ELEMANLARINI TEK TEK YAZDIRMA.
    echo $dizi[0];
    echo "<br>";
    echo $dizi[1];
    echo "<br>";
    echo $dizi[2];
    echo "<br>";
    echo $dizi[3];
    echo "<br>";

    echo "<hr>";
    // FOR KULLANARAK ELEMAN SAYISINI BİLDİĞİMİZ DİZİ ELEMANLARINI YAZDIRMA.
    
    for ($i = 0; $i <= 3; $i++) {
        echo $dizi[$i];
        echo " ";
        echo "<br>";
    }

    ?>
</body>

</html>