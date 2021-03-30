<?php

include_once 'templates/header.php';
require_once 'class_bmiPasien.php';

session_start();
if (!isset($_POST['submit'])) {
    header("Location: form.php");
    exit;
} else {
    $_SESSION['nama'] = $data3->nama;
    $_SESSION['jenisKelamin'] = $data3->jenisKelamnin;
    $_SESSION['umur'] = $data3->umur;
    $_SESSION['berat'] = $data3->berat;
    $_SESSION['tinggi'] = $data3->tinggi;
    $_SESSION['hasilBMI'] = $data3->hasilBMI();
    $_SESSION['statusBMI'] = $data3->statusBMI();
}

?>
    <section class="evaluasi">
        <div class="container">

            <h4 class="judul justify-content-center">
                Hasil Evaluasi BMI
            </h4>
            <div class="hasil">
                <ul>
                    <li>
                        <label for="nama" class="col-sm-3"><strong>Nama </strong> </label>
                        <label for="hasilNama" class="col-sm-6"> <strong> : </strong> <?= $data3->nama; ?></label>
                    </li>
                    <li>
                        <label for="jenisKelamin" class="col-sm-3"><strong>Jenis Kelamin </strong> </label>
                        <label for="hasiljenisKelamin" class="col-sm-6"> <strong> : </strong> <?= $data3->jenisKelamnin; ?></label>
                    </li>
                    <li>
                        <label for="berat-tinggi" class="col-sm-3"><strong>Berat / Tinggi Badan </strong> </label>
                        <label for="hasilBerat-Tinggi" class="col-sm-6"> <strong> : </strong> <?= $data3->berat; ?> Kg / <?= $data3->tinggi; ?> Cm</label>
                    </li>
                    <li>
                        <label for="umur" class="col-sm-3"><strong>Umur </strong> </label>
                        <label for="hasilUmur" class="col-sm-6"> <strong> : </strong> <?= $data3->umur; ?> Tahun</label>
                    </li>
                    <li>
                        <label for="umur" class="col-sm-3"><strong>BMI </strong> </label>
                        <label for="hasilUmur" class="col-sm-6"> <strong> : </strong> <?= $data3->hasilBMI(); ?></label>
                    </li>
                    <li>
                        <label for="umur" class="col-sm-3"><strong>Status </strong> </label>
                        <label for="hasilUmur" class="col-sm-6"> <strong> : </strong> <?= $data3->statusBMI(); ?></label>
                    </li>

                </ul>
                
                <div class="col">
                    <a href="result.php" type="button" class="btn btn-primary tombol" name="submit">Submit</a>
                </div>
                    
            </div>
        </div>

    </section>
<?php include_once 'templates/footer.php'; ?>    