<?php
// Koneksi ke database
// Ini akan selalu mencari folder config dari root project kamu
include $_SERVER['DOCUMENT_ROOT'] . '/rasana.id/config/database.php';

// Query untuk mengambil semua data user dari yang paling baru daftar
$query = "SELECT id, username, email, role FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $query);

// Cek apakah ada datanya
if (mysqli_num_rows($result) > 0) {
    // Kita looping datanya untuk dimasukkan ke dalam baris tabel HTML
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td><span class='badge-" . $row['role'] . "'>" . $row['role'] . "</span></td>";
        echo "<td>
                <button class='btn-block' onclick='blockUser(" . $row['id'] . ")'>Blokir</button>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5' style='text-align:center;'>Belum ada user mendaftar.</td></tr>";
}
?>