<?php
// 1. Mendefinisikan Class Buku
class Buku {
    // Properti
    public $judul;
    public $pengarang;

    // 2. Constructor untuk mengisi property secara otomatis
    public function __construct($judulBuku, $namaPengarang) {
        $this->judul = $judulBuku;
        $this->pengarang = $namaPengarang;
    }

    // 3. Method untuk menampilkan data buku
    public function infoBuku() {
        return "Buku: " . $this->judul . " | Pengarang: " . $this->pengarang;
    }
}

// 4. Membuat objek dan mengisi data langsung melalui constructor
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata");
$buku2 = new Buku("Filosofi Teras", "Henry Manampiring");

// 5. Menampilkan info buku
echo $buku1->infoBuku() . "<br>";
echo $buku2->infoBuku();
?>