<?php
// 1. Mendefinisikan Class Mobil
class Mobil {
    // Properti
    public $merk;

    // 2. Method untuk menampilkan informasi mobil
    public function infoMobil() {
        return "Mobil ini bermerk: " . $this->merk;
    }
}

// 3. Membuat Objek Pertama
$mobil1 = new Mobil();
$mobil1->merk = "Toyota";

// 4. Membuat Objek Kedua
$mobil2 = new Mobil();
$mobil2->merk = "Tesla";

// 5. Menampilkan informasi masing-masing objek
echo $mobil1->infoMobil() . "<br>";
echo $mobil2->infoMobil();
?>