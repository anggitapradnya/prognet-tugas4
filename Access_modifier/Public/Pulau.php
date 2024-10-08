<?php
class Pulau {
    // Deklarasi properti dengan access modifier public
    public $nama;
    public $lokasi;
    public $luas;

    // Constructor untuk menginisialisasi properti
    public function __construct($nama, $lokasi, $luas) {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->luas = $luas;
    }

    // Method public untuk menampilkan informasi tentang pulau
    public function getInfo() {
        return "Pulau: " . $this->nama . ", Lokasi: " . $this->lokasi . ", Luas: " . $this->luas . " km².";
    }
}

// Membuat objek dari kelas Pulau
$pulauBali = new Pulau("Bali", "Indonesia", 5780);

// Menampilkan informasi tentang pulau
echo $pulauBali->getInfo();
?>
