<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="    https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">





    <title>Daftar Mahasiswa</title>
</head>

<?php

require_once "class_mahasiswa.php";


function get_NimRandom()
{
    mt_srand(10);
    return mt_rand();
}


$array_maha1 = new Mahasiswa(get_NimRandom(), "Asep", 2019, "Teknik Informatika", 2.1);
$array_maha2 = new Mahasiswa(get_NimRandom(), "Ujang", 2020, "Teknik Informatika", 2.7);
$array_maha3 = new Mahasiswa(get_NimRandom(), "Sapripudin", 2020, "Sistem Informati", 3.0);
$array_maha4 = new Mahasiswa(get_NimRandom(), "Kaemin", 2021, "Teknik Informatika", 3.5);
$array_maha5 = new Mahasiswa(get_NimRandom(), "Alberto", 2018, "Teknik Informatika", 4.0);

$maha = [$array_maha1, $array_maha2, $array_maha3, $array_maha4, $array_maha5];

foreach ($maha as $x) {
    $x->predikat_ipk();
}

?>

<body>

    <div class="container-fluid">

        <header class="p-3 mb-3 border-bottom mt-3 bg-light">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg> -->
                        <h2 class="h5">WEB 2</h2>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Review PHP
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Test1</a></li>
                                    <li><a class="dropdown-item" href="#">Test2</a></li>
                                    <li><a class="dropdown-item" href="#">Test3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP 5 OOP
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Test1</a></li>
                                    <li><a class="dropdown-item" href="#">Test2</a></li>
                                    <li><a class="dropdown-item" href="#">Test3</a></li>
                                </ul>
                            </div>
                        </li>


                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                        </form>
                        <button style="background-color: white; border: 1px solid gray;" type="submit" class="btn">Submit</button>
                    </ul>


                    <div class="dropdown text-end">
                        <button class="btn" type="button">
                            Login
                        </button>
                    </div>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Test1</a></li>
                            <li><a class="dropdown-item" href="#">Test2</a></li>
                            <li><a class="dropdown-item" href="#">Test3</a></li>
                        </ul>
                    </div>
                </div>
            </div>


    </div>
    </header>


    <div class="container">
        <div class="container mt-5">


            <table class="table table-bordered data">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">NIM</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Prodi</th>
                        <th class="text-center" scope="col">Thn Angkatan</th>
                        <th class="text-center" scope="col">IPK</th>
                        <th class="text-center" scope="col">Predikat</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($maha as $mhs) {
                        echo '<tr><td class="text-center">' . $nomor++ . '<br>';
                        echo '<td class="text-center">' . $mhs->nim . '</br>';
                        echo '<td class="text-center">' . $mhs->nama . '</br>';
                        echo '<td class="text-center">' . $mhs->prodi . '</br>';
                        echo '<td class="text-center">' . $mhs->thn_angkatan . '</br>';
                        echo '<td class="text-center">' . $mhs->ipk . '</br>';
                        echo '<td>' . $mhs->predikat_ipk() . '</td>';
                        echo ' <td width="10%" class="text-center"">
                                <i style="margin-left:-10px;" class="bi bi-pen"></i>
                                <i style="margin-left:10px;" class="bi bi-eye"></i>
                                </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <footer class="footer fixed-bottom py-3">
        <div class="container-fluid">
            <h5 style="font-size: 20px;">Lab Pemprograman Web Lanjutan</h5>
            <span style="font-size: 15px;">Dosen: Sirojul Munir S.Si,M.Kom</span>
            <br>
            <span style="font-size: 15px;">STT-NF - Kampus B</span>
        </div>
    </footer>


    </div>

    <script>
        $(document).ready(function() {
            $('.data').DataTable();
        });
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>