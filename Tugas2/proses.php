<?php
// Mengimpor file class Mahasiswa
require 'mahasiswa.php';

// Mengecek apakah data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    // Membuat objek Mahasiswa
    $mahasiswa = new Mahasiswa();
    $mahasiswa->setData($nim, $nama);

    // Menampilkan data mahasiswa
    echo "<h2>Data Mahasiswa</h2>";
    $mahasiswa->tampilkanData();
} else {
    echo "Data tidak ditemukan.";
}
?>