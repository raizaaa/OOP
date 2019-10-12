<?php
class Komputer
{
    public $processor = "Intel Core I 7";
    public function __construct()
    {
        echo "Construct Dari Komputer <br>";
    }

    public function __destruct()
    {
        echo "Destruct Dari Komputer <br>";
    }
}

class Laptop extends Komputer
{
    public function __construct()
    {
        parent :: __construct();
        echo "Construct Dari Laptop <br>";
    }
    public function Spesifikasi()
    {
        echo "Spesifikasi Laptop <br>";
    }
    public function __destruct()
    {
        echo "Destruct Dari Laptop <br>";
        parent :: __destruct();
    }
}
$asus = new Laptop();
$asus->Spesifikasi();
echo $asus->processor."<br>";
?>