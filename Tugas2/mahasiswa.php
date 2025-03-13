<?php
class mahasiswa {
    public $nim;
    public $nama;

    // Method untuk mengatur data mahasiswa
    public function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
    }
}
?>