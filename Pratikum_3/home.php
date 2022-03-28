<?php
include_once 'atas.php';
?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <!--START CONTENT  -->
        <div class="container mt-3">

            <div class="container py-4">
                <header class="pb-3 mb-4 border-bottom">
                    <span class="fs-4">Form Penilaian Siswa</span>
                    </a>
                </header>


                <form class="text-center" method="POST" action="aksi_logika_nilai.php">

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
                            <label class="form-label">Mata Kuliah</label>
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
                            <input type="number" class="form-control w-50" required name="nilaiuts" placeholder="Nilai UTS">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <div class="col-md-2">
                            <label for="nilaiuas" class="form-label">Nilai UAS</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control w-50" required name="nilaiuas" placeholder="Nilai UAS">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <div class="col-md-2">
                            <label class="form-label">Tugas</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control w-50" required name="nilaitugas" placeholder="Nilai Tugas">
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
        <!--END CONTENT  -->

    </div>
</main>


<?php
require_once 'bawah.php';
?>