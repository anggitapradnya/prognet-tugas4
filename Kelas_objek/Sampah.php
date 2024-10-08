<?php
// 1. Definisi Kelas: Kelas Sampah untuk membuat berbagai jenis sampah
class Sampah {
    // 2. Properti: Variabel yang didefinisikan dalam class
    public $jenis;
    public $warna;
    public $material;

   // 3. Kontruksi: Fungsi khusus yang dijalankan saat objek dibuat 
    public function __construct($jenis, $warna, $material) {
        $this->jenis = $jenis;
        $this->warna = $warna;
        $this->material = $material;
    }

    //4. Method: Fungsi untuk menampilkan informasi tentang sampah
    public function tampilkanInfo() {
        return "Ini adalah sampah jenis {$this->jenis} berwarna {$this->warna}, terbuat dari material {$this->material}." . PHP_EOL;
    }

    // 5. Method tambahan: Menunjukkan apakah sampah dapat didaur ulang
    public function dapatDidaurUlang() {
        $dapatDaurUlang = ["plastik", "kertas", "kaca", "aluminium"];
        if (in_array(strtolower($this->material), $dapatDaurUlang)) {
            return "Sampah ini bisa didaur ulang." . PHP_EOL;
        } else {
            return "Sampah ini tidak bisa didaur ulang." . PHP_EOL;
        }
    }
}

// 6. Membuat beberapa objek sampah dari kelas Sampah
$sampahPlastik = new Sampah("Botol Plastik", "Biru", "Plastik");
$sampahKertas = new Sampah("Koran Bekas", "Putih", "Kertas");
$sampahOrganik = new Sampah("Sisa Makanan", "Coklat", "Organik");

// 7. Menampilkan informasi tentang masing-masing sampah
echo $sampahPlastik->tampilkanInfo();
echo $sampahPlastik->dapatDidaurUlang();

echo $sampahKertas->tampilkanInfo();
echo $sampahKertas->dapatDidaurUlang();

echo $sampahOrganik->tampilkanInfo();
echo $sampahOrganik->dapatDidaurUlang();
?>
