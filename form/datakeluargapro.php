<?php
class Data{
    public $nama;
    public $nik;
    public $alamat;
    public $umur;
    public function __construct($nama,$nik,$alamat,$umur)
    {
        $this->nama=$nama;
        $this->nik=$nik;
        $this->alamat=$alamat;
        $this->umur=$umur;
    }
    public function Datakeluarga(){
    for ($x=0; $x < count($this->nama); $x++) { 
                echo "Nama : ".$this->nama[$x]."<br>"; 
                echo "NIK : ".$this->nik[$x]."<br>"; 
                echo "Alamat : ".$this->alamat[$x]."<br>"; 
                echo "Umur : ".$this->umur[$x]."<br>";
                echo "<hr>";
            }
    }
}
if (isset($_POST['sbm'])) {
        $a = $_POST['nama'];
        $b = $_POST['nik'];
        $c = $_POST['alamat'];
        $d = $_POST['umur'];
}
    $keluarga = new Data($a,$b,$c,$d);
    echo $keluarga->Datakeluarga();
?>