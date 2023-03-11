<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $sayi = 10;
        switch ($sayi) {
            case '5':
                echo "Verilen sayi 5'dir.";
                break;
            case '2':
                echo "Verilen sayi 2'dir";
            
            default:
                echo "Sayı istenilen aralıkta değildir.";
                break;
        }
    
    ?>
</body>
</html>