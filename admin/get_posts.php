<?php
// Ini akan selalu mencari folder config dari root project kamu
include $_SERVER['DOCUMENT_ROOT'] . '/rasana.id/config/database.php';

$query = "SELECT * FROM posts ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // 1. ID Postingan
        echo "<td>POST-" . $row['id'] . "</td>";
        
        // 2. Konten (Judul & Deskripsi)
        echo "<td>" . htmlspecialchars($row['title']) . "<br><small style='color: #777; font-weight: normal;'>" . htmlspecialchars($row['description']) . "</small></td>";
        
        // 3. Kategori (Pakai data asli database kamu)
        echo "<td><span class='badge badge-soft'>" . htmlspecialchars($row['category']) . "</span></td>"; 
        
        // 4. Pengirim / User ID
        echo "<td>USR00124</td>";
        
        // 5. Status
        echo "<td><span class='badge badge-success'>Publish</span></td>";
        
        // 6. Tanggal (INI KUNCI BIAR GAK MELUBER: Cukup ambil tanggal format ringkas "10 Mar 2025")
        $tanggal_bersih = date('d M Y', strtotime($row['created_at']));
        echo "<td>" . $tanggal_bersih . "</td>";
        
        // 7. Tombol Aksi Khas Mockup Kamu
        echo "<td class='table-actions'>";
        echo "  <button class='btn-small'><i class='ri-eye-line'></i></button>";
        echo "  <button class='btn-small btn-outline-danger' onclick='deletePost(" . $row['id'] . ")'><i class='ri-delete-bin-line'></i></button>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7' style='text-align:center; color: #888;'>Belum ada postingan kuliner di database.</td></tr>";
}
?>