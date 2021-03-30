<?php include_once 'templates/header.php'; ?>    
    <section class="form">
        <div class="container mt-4">
            
            <div class="col mb-4 ml-5">
                <h2>Form Isian Indeks Masa Tubuh (BMI)</h2>
            </div>

            <form action="evaluasi.php" method="post">
                <input type="hidden" name="id" id="id">

                <div class="form-group row">
                    <label for="nama" class="col-sm-2"><strong>Nama </strong> </label>
                    <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama..." autocomplete>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-sm-2"><strong>Umur </strong> </label>
                    <div class="col-sm-6">
                        <input type="number" name="umur" class="form-control" id="umur" placeholder="Masukkan umur..." autocomplete>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berat" class="col-sm-2"><strong>Berat Badan </strong> </label>
                    <div class="col-sm-6">
                        <div class="input-group-append">
                            <input type="number" name="berat" class="form-control" id="berat" placeholder="Masukkan berat badan.." autocomplete>
                            <span class="input-group-text">Kg</span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tinggi" class="col-sm-2"><strong> Tinggi Badan </strong> </label>
                    <div class="col-sm-6">
                        <div class="input-group-append">
                            <input type="number" name="tinggi" class="form-control" id="tinggi" placeholder="Masukkan tinggi badan.." autocomplete>
                            <span class="input-group-text">Cm</span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenisKelamin" class="col-sm-2"><strong> Jenis Kelamin </strong> </label>
                    <div class="col-sm-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="radio" value="Laki - laki">
                            <label class="form-check-label" for="jenisKelamin">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="radio" value="Perempuan">
                            <label class="form-check-label" for="jenisKelamin">Perempuan</label>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primary tombol" name="submit">Submit</button>
                </div>
            
            </form>
        
        </div>
    </section>
<?php include_once 'templates/footer.php'; ?>    