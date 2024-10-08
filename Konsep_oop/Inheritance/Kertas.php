<?php
// Kelas induk (Parent Class)
class Kertas {
    public $jenis;

    public function __construct($jenis) {
        $this->jenis = $jenis;
    }

    public function getJenis() {
        return "Ini adalah kertas jenis: " . $this->jenis;
    }
}

// Kelas turunan (Child Class)
class KertasA4 extends Kertas {
    public function __construct() {
        parent::__construct("A4");
    }

    public function getUkuran() {
        return "Ukuran kertas A4 adalah 21 x 29.7 cm.";
    }
}

// Contoh penggunaan
$kertasA4 = new KertasA4();
echo $kertasA4->getJenis();  
echo "\n";
echo $kertasA4->getUkuran(); 
?>
