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

                NIM : <?= $mahasiswa->nim ?> <br />
                Nama Lengkap : <?= $mahasiswa->nama ?> <br />
                Jenis Kelamin : <?= $mahasiswa->jk ?> <br />
                Tempat Lahir : <?= $mahasiswa->tempat_lahir ?> <br />
                Tanggal Lahir : <?= $mahasiswa->tgl_lahir ?> <br />
                Program Studi : <?= $mahasiswa->prodi ?> <br />
                Indeks Prestasi : <?= $mahasiswa->ipk ?> <br />

            </div>
            <!-- /.card -->

            <div class="card-footer">
                <!-- <button name="kirim" type="submit" class="btn btn-primary">kembali</button> -->
                <a href="<?= site_url('mahasiswa') ?>" class="btn btn-primary">Kembali</a>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->