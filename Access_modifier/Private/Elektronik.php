<?php
class Elektronik {
    private $nama;
    private $merek;
    private $harga;

    // Method untuk mengatur nilai properti secara manual (Setter)
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // Method untuk mengambil informasi (Getter)
    public function getInfo() {
        return "Nama: " . $this->nama . ", Merek: " . $this->merek . ", Harga: Rp" . $this->harga;
    }
}

// Membuat objek dari kelas Elektronik
$tv = new Elektronik();

// Mengatur nilai properti menggunakan setter method
$tv->setNama("Televisi");
$tv->setMerek("LG");
$tv->setHarga(4500000);

// Menampilkan informasi menggunakan getInfo()
echo $tv->getInfo();
?>
