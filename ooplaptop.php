<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   var $pemilik;
   var $merk;
   var $ukuran_layar;
  
   // buat method untuk class laptop
   function Hidupkan_laptop() {
     return "Hidupkan Laptop";
    }
   function Matikan_laptop() {
     return "Matikan Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
  
// set property
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";
$laptop_anto->ukuran_layar="15 inchi";
  
// tampilkan property
echo "Pemilik Laptop : ".$laptop_anto->pemilik;
echo "<br />";
echo "Merk Laptop : ".$laptop_anto->merk;
echo "<br />";
echo "Ukuran Layar Laptop : ".$laptop_anto->ukuran_layar;
echo "<br />";
  
// tampilkan method
echo $laptop_anto->Hidupkan_laptop();
echo "<br />";
echo $laptop_anto->Matikan_laptop();
?>