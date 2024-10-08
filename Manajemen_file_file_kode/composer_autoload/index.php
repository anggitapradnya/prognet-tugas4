<?php
// Memuat autoload Composer
require 'vendor/autoload.php';

use Vendor\ComposerAutoload\Matahari;
use Vendor\ComposerAutoload\Bulan;

// Membuat objek dan menggunakan kelas
$matahari = new Matahari("Bersinar", 149600000);
echo $matahari->info(); 
echo "\n";

$bulan = new Bulan("Penuh", 384400);
echo $bulan->info();
?>
