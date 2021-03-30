<?php 

class BmiPasien {
    public $nama;
    public $umur;
    public $jenisKelamin;
    public $berat;
    public $tinggi;
    public $bmi;

    public function __construct($nama, $umur, $jenisKelamin, $berat, $tinggi)
    {
        $this->nama = isset($_POST['nama']) ? $_POST['nama'] : $nama;
        $this->umur = isset($_POST['umur']) ? $_POST['umur'] : $umur;
        $this->jenisKelamnin = isset($_POST['jenisKelamin']) ? $_POST['jenisKelamin'] : $jenisKelamin;
        $this->berat = isset($_POST['berat']) ? $_POST['berat'] : $berat;
        $this->tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : $tinggi;
    }

    public function setBerat($berat) {
        $this->berat = $berat;
    }

    public function getBerat() {
        return $this->berat;
    }

    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }

    public function getTinggi() {
        return $this->tinggi;
    }

    public function hasilBMI() {
        $bmi = round($this->berat / (($this->tinggi / 100) * ($this->tinggi / 100)), 2);
        return $bmi;
    }

    public function statusBMI() {
        if ($this->hasilBMI()<18.5) {
            return 'Kekurangan Berat Badan';
        } elseif ($this->hasilBMI()>18.5 && $this->hasilBMI()<24.5) {
            return 'Berat Badan Ideal';
        } elseif ($this->hasilBMI()>24.5 && $this->hasilBMI()<29.9) {
            return 'Kelebihan Berat Badan';
        } else {
            return 'Kegemukan';
        }
    }

    
}

$data1 = new BmiPasien("Aldi Akbar Alimi", 19, "Laki - laki",  48, 173);
$data2 = new BmiPasien("Alvina Azharani Amanda", 21, "Perempuan",  46, 165);
$data3 = new BmiPasien($_POST["nama"], $_POST['umur'], $_POST['jenisKelamin'], $_POST['berat'], $_POST['tinggi']);

$data = [$data1, $data2];
?>

