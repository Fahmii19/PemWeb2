<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Unshift PHP</title>
</head>

<body>

    <p>Penjelasan Array PUSH : Menambahkan Value, dengan menempatkan diposisi pertama</p>

    <?php

    $anggota = ["Fahmi", "Asnur", "Angga"];
    array_unshift($anggota, "Nana", "Ayyash");
    foreach ($anggota as $agt) {
        echo $agt . '<br/>';
    }

    ?>

</body>

</html>