<?php

$nama_siswa = $_POST['namalengkap'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilaiuts'];
$nilai_uas = $_POST['nilaiuas'];
$nilai_tugas = $_POST['nilaitugas'];

echo '<br/>Nama : ' . $nama_siswa;
echo '<br/>Mata Kuliah : ' . $mata_kuliah;
echo '<br/>';

echo '<br/>Nilai UTS : ' . $nilai_uts;
echo '<br/>Nilai UAS : ' . $nilai_uas;
echo '<br/>Nilai Tugas : ' . $nilai_tugas;
echo '<br/>';

$count_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;

$get_nilai = $count_nilai / 3;

echo '<br/>';


if ($get_nilai >= 85 && $get_nilai <= 100) {
    echo 'Total Nilai : ' . number_format($get_nilai, 2, ',', ',',) . ' <br> Grade = A.  <br> Keterangan = Sangat Memuaskan. ';
} else if ($get_nilai >= 70 && $get_nilai <= 84) {
    echo 'Total Nilai : ' . number_format($get_nilai, 2, ',', ',',) . ' <br> Grade = B.  <br> Keterangan = Memuaskan. ';
} else if ($get_nilai >= 56 && $get_nilai <= 69) {
    echo 'Total Nilai : ' . number_format($get_nilai, 2, ',', ',',) . ' <br> Grade = C.  <br> Keterangan = Cukup. ';
} else if ($get_nilai >= 36 && $get_nilai <= 55) {
    echo 'Total Nilai : ' . number_format($get_nilai, 2, ',', ',',) . ' <br> Grade = D.  <br> Keterangan = Kurang. ';
} else if ($get_nilai >= 1 && $get_nilai <= 35) {
    echo 'Total Nilai : ' . number_format($get_nilai, 2, ',', ',',) . ' <br> Grade = E.  <br> Keterangan = Sangat Kurang
. ';
} else if ($get_nilai <= 0 && $get_nilai <= 100) {
    echo 'Total Nilai : ' . number_format($get_nilai, 2, ',', ',',) . ' <br> Grade = .  <br> Keterangan = Tidak ada
. ';
}
