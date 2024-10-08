<?php

// Kelas dasar
class Film {
    // Metode publik untuk menampilkan jenis film
    public function jenisFilm() {
        return "Ini adalah film.";
    }
}

// Kelas turunan FilmAksi
class FilmAksi extends Film {
    // Override metode jenisFilm
    public function jenisFilm() {
        return "Ini adalah film aksi.";
    }
}

// Kelas turunan FilmDrama
class FilmDrama extends Film {
    // Override metode jenisFilm
    public function jenisFilm() {
        return "Ini adalah film drama.";
    }
}

// Fungsi untuk menampilkan jenis film
function tampilkanJenisFilm(Film $film) {
    echo $film->jenisFilm() . "\n"; // Memanggil metode jenisFilm
}

// Contoh penggunaan
$filmAksi = new FilmAksi();
$filmDrama = new FilmDrama();

// Menampilkan jenis film
tampilkanJenisFilm($filmAksi); // Output: Ini adalah film aksi.
tampilkanJenisFilm($filmDrama); // Output: Ini adalah film drama.

?>