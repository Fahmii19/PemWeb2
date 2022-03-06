<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sort PHP</title>
</head>

<body>

    <!-- Sort Array PHP -->

    <?php

    $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];

    echo '<ol>';

    foreach ($ar_buah as $ambil_key => $ambil_value) {
        echo '<li>' . $ambil_key . ' - ' . $ambil_value . '</li>';
    }

    echo '</ol>';
    sort($ar_buah);
    // mengapa foreach yg bwh ada angkanya sebab, var $ar_buah itu memakai fungsi php yg bernama sort
    // yg mana php dijalankan secara prosudural yaitu dari atas ke bawah
    echo '<hr/>';

    echo '<ol>';

    foreach ($ar_buah as $ambil_key => $ambil_value) {
        echo '<li>' . $ambil_key . ' - ' . $ambil_value . '</li>';
    }

    echo '</ol>';

    ?>

</body>

</html>