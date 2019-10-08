<?php
 
class Saya{
    public $nama = "Keiza Veronica Alexandra";
    public $fc = "Nayeon (Twice)";
    protected $alamat = "Korea";
    Private $fandom ="Army";

    public function Fandom() {
      return $this->fandom;
   }
} 

class Fambest extends Saya{
   public function alamat() {
     return $this->alamat;
   }
}
  

$namaa = new Saya();
$epce = new Saya();
$alamaat = new Fambest();
$fandomm = new Saya();
  

echo "Nama : ".$namaa->nama."<br>";
echo "Face Claim : ".$epce->fc."<br>";
echo "Alamat : ".$alamaat->alamat()."<br>";
echo "Fandom : ".$fandomm->Fandom();
?>