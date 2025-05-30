<?php
$host = "localhost"; // Biasanya localhost
$user = "root";      // Default username XAMPP
$pass = "";          // Default password XAMPP (kosong)
$db = "db_gudang";   // Nama database yang Anda buat

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// echo "Koneksi database berhasil!"; // Anda bisa menghapus baris ini setelah testing
?>