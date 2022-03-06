<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Form Validation Method</title>
</head>

<body>




    <div class="container mt-3">

        <div class="col-md-12">

            <div class="alert alert-warning" role="alert">
                <h5 class="fw-bold">Form Validation</h5>
            </div>

            <?php

            $name = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = validasi_input($_POST["name"]);
            }

            function validasi_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            echo "<p>Helo myy prenn, my name is <b>" . $name . "</b></p>";



            ?>

            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Input Your Name">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Submit"></input>
                </div>

            </form>
        </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>