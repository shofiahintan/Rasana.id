<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "rasana_db"; 

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>