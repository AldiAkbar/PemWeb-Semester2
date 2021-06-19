<div class="container">
    
    <div class="col-md-12">
        <h3>
        Daftar BMI Pasien
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th><th>Kode</th><th>Nama</th><th>Gender</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach($pasien as $p){
                ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$p['kode'];?></td>
                    <td><?=$p['nama'];?></td>
                    <td><?=$p['gender'];?></td>
                    <td><a href="<?= base_url(). 'Praktikum5/Bmi_pasien/detail/' . $p['id'];; ?>">view</a></td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>

</div>