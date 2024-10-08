<?php
// Kelas abstrak (Abstract Class)
abstract class Galaksi {
    protected $nama;

    // Constructor untuk inisialisasi nama galaksi
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method abstrak untuk mendapatkan deskripsi galaksi
    abstract public function deskripsi();
}

// Kelas turunan yang mengimplementasikan Galaksi
class GalaksiSombrero extends Galaksi {
    public function deskripsi() {
        return $this->nama . " adalah galaksi berbentuk spiral dengan tonjolan pusat yang besar, menyerupai topi sombrero.";
    }
}

// Kelas turunan lain
class GalaksiTriangulum extends Galaksi {
    public function deskripsi() {
        return $this->nama . " adalah galaksi spiral yang merupakan bagian dari Grup Lokal, bersama dengan Bima Sakti dan Andromeda.";
    }
}

// Contoh penggunaan
$sombrero = new GalaksiSombrero("Galaksi Sombrero");
echo $sombrero->deskripsi();  
echo "\n";

$triangulum = new GalaksiTriangulum("Galaksi Triangulum");
echo $triangulum->deskripsi();  
?>
