<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertama</title>
</head>

<body>

    <h4>Hallo</h4>

    <?php

    $x = 1;

    do {
        echo $x . " ";
        $x++;
    } while ($x > 2);


    $array_jus = [
        ['buah' => 'mangga', 'harga' => 8000],
        ['buah' => 'banana', 'harga' => 9000],
        ['buah' => 'lemon', 'harga' => 10000]
    ]

    ?>


    <ol>
        <?php

        foreach ($array_jus as $jus) {
            echo '<li>Jus ' . $jus['buah'] . ' Harga :' . $jus['harga'] . '</li>';
        }

        ?>
    </ol>



</body>

</html>