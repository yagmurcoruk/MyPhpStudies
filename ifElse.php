<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>

<body>
    <?php
    $say = 800;
    if ($say <= 5) {
        echo "Sayı 5 den küçük ya da eşittir. Sayınız : $say";
        /* == --> eşit
        ===           ---> aynısı ise
        <             --> küçük ise
        >             -->büyük ise 
        <=            --> küçük ya da eşit ise
        >=            --> büyük ya da eşit ise */

    } else if ($say > 10) {
        echo "Bu  sayi 5 den büyüktür.  Sayınız : $say";
    } else {
        echo "Bu  sayi 5 den büyüktür.  Sayınız : $say";
    }


    // --------------------------------- KISA İF ----------------------------------------
    echo "<br>";
    echo $say == '800' ? 'Doğru' : 'Yanlış';
    echo "<br>";

    $deger ="elma";

    ?>
    <select name="" id="">
        <option <?php echo $deger == 'armut' ? 'selected' : '' ?>>Armut</option>
        <option <?php echo $deger == 'elma' ? 'selected' : '' ?>>Elma</option>
        
    </select>
</body>

</html>

