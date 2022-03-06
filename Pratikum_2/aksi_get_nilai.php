<?php

$proses = $_GET['proses_submit'];
$nama_siswa = $_GET['namalengkap'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilaiuts'];
$nilai_uas = $_GET['nilaiuas'];
$nilai_tugas = $_GET['nilaitugas'];

echo '<br/>Nama : ' . $nama_siswa;
echo '<br/>Mata Kuliah : ' . $mata_kuliah;
echo '<br/>';

echo '<br/>Nilai UTS : ' . $nilai_uts;
echo '<br/>Nilai UAS : ' . $nilai_uas;
echo '<br/>Nilai Tugas : ' . $nilai_tugas;
echo '<br/>';
