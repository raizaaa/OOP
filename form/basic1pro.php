<?php
class Aritmatika{
    public $bil1;
    public $bil2;
    public function __construct($bil1,$bil2)
    {
        $this->bil1=$bil1;
        $this->bil2=$bil2;
    }
    public function tambah(){
        $tambah = $this->bil1 + $this->bil2;
        return "Hasil Pertambahan Dari $this->bil1 + $this->bil2 = $tambah";
    }
    public function kurang(){
        $kurang = $this->bil1 - $this->bil2;
        return "Hasil Pengurangan Dari $this->bil1 - $this->bil2 = $kurang";
    }
    public function kali(){
        $kali = $this->bil1 * $this->bil2;
        return "Hasil Perkalian Dari $this->bil1 x $this->bil2 = $kali";
    }
    public function bagi(){
        $bagi = $this->bil1 / $this->bil2;
        return "Hasil Pembagian Dari $this->bil1 : $this->bil2 = $bagi";
    }
}
if (isset($_POST['simpan'])) {
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];
}
?>
<html>
<head>
    <title>Aritmatika</title>
</head>
<body>
    <fieldset>
    <legend align="center">
    <h4>Hasil Perhitungan</h4>
    </legend>   
    <?php
    $hasil = new Aritmatika($a,$b);
    echo $hasil->tambah();
    echo "<br>";
    echo $hasil->kurang();
    echo "<br>";
    echo $hasil->kali();
    echo "<br>";
    echo $hasil->bagi();
    ?>
    </fieldset>
</body>
</html>