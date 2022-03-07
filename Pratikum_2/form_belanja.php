<?php

// $nama_siswa = $_POST['customer'];
// $mata_kuliah = $_POST['matkul'];
// $nilai_uts = $_POST['nilaiuts'];

// echo '<br/>Nama : ' . $nama_siswa;
// echo '<br/>Mata Kuliah : ' . $mata_kuliah;
// echo '<br/>';

// echo '<br/>Nilai UTS : ' . $nilai_uts;
// echo '<br/>Nilai UAS : ' . $nilai_uas;
// echo '<br/>Nilai Tugas : ' . $nilai_tugas;
// echo '<br/>';

if (isset($_POST['proses'])) {

    $tv = 4200000;
    $kulkas = 3100000;
    $mesincuci = 3800000;

    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];


    echo '<p>Nama Customer : ' . $customer . '</p>';
    echo '<p>Produk Pilihan : ' . $produk . '</p>';
    echo '<p>Jumlah Beli : ' . $jumlah . '</p>';

    if ($produk == "TV") {
        $count = $jumlah * $tv;
        echo '<p>Total Belanja : Rp.' . number_format($count) . '</p>';
    } else if ($produk == "KULKAS") {
        $count = $jumlah * $kulkas;
        echo '<p>Total Belanja : Rp.' . number_format($count) . '</p>';
    } else if ($produk == "MESIN CUCI") {
        $count = $jumlah * $mesincuci;
        echo '<p>Total Belanja : Rp.' . number_format($count) . '</p>';
    }
}
