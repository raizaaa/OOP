<?php
class Lingkaran
{
    public $pi = 3.14;
    public $jari;
    private $luas;
    private $keliling;
   
    public function __construct($jari) {
        return $this->jari = $jari;
    }
    public function Hitung_Luas()
    {
        $luas = $this->pi * $this->jari * $this->jari;
        return $luas;
    echo "Jari Jari Lingkaran  = $bulat->jari<br>";
    echo "Luas Lingkaran = ". $bulat->Hitung_Luas() ."<br>";
    echo "Keliling Lingkaran = ". $bulat->Hitung_Keliling() ."<br>";
    }
    public function Hitung_Keliling()
    {
        $keliling = 2 * ($this->pi * $this->jari);
        return $keliling;
    }
}
    $bulat = new Lingkaran(10);
    echo "Jari Jari Lingkaran  = $bulat->jari<br>";
    echo "Luas Lingkaran = ". $bulat->Hitung_Luas() ."<br>";
    echo "Keliling Lingkaran = ". $bulat->Hitung_Keliling() ."<br>";