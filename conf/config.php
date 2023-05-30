<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_sibero";

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $database);

// // Memeriksa koneksi
// if ($koneksi->connect_error) {
//     die("Koneksi gagal: " . $koneksi->connect_error);
// }

// echo "Koneksi berhasil";

// // Tutup koneksi
// $koneksi->close();
?>
