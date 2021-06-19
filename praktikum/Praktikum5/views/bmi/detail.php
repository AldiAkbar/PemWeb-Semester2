<div class="container">
    <h2>Data Pasien #ID : <?=$pasien['id'];?></h2>
    <div>
        <table class="table table-striped">
            <tr>
                <td>Kode Pasien</td><td>:</td><td><?=$pasien['kode'];?></td>
            </tr>
            <tr>
                <td>Nama</td><td>:</td><td><?=$pasien['nama'];?></td></tr>
            <tr>
                <td>Gender</td><td>:</td><td><?=$pasien['gender'];?></td>
            </tr>
                <td>Tinggi</td><td>:</td><td><?=$bmi['tinggi'];?></td>
            <tr>
                <td>Berat</td><td>:</td><td><?=$bmi['berat'];?></td>
            </tr>
            <tr>
                <td>BMI</td><td>:</td><td><?=$bmi['bmi'];?></td>
            </tr>
            <tr>
                <td>Status BMI</td><td>:</td><td><?=$bmi['status_bmi'];?></td>
            </tr>
        </table>
        <a href="<?= base_url('Praktikum5/Bmi_pasien') ?>" class="btn btn-primary">Back</a>
    </div>
</div>