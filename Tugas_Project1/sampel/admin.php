<?php
require_once 'class.php';

$nama = $_POST['nama'];
$berat = $_POST['bb'];
$tinggi = $_POST['tb'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jk'];
$peserta = new Bmi_pasien($nama, $umur, $jenis_kelamin, $berat, $tinggi);
$berat_massa = $peserta->getBmi();
$berat_d = number_format($peserta->getBerat(), 1);

$peserta1 = ['nama' => 'Sukmayaji', 'umur' => 18, 'jk' => 'Pria', 'bb' => 60.2, 'tb' => 155, 'bmi' => 40.15, 'status' => 'Kegemukan/Obesitas'];
$peserta2 = ['nama' => 'Yazidul Yasar', 'umur' => 23, 'jk' => 'Wanita', 'bb' => 30.3, 'tb' => 165, 'bmi' => 26.5, 'status' => 'Normal/Ideal'];
$peserta3 = ['nama' => $peserta->getNama(), 'umur' => $peserta->getUmur(), 'jk' => $peserta->getJk(), 'bb' => $berat_d, 'tb' => $peserta->getTinggi(), 'bmi' => $peserta->getBmi(), 'status' => $peserta->getStatus($berat_massa)];

$array_data = [$peserta1, $peserta2, $peserta3];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <h3 class='my-3 ml-2'>Data BMI Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Gender</th>
                <th scope="col">Berat(kg)</th>
                <th scope="col">Tinggi(cm)</th>
                <th scope="col">BMI</th>
                <th scope="col">Hasil</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($array_data as $data) {

                echo '<tr>';
                echo '<td>' . $nomor . '</td>';
                echo '<td>' . $data['nama'] . '</td>';
                echo '<td>' . $data['umur'] . '</td>';
                echo '<td>' . $data['jk'] . '</td>';
                echo '<td>' . $data['bb'] . '</td>';
                echo '<td>' . $data['tb'] . '</td>';
                echo '<td>' . $data['bmi'] . '</td>';
                echo '<td>' . $data['status'] . '</td>';
                echo '</tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>