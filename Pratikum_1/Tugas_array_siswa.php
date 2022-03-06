<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tugas Array Siswa</title>
</head>

<body>


    <div class="container mt-3">

        <div class="alert alert-primary" role="alert">
            <span class="fw-bold">Daftar Nilai Siswa</span>
            <br>
            <small class="form-text text-muted">0110221015 - Muchamad Fahmi - TI16 </small>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $array_multidimensi = [
                    ['nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78],
                    ['nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68],
                    ['nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70],
                    ['nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82]
                ];

                $no = 1;

                foreach ($array_multidimensi as $array) {

                    $nilai_akhir = ($array['uts'] + $array['uas'] + $array['tugas']) / 3;

                    echo "<tr>";
                    echo "<td>" . $no . "</td>
                        <td>" . $array['nim'] . "</td>
                        <td>" . $array['uts'] . "</td>
                        <td>" . $array['uas'] . "</td>
                        <td>" . $array['tugas'] . "</td>
                        <td>" . number_format($nilai_akhir, 2, ',', ',',) . "</td>";
                    echo "</tr>";
                    $no++;
                }

                ?>

            </tbody>
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>