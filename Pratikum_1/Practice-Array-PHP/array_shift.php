<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Shiftt PHP</title>
</head>

<body>

    <p>Penjelasan Array Shift : Menghilangkan value pertama</p>

    <?php

    $anggota = ["Fahmi", "Asnur", "Angga"];
    array_shift($anggota);
    foreach ($anggota as $agt) {
        echo $agt . '<br/>';
    }

    ?>

</body>

</html>