<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['score'])) { // score değişkenli kısım doluysa şunları yap dedik boşsa herhangi bir şey yapmaz. BAŞKA BİR DEYİŞLE İÇERİSİ NULL DEĞİLSE (DEĞER ATAMASI OLMUŞSA) TRUE DÖNER. 0(SIFIR) !=0 :
        $not = $_POST['score'];
        echo " NOTUNUZ : $not ";
       

        switch ($not) {
            case '5':
                echo "PEK İYİ ";
                break;
            case '4':
                echo "İYİ";
                break;
            case '3':
                echo "ORTA ";
                break;
            case '2':
                echo "GEÇTİ ";
                break;
            case '1':
                echo "KALDI ";
                break;
            default:
                echo "TANIMLAMA YAPILMADI!!";
                break;
        }
        echo "<hr>";
    }
    ?>
    <form action="" method="POST">

        NOT : <input type="number" min="1" max="5" name="score" placeholder="Notunuzu giriniz..">
        <input type="submit" name="notislemi">
    </form>
</body>

</html>