<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
            <form action="array_siswa.php" method="POST">
            <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="nama"><strong>Nama: </strong> </label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama..." autocomplete>
                        <label for="nim"><strong>NIM: </strong> </label>
                        <input type="number" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM..." autocomplete>
                        <label for="matkul"><strong>Mata Kuliah: </strong> </label>
                        <select class="form-control" name="mata-kuliah" id="matkul">
                            <option value="Basis Data">Basis Data</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                            <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="PPKn">PPKn</option>
                        </select>
                        <label for="nilai UTS"><strong>nilai UTS: </strong> </label>
                        <input type="number" name="nilai-uts" class="form-control" id="nilai_uts" placeholder="Masukkan nilai UTS..." autocomplete>
                        <label for="nilai UAS"><strong>nilai UAS: </strong> </label>
                        <input type="number" name="nilai-uas" class="form-control" id="nilai_uas" placeholder="Masukkan nilai UAS..." autocomplete>
                        <label for="nilai TUGAS / PRAKTIKUM"><strong>nilai TUGAS / PRAKTIKUM: </strong> </label>
                        <input type="number" name="nilai-tugas" class="form-control" id="nilai_tugas" placeholder="Masukkan nilai TUGAS / PRAKTIKUM..." autocomplete>
                    </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tombol" name="submit">Submit</button>
                </div>
            </form>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html> -->


<?php
$x = 1;

do {
  echo $x." ";
  $x++;
} while ($x > 2);
?>