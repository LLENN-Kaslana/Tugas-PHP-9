<?php
// 1. Mendefinisikan Class Mahasiswa
class Mahasiswa {
    // Properti: variabel di dalam class
    public $nama;

    // Method: fungsi di dalam class
    public function tampilkanNama() {
        return "Nama Mahasiswa: " . $this->nama;
    }
}

// 2. Membuat 1 Objek Mahasiswa
$mhs1 = new Mahasiswa();

// 3. Mengisi nilai properti nama
$mhs1->nama = "Ahmad Fauzi";

// 4. Memanggil method untuk menampilkan nama
echo $mhs1->tampilkanNama();
?>