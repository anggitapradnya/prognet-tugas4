<?php

class Paku {
    // Atribut privat
    private $panjang;

    // Konstruktor
    public function __construct($panjang) {
        $this->panjang = $panjang;
    }

    // Metode untuk mendapatkan panjang paku
    public function getPanjang() {
        return $this->panjang;
    }

    // Metode untuk mengubah panjang paku
    public function setPanjang($panjang) {
        $this->panjang = $panjang;
    }
}

// Contoh penggunaan
$paku = new Paku(5);

// Mengakses dan mengubah panjang paku
echo "Panjang Paku: " . $paku->getPanjang() . " cm\n"; 
$paku->setPanjang(10);
echo "Panjang Paku Baru: " . $paku->getPanjang() . " cm\n"; 

?>
