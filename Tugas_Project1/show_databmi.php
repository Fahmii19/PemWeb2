<?php

require_once 'proses/proses_bmi.php';


include('partial/head.php');

include('partial/sidebar.php');

$no = 1;
$huruf = "RS-FAHMI-";
$kodeRS = $huruf . sprintf("%03s", $no);
$no++;
// var_dump($kodeRS);

$tanggal = $_POST['tanggal'] ?? '';
$nama = $_POST['nama'] ?? '';
$umur = $_POST['umur'] ?? '';
$jenis_kelamin = $_POST['jk'] ?? '';
$berat = $_POST['bb'] ?? '';
$tinggi = $_POST['tb'] ?? '';


$pasien = new Bmi_pasien($nama, $umur, $jenis_kelamin, $berat, $tinggi, $tanggal);

$berat_massa = $pasien->getBmi();

$convert_bb = number_format($pasien->getBerat(), 1);

$pasien1 = ['tanggal' => '16-04-2022', 'nama' => 'Fahmi', 'umur' => 22, 'jk' => 'Pria', 'bb' => 55.7, 'tb' => 181, 'bmi' => 16.8, 'status' => 'Kekurangan Berat Badan'];

$getByInput = ['tanggal' => $pasien->getTgl(), 'nama' => $pasien->getNama(), 'umur' => $pasien->getUmur(), 'jk' => $pasien->getJk(), 'bb' => $convert_bb, 'tb' => $pasien->getTinggi(), 'bmi' => $pasien->getBmi(), 'status' => $pasien->getStatus($berat_massa)];

$data_pasien = [$pasien1, $getByInput];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Project 1</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Halaman Utama</li>
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
                <h3 class="card-title">Hasil Menghitung BMI</h3>

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


                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Hasil Data Body Mass Index(BMI)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Gender</th>
                                    <th>Berat</th>
                                    <th>Tinggi</th>
                                    <th>BMI</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                foreach ($data_pasien as $x) {
                                    echo '<tr>';
                                    echo '<td>' . $nomor++ . '</td>';
                                    echo '<td>' . $x['tanggal'] . '</td>';
                                    echo '<td>' . $kodeRS . '</td>';
                                    echo '<td>' . $x['nama'] . '</td>';
                                    echo '<td>' . $x['umur'] . '</td>';
                                    echo '<td>' . $x['jk'] . '</td>';
                                    echo '<td>' . $x['bb'] . '</td>';
                                    echo '<td>' . $x['tb'] . '</td>';
                                    echo '<td>' . $x['bmi'] . '</td>';
                                    echo '<td>' . $x['status']  . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>

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

<?php

include('partial/footer.php');

?>