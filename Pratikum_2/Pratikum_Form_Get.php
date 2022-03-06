<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Form Processing</title>
</head>

<body>

    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2 fw-bold">Sistem Penilaian</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">

        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <span class="fs-4">Form Penilaian Siswa</span>
                </a>
            </header>


            <form class="text-center" method="GET" action="aksi_get_nilai.php">

                <div class="d-flex justify-content-center">
                    <div class="col-md-2">
                        <label class="form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" required name="namalengkap" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <div class="col-md-2">
                        <label class="form-label">Nama Lengkap</label>
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
                        <label class="form-label">Nilai UTS</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" required class="form-control w-50" name="nilaiuts" placeholder="Nilai UTS">
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <div class="col-md-2">
                        <label for="nilaiuas" class="form-label">Nilai UAS</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" required class="form-control w-50" name="nilaiuas" placeholder="Nilai UAS">
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <div class="col-md-2">
                        <label class="form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" required class="form-control w-50" name="nilaitugas" placeholder="Nilai Tugas">
                    </div>
                </div>

                <div class="row">
                    <div class="p-3 w-75">
                        <input type="submit" class="btn btn-primary" value="Simpan" name="proses_submit">
                    </div>
                </div>

            </form>

        </div>


    </div>


    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-light fix-bottom fixed-bottom">
        <p class="col-md-4 mb-0 px-5 text-muted">Create by @Fahmi 2021</p>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>