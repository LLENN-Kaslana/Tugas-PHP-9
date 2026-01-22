<?php
// 1. Mendefinisikan Class PersegiPanjang
class PersegiPanjang {
    // Properti
    public $panjang;
    public $lebar;

    // Method untuk menghitung luas
    public function hitungLuas() {
        // Mengalikan properti panjang dan lebar milik objek ini
        return $this->panjang * $this->lebar;
    }
}

// 2. Membuat Objek
$kotak = new PersegiPanjang();

// 3. Mengisi nilai properti
$kotak->panjang = 10;
$kotak->lebar = 5;

// 4. Menampilkan hasil luas
echo "Panjang: " . $kotak->panjang . "<br>";
echo "Lebar: " . $kotak->lebar . "<br>";
echo "<b>Luas Persegi Panjang: " . $kotak->hitungLuas() . "</b>";
?>