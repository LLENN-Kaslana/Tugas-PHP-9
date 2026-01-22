<?php
// 1. Mendefinisikan Class User
class User {
    // Properti
    public $username;

    // 2. Method Setter: Untuk mengubah/mengisi nilai username
    public function setUsername($namaBaru) {
        $this->username = $namaBaru;
    }

    // 3. Method Getter: Untuk mengambil/mendapatkan nilai username
    public function getUsername() {
        return $this->username;
    }
}

// 4. Membuat Objek User
$akun = new User();

// 5. Mengubah nilai username menggunakan Setter
$akun->setUsername("gemini_user");

// 6. Menampilkan hasil menggunakan Getter
echo "Username saat ini: " . $akun->getUsername();
?>