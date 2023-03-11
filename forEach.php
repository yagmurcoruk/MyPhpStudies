<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dizi = array("elma", "armut", "kavun", "karpuz","php");

    $el_say = count($dizi); // dizinin eleman sayısını tutar.
    echo "Dizi eleman sayısı : $el_say";
    echo "<br>";
    echo "<br>";
    foreach ($dizi as $meyve) {
        echo $meyve;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";
    $sonuc =implode($dizi);
    $sonuc1 = explode("kavun",$sonuc);

    echo "<pre>";
    print_r($sonuc1);
    echo "</pre>";
    ?>
</body>

</html>