<?php
    // 1. Class adalah sebuah blueprint atau template untuk membuat instance dari object
    // 2. Class mendefinisikan object
    // 3. Class menyimpan data (Property) dan prilaku (Method)
    
    //Membuat class dengan nama Kucing
    class Kucing
    {
      //Membuat Property
      public $warna = "Biru";
      public $jml_kaki = 4;
      public $mkn_fav = "Ikan Tuna";  

      //Membuat Method dengan nama bersuara
      public function bersuara()
      {
          return "Miaww";
      }
    }
    
    //Membuat objek baru
    //Objek baru ditandai dengan keyword 'new'
    $kucing1 = new Kucing();
    $kucing1->warna = "Oren";
    // var_dump($kucing1);
    // echo "Warna Kucing : $kucing1->warna<br>";
    // echo "Suara Kucing : ".$kucing1->bersuara();

    class Perumahan
    {
        public $blok;
        public $nomor_rumah;

        public function komplek()
        {
            return "Kopo Indah";
        }
    }

    $rumah1 = new Perumahan;
    $rumah1->blok = "B";
    $rumah1->nomor_rumah = "18";

    $rumah2 = new Perumahan;
    $rumah2->blok = "B";
    $rumah2->nomor_rumah = "19";
    
    echo "Alamat Ujang Di Komplek";
?>