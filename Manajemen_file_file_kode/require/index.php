<?php
// Menyertakan file yang berisi kelas Matahari dan Bulan
require_once 'Matahari.php';
require_once 'Bulan.php';

// Membuat objek dan menggunakan kelas
$matahari = new Matahari("Bersinar", 149600000); // Menggunakan fase dan jarak
echo $matahari->info(); // Output: Matahari: Fase Bersinar, Jarak ke Bumi: 149600000 km
echo "\n"; // Menambahkan baris baru untuk output di terminal

$bulan = new Bulan("Penuh", 384400);
echo $bulan->info(); // Output: Bulan: Fase Penuh, Jarak ke Bumi: 384400 km
?>
