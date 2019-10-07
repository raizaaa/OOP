<?php
    class Rpl
    {
      public $WarnaTembok;
      public $JmlKursi;
      public $JmlMeja;
      public $PapanTulis;
      public $KipasAngin;
      public $lampu;  

      public function menyala()
      {
          return "untuk membantu menerangkan ruangan";
      }
      public function berputar()
      {
          return "untuk membantu menurunkan suhu ruangan";
      }
    }
    
    $rpl1 = new Rpl();
    $rpl1->Warnatembok = "Biru";
    $rpl1->JmlKursi = 20;
    $rpl1->JmlMeja = 10;
    $rpl1->PapanTulis = 1;
    $rpl1->KipasAngin = 1;
    $rpl1->lampu = 2;

    $rpl2 = new Rpl();
    $rpl2->Warnatembok = "Putih";
    $rpl2->JmlKursi = 30;
    $rpl2->JmlMeja = 15;
    $rpl2->PapanTulis = 1;
    $rpl2->KipasAngin = 2;
    $rpl2->lampu = 3;

    $rpl3 = new Rpl();
    $rpl3->Warnatembok = "Orange";
    $rpl3->JmlKursi = 40;
    $rpl3->JmlMeja = 20;
    $rpl3->PapanTulis = 1;
    $rpl3->KipasAngin = 3;
    $rpl3->lampu = 4;

    
    echo "Warna tembok bagian dalam adalah warna $rpl1->Warnatembok<br>";
    echo "$rpl1->KipasAngin Kipas angin ".$rpl1->berputar()."<br>";
    echo "$rpl1->lampu lampu ".$rpl1->menyala()."<br>";
    echo "Jumlah papan tulis dalam ruangan terdapat sebanyak $rpl1->PapanTulis buah papan tulis<br>";
    echo "Jumlah kursi dalam ruangan terdapat sebanyak $rpl1->JmlKursi buah kursi<br>";
    echo "Jumlah meja dalam ruangan terdapat sebanyak $rpl1->JmlMeja buah meja<br>";
    echo "<br><br><br>";


    echo "Warna tembok bagian dalam adalah warna $rpl2->Warnatembok<br>";
    echo "$rpl2->KipasAngin Kipas angin ".$rpl2->berputar()."<br>";
    echo "$rpl2->lampu lampu ".$rpl2->menyala()."<br>";
    echo "Jumlah papan tulis dalam ruangan terdapat sebanyak $rpl2->PapanTulis buah papan tulis<br>";
    echo "Jumlah kursi dalam ruangan terdapat sebanyak $rpl2->JmlKursi buah kursi<br>";
    echo "Jumlah meja dalam ruangan terdapat sebanyak $rpl2->JmlMeja buah meja<br>";
    echo "<br><br><br>";


    echo "Warna tembok bagian dalam adalah warna $rpl3->Warnatembok<br>";
    echo "$rpl3->KipasAngin Kipas angin ".$rpl3->berputar()."<br>";
    echo "$rpl3->lampu lampu ".$rpl3->menyala()."<br>";
    echo "Jumlah papan tulis dalam ruangan terdapat sebanyak $rpl3->PapanTulis buah papan tulis<br>";
    echo "Jumlah kursi dalam ruangan terdapat sebanyak $rpl3->JmlKursi buah kursi<br>";
    echo "Jumlah meja dalam ruangan terdapat sebanyak $rpl3->JmlMeja buah meja<br>";
?>