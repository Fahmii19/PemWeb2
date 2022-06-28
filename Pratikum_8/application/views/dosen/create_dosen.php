<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dosen</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $judul ?></h3>


                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <?php
                if (validation_errors() != false) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php
                }
                ?>

                <form method="post" action="<?php echo base_url(); ?>dosen/save_dosen">

                    <div class="form-group">
                        <label for="nim">nidn</label>
                        <input type="number" class="form-control" id="nidn" name="nidn" placeholder="Masukan nidn">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="custom-select rounded-0" name="jk">
                            <option value="">Pilih</option>
                            <option value="Laki">Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Prodi</label>
                        <select class="custom-select rounded-0" name="prodi" id="exampleSelectRounded0">
                            <option value="">Pilih</option>
                            <option value="TI">Teknik Informatika</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="BS">Bisnis Digital</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Pendidikan Akhir</label>
                        <select class="custom-select rounded-0" name="pendidikan_akhir" id="exampleSelectRounded0">
                            <option value="">Pilih</option>
                            <option value="SI">SI</option>
                            <option value="S2">S2</option>
                        </select>
                    </div>

            </div>
            <!-- /.card -->

            <div class="card-footer">
                <button name="kirim" type="submit" class="btn btn-primary">Simpan</button>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->