<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tek Mi Çift Mi?</title>
</head>

<body>
    <?php
    // Verilen sayının tek mi çift mi olduğunu veren uygulama:
    $sayi = $_POST['sayi'];
    if (isset($sayi))
    {
        if ($sayi%2 ==0) 
        {
            echo "Girilen sayı çift sayıdır .. Girilen Sayı : $sayi";
        }
        else
        {
            echo "Girilen sayı tek sayıdır .. Girilen Sayı : $sayi";
        }
    }
    else
    {
        echo "Geçersiz sayı girişi ";
    }


    ?>
    <h3>TEK Mİ ÇİFT Mİ UYGULAMASI :</h3>
    <form action="" method="POST">
        <input type="number" name="sayi" placeholder="Lütfen bir sayı giriniz:">
        <input type="submit" name="kaydet">
    </form>
</body>

</html>