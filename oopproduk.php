<?php
class Televisi {
  
   var $pemilik;
   var $merk;
   var $harga;
  
   // buat method untuk class laptop
   function Hidupkan_Tv() {
     return "Televisi Bisa DiNyalakan Menggunakan Remote Yang Cocok";
    }
   function Matikan_Tv() {
     return "Televisi Bisa DiMatikan Menggunakan Remote Yang Cocok";
   }
}
  
$tv1 = new Televisi();
$tv1->pemilik="Keiza";
$tv1->merk="Lg";
$tv1->harga="15.000.000";


$tv2 = new Televisi();
$tv2->pemilik="Veronica";
$tv2->merk="Sharp";
$tv2->harga="16.000.000";


echo "Pemilik Laptop : ".$tv1->pemilik;
echo "<br>";
echo "Merk Laptop : ".$tv1->merk;
echo "<br>";
echo "Ukuran Layar Laptop : ".$tv1->harga;
echo "<br>";
echo $tv1->Hidupkan_Tv();
echo "<br>";
echo $tv1->Matikan_Tv();
echo "<br><br>";

echo "Pemilik Laptop : ".$tv2->pemilik;
echo "<br>";
echo "Merk Laptop : ".$tv2->merk;
echo "<br>";
echo "Ukuran Layar Laptop : ".$tv2->harga;
echo "<br>";
echo $tv2->Hidupkan_Tv();
echo "<br>";
echo $tv2->Matikan_Tv();
?>