<?php
class Sekolah
{
    public $belajar = "Kelas XI RPL 1";
    public function __construct()
    {
        echo "Masuk Ke Gerbang Sekolah<br>";
    }

    public function __destruct()
    {
        echo "Keluar Dari Gerbang Sekolah <br>";
    }
}

class Kelas extends Sekolah
{
    public function __construct()
    {
        parent :: __construct();
        echo "Masuk Ke Kelas <br>";
    }
    public function Rb()
    {
        echo "Belajar Di ";
    }
    public function __destruct()
    {
        echo "Keluar Dari Kelas <br>";
        parent :: __destruct();
    }
}
$keiza = new Kelas();
$keiza->Rb();
echo $keiza->belajar."<br>";
?>