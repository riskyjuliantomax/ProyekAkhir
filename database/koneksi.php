<?php
$servername = "localhost"; //nama server
$username = "root"; //nama pengguna
$password = ""; //kata sandi
$dbname = "tender_pa"; //nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>
