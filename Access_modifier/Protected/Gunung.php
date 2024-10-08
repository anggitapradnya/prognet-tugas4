<?php
class Gunung {
    // Deklarasi properti dengan access modifier protected
    protected $nama;
    protected $lokasi;

    // Constructor untuk menginisialisasi properti
    public function __construct($nama, $lokasi) {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
    }

    // Method protected untuk mengambil informasi tentang gunung
    protected function getInfo() {
        return "Nama Gunung: " . $this->nama . ", Lokasi: " . $this->lokasi;
    }

    // Method public untuk menampilkan informasi
    public function showInfo() { 
        return $this->getInfo();
    }
}

// Membuat objek dari kelas Gunung
$gunungAgung = new Gunung("Gunung Agung", "Bali");

// Menampilkan informasi gunung menggunakan method public
echo $gunungAgung->showInfo();
?>
