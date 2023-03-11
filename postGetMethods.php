<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Post get methodları :            // POST VERİLERİ GİZLİ OLARAK GÖNDERİR.
        
    /*echo $_POST['ad'];
    echo "<br>";
    echo $_POST['soyad']; */
   
    echo $_GET['ad'];                   // GET VERİLERİ ADRES SATIRINDA VERİLERİ GÖSTERİR. ADRES SATIRINDA DEĞİŞİKLİK YAPILDIĞINDA İÇERDEKİ İŞLEMLERE ETKİ EDER. 
    echo "<br>";    
    echo $_GET['soyad'];
    $kullanici_id = 151;


    ?>

<form action="islem.php" method="POST">

    Ad :<input type="text" name="ad" placeholder="Adınızı giriniz.">
    Soyad : <input type="text" name="soyad" placeholder="Soyadınızı giriniz.">
    <input type="submit" value="Formu Gönder" name="gonder">

</form>

<a href ="islem.php?kullanici_id<php> echo $kullanici_adi </php>"> <button> Kullanıcıyı sil.</button></a>
</body>

</html>