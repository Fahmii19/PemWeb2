<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Belanja Online</title>
</head>

<body>



    <div class="py-3">

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-9">
                        <header class="pb-3 mb-4 border-bottom">
                            <span class="fs-4">Form Belanja Online</span>
                            </a>
                        </header>

                        <div class="row">
                            <div class="col-md-2">
                                <label class="form-label fw-bold">Customer</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control w-50" required name="customer" placeholder="Masukan Nama Customer">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="form-label fw-bold">Pilih Produk</label>
                            </div>
                            <div class="col-md-6">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" required type="radio" name="produk" value="TV" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        TV
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" required type="radio" name="produk" value="KULKAS" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        KULKAS
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" required type="radio" name="produk" value="MESIN CUCI" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        MESIN CUCI
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="form-label fw-bold">Jumlah</label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control w-25" required name="jumlah" placeholder="Jumlah">
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-8">
                                <div class="w-25 text-end">
                                    <input type="submit" class="btn btn-success" value="Kirim" name="proses">
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header text-white bg-primary">
                                Daftar Harga
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">TV : Rp. 4.200.000</li>
                                <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
                                <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
                            </ul>
                            <div class="card-footer text-white bg-primary">
                                Harga Dapat Berubah Setiap Saat
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="container-fluid">
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <?php include 'form_belanja.php' ?>
                    </div>
                </div>

            </div>


        </form>



    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>