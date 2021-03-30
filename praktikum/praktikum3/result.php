<?php
session_start();

error_reporting(0);
ini_set('display_errors', 0);

include_once 'templates/header.php';
require_once 'class_bmiPasien.php';    

?>
    <div class="container-fluid">
        <h2>Daftar Nilai BMI</h2>
        <table border="1" class="text-center" style="width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Tinggi (Cm)</th>
                    <th>Berat (Kg)</th>
                    <th>BMI</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach($data as $d) : ?>
            <tbody>
                <td><?= $i; ?></td>
                <td><?= $d->nama; ?></td>
                <td><?= $d->jenisKelamnin; ?></td>
                <td><?= $d->umur; ?></td>
                <td><?= $d->tinggi; ?></td>
                <td><?= $d->berat; ?></td>
                <td><?= $d->hasilBMI(); ?></td>
                <td><?= $d->statusBMI(); ?></td>
            </tbody>
            <?php $i++; ?>
            <?php endforeach ?>
            <tbody>
                <td><?= 3 ?></td>
                <td><?= $_SESSION['nama']; ?></td>
                <td><?= $_SESSION['jenisKelamin']; ?></td>
                <td><?= $_SESSION['umur']; ?></td>
                <td><?= $_SESSION['tinggi']; ?></td>
                <td><?= $_SESSION['berat']; ?></td>
                <td><?= $_SESSION['hasilBMI']; ?></td>
                <td><?= $_SESSION['statusBMI']; ?></td>
            </tbody>
            
        </table>

        <div class="modal-footer">
            <a href="form.php"><button type="submit" class="btn btn-primary" name="submit">Kembali</button></a>
        </div>
    </div>
    
<?php include_once 'templates/footer.php'; ?>    