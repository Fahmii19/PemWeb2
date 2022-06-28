<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Halaman Dosen</li>
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
                <a href="<?php echo base_url(); ?>dosen/create_dosen" type="button" class="ml-2 btn btn-success">Tambah</a>
                <h3 class="card-title">Daftar Dosen</h3>

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
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIDN</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>prodi</th>
                                    <th>Pendidikan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                foreach ($dosen as $dsn) {
                                ?>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $dsn->nidn ?></td>
                                        <td><?= $dsn->nama ?></td>
                                        <td><?= $dsn->jk ?></td>
                                        <td><?= $dsn->tempat_lahir ?></td>
                                        <td><?= $dsn->prodi ?></td>
                                        <td><?= $dsn->pendidikan_akhir ?></td>
                                        <td>
                                            <a href="dosen/edit_dosen/<?= $dsn->id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <a href="dosen/delete?id=<?= $dsn->id ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Try To Be Better
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->