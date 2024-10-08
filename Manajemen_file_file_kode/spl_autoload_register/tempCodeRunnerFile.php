<?php
// Autoloader untuk memuat kelas secara otomatis
spl_autoload_register(function ($class_name) {
    include $class_name . ".php"; 
});

// Membuat objek dan menggunakan kelas
$matahari = new Matahari("Bersinar", 149600000); 
echo $matahari->info(); 
echo "\n"; 

$bulan = new Bulan("Penuh", 384400);
echo $bulan->info(); 
?>