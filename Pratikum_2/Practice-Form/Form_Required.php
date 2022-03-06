<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Form Required Method</title>

    <style>
        .bahaya {
            color: #FF0000;
        }
    </style>

</head>

<body>




    <div class="container mt-3">

        <div class="col-md-12">

            <div class="alert alert-warning" role="alert">
                <h5 class="fw-bold">Form Required</h5>
            </div>

            <?php

            // Deklarasi variabel
            $name_pesan = $kampus_pesan = "";
            $name = $kampus = "";

            // Pengiriman via Post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Mengecek field
                if (empty($_POST["name"])) {
                    $name_pesan = "Jangan didiemin isi gan!!!";
                } else {
                    $name = htmlspecialchars($_POST["name"]);
                }
                if (empty($_POST["kampus"])) {
                    $kampus_pesan = "Jangan didiemin isi gan!!!";
                } else {
                    $kampus = htmlspecialchars($_POST["kampus"]);
                }
            }


            ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Input Your Name">
                    <span class="bahaya">* <?= $name_pesan ?></span>
                </div>
                <div class="mb-3">
                    <label for="kampus" class="form-label">Kampus</label>
                    <input type="text" class="form-control" id="kampus" name="kampus" placeholder="Input Your Campus">
                    <span class="bahaya">* <?= $kampus_pesan ?></span>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Submit"></input>
                </div>

            </form>

        </div>

        <?php
        echo "<p>Helo myy prenn, my name is <b>" . $name . "</b></p>";
        echo "<p>I Am Studying <b>" . $kampus . "</b></p>";
        ?>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>