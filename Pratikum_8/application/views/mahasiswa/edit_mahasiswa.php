<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Mahasiswa</li>
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

                <form method="post" action="<?php echo base_url(); ?>mahasiswa/aksi_edit">
                    <input type="hidden" name="id" value="<?php echo $mahasiswa->id; ?>">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa->nim; ?>" placeholder="Masukan NIM">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa->nama; ?>" placeholder="Masukan Nama">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="custom-select rounded-0" name="jk">
                            <option value="Laki" <?php echo ($mahasiswa->jk ? 'Laki' : 'selected'); ?>>Laki</option>
                            <option value="Perempuan" <?php echo ($mahasiswa->jk ? 'Perempuan' : 'selected'); ?>>Perempuan</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="tempatlahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $mahasiswa->tgl_lahir; ?>" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $mahasiswa->tempat_lahir; ?>" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Prodi</label>
                        <select class="custom-select rounded-0" name="prodi" id="exampleSelectRounded0">
                            <option value="TI" <?php echo ($mahasiswa->prodi ? 'TI' : 'selected'); ?>>Teknik Informatika</option>
                            <option value="SI" <?php echo ($mahasiswa->prodi ? 'SI' : 'selected'); ?>>Sistem Informasi</option>
                            <option value="BS" <?php echo ($mahasiswa->prodi ? 'BS' : 'selected'); ?>>Bisnis Digital</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ipk">IPK</label>
                        <input type="text" class="form-control" value="<?php echo $mahasiswa->ipk; ?>" name="ipk" id="ipk" placeholder="IPK">
                    </div>


            </div>
            <!-- /.card -->

            <div class="card-footer">
                <button name="kirim" type="submit" class="btn btn-success">Simpan</button>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->