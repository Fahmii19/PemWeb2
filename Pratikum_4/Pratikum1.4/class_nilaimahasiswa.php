<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nilai Mahasiswa</title>

</head>


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



    <div class="container-fluid">
        <h5>Form Nilai Ujian</h5>
        <hr>

        <form action="#" method="post">

            <div class="d-flex justify-content-center ">
                <div class="col-md-2">
                    <label class="form-label fw-bold">NIM</label>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="nim" required name="NIM Anda" placeholder="Masukan NIM">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Nama</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nama" required name="NIM Anda" placeholder="Masukan Nama">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Pilih Matkul</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" required name="matkul">
                        <option selected>- Pilih Matkul - </option>
                        <option value="DDP">Dasar-Dasar Pemprograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemprograman Web</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Nilai</label>
                </div>
                <div class="col-md-6">
                    <input type="number" required class="form-control" name="nilai" placeholder="Nilai">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" name="submit">Kirim</button>
                    <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:white;" href="class_nilaimahasiswa.php">Reset Data</a></button>
                </div>
            </div>

        </form>

        <hr>

        <?php

        require_once "proses_mahasiswa.php";

        $data  = new NilaiMahasiswa($_POST['nim'] ?? '', $_POST['nama'] ?? '', $_POST['matkul'] ?? '', $_POST['nilai'] ?? '');

        $data->hasil();

        echo "<br/><b>Hasil Ujian</b> : " . $data->grade();
        echo "<br/><b>Grade</b> : " . $data->kelulusan();

        ?>

        <hr>

    </div>


    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-light fix-bottom">
        <div class="container-fluid">
            <h5 style="font-size: 20px;">Lab Pemprograman Web Lanjutan</h5>
            <span style="font-size: 15px;">Dosen: Sirojul Munir S.Si,M.Kom</span>
            <br>
            <span style="font-size: 15px;">STT-NF - Kampus B</span>
        </div>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>