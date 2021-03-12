<?php

$nilaiuts = (30 * $_GET["nilai-uts"]) / 100;
$nilaiuas = (35 * $_GET["nilai-uas"]) / 100;
$nilaitugas = (35 * $_GET["nilai-tugas"]) / 100;


if (!isset($_GET['submit'])) {
    header("Location: form_nilai.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Daftar Nilai Siswa</h2>
        <table border="1" width="100%" class="text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Mata Kuliah</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>

            <tbody>
                <td>1</td>
                <td><?= $_GET["nama"]; ?></td>
                <td><?= $_GET["nim"]; ?></td>
                <td><?= $_GET["mata-kuliah"]; ?></td>
                <td><?= $_GET["nilai-uts"]; ?></td>
                <td><?= $_GET["nilai-uas"]; ?></td>
                <td><?= $_GET["nilai-tugas"]; ?></td>
                <td><?= $nilaiuts + $nilaiuas + $nilaitugas; ?></td>
            </tbody>
        </table>

        <div class="modal-footer">
            <a href="form_nilai.php"><button type="submit" class="btn btn-primary tombol" name="submit">Kembali</button></a>
        </div>
    </div>


    <link rel="stylesheet" href="js/bootstrap.min.js">
</body>

</html>