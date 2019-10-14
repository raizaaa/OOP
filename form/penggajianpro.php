<?php
class Gajian{
    public $nama;
    public $nip;
    public $alamat;
    public $habek;
    public function __construct($nama,$nip,$alamat,$habek)
    {
        $this->nama=$nama;
        $this->nip=$nip;
        $this->alamat=$alamat;
        $this->habek=$habek;
    }
    public function Datadiri(){
        return "Nama : $this->nama <br>
                NIP : $this->nip <br>
                Alamat : $this->alamat <br>
                Hari Bekerja : $this->habek";
    }
    public function Gajikotor(){
        $gator = $this->habek * 75000;
        return "Gaji Kotor : Rp $gator";
    }
    public function Gajibersih(){
        $gaber = ($this->habek * 75000)-(($this->habek * 75000)*0.025);
        // var_dump (($this->habek * 75000)*0.025);
        return "Gaji Bersih : Rp $gaber";
    }
}
if (isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['nip'];
    $c = $_POST['alamat'];
    $d = $_POST['habek'];
}
?>
<html>
<head>
    <title>Output Gaji Karyawan</title>
</head>
<body>
    <fieldset>
    <legend align="center">
    <h4>Output Gaji Karyawan</h4>
    </legend>   
    <?php
    $karyawan = new Gajian($a,$b,$c,$d);
    echo $karyawan->Datadiri();
    echo "<br>";
    echo $karyawan->Gajikotor();
    echo "<br>";
    echo $karyawan->Gajibersih();
    ?>
    </fieldset>
</body>
</html>

