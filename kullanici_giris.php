<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $kadi = "yagmur";
    $pass = "123456";


    $kullanici_adi = $_POST['kullanici_ad'];
    $kullanici_password = $_POST['kullanici_password'];
    if ($kullanici_adi == $kadi && $kullanici_password == $pass) 
    {
        echo "Giriş Başarılı";
    } else {
        echo "Giriş Başarısız";
    }

    ?>

    <br>

    <hr>
    <h3>KULLANICI GİRİŞİ</h3>
    <form action="" method="POST">
        kullanıcı Adı : <input type="text" name="kullanici_ad" placeholder="Kullancı adını giriniz...">
        Şifre: <input type="password" name="kullanici_password" placeholder="Şifrenizi giriniz..">

        <button type="submit">Giriş Yap</button>
    </form>
</body>

</html>