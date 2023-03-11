<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "$i <br>";
    }

    //il Plakalarını döngü ile select box içinde yazma:
    ?>

    <select>
        <?php
        for ($plaka = 1; $plaka < 82; $plaka++) { ?>
            <option>
                <?php echo "$plaka" ?>
            </option>
        <?php }


        ?>
    </select>

</body>

</html>