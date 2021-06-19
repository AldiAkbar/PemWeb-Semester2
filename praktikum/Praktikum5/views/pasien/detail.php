<div class="container">
    <h2>Data Pasien #ID : <?=$detail_pasien['id'];?></h2>
    <div>
        <table class="table table-striped">
            <tr>
                <td>Kode Pasien</td><td>:</td><td><?=$detail_pasien['kode'];?></td>
            </tr>
            <tr>
                <td>Nama</td><td>:</td><td><?=$detail_pasien['nama'];?></td></tr>
            <tr>
                <td>Gender</td><td>:</td><td><?=$detail_pasien['gender'];?></td>
            </tr>
            <tr>
                <td>Tempat, Tgl Lahir</td><td>:</td><td><?=$detail_pasien['tmp_lahir'];?>, <?=$detail_pasien['tgl_lahir'];?></td>
            </tr>
            <tr>
                <td>Email</td><td>:</td><td><?=$detail_pasien['email'];?></td>
            </tr>
        </table>
        <a href="<?= base_url('Praktikum5/Pasien') ?>" class="btn btn-primary">Back</a>
    </div>
</div>