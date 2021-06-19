<div class="container">
    
    <div class="col-md-12">
        <h3>
        Daftar BMI Pasien
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th><th>Tanggal Periksa</th><th>Kode</th><th>Nama</th><th>Gender</th><th>Berat</th><th>Tinggi</th><th>BMI</th><th>Status BMI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach($list_pasien as $pasien){
                ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$pasien->tanggal?></td>
                    <td><?=$pasien->kode?></td>
                    <td><?=$pasien->nama?></td>
                    <td><?=$pasien->gender?></td>
                    <td><?=$pasien->berat?></td>
                    <td><?=$pasien->tinggi?></td>
                    <td><?=$pasien->bmi?></td>
                    <td><?=$pasien->statusbmi?></td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>

</div>