<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // rand belirlenen aralıkta sayı üretir.
    $rand = rand(0, 20);
    $sayi = $_POST['sayi'];

    if (isset($sayi)) {
        if ($sayi < $rand) {
            echo "<h4>SAYIYI ARTIR</h4>";
            echo "<br>" . "Girilen sayı : $sayi";
            echo "<br>" . "Random atanan sayı : $rand";
        } else if ($sayi > $rand) {
            echo "<h4>SAYIYI AZALT</h4>";
            echo "<br>" . "Girilen sayı : $sayi";
            echo "<br>" . "Random atanan sayı : $rand";
        } else if ($sayi == $rand) {
            echo "<h4>KAZANDINIZ</h4>";
            echo "<br>" . "Girilen sayı : $sayi";
            echo "<br>" . "Random atanan sayı : $rand";
        } else {
            echo "<h4>KAYBETTİNİZ</h4>";
            echo "<br>" . "Girilen sayı : $sayi";
            echo "<br>" . "Random atanan sayı : $rand";
        }
    } else {
        echo "Sayı Girilmedi";
    }

    ?>

    <form action="" method="POST">

        <h4>SAYI TAHMİN ETME OYUNU :</h4>
        <?php echo "<hr>";
        echo "<br>"; ?>
        TAHMİN :<input type="number" name="sayi" min="0" max="20" placeholder="Lütfen bir sayı giriniz.">
        <input type="submit" name="kaydet">


    </form>
</body>

</html>