<?php
// Pakai path mutlak supaya tidak ada error path
include $_SERVER['DOCUMENT_ROOT'] . '/rasana.id/config/database.php';

// Ambil data
$query = mysqli_query($conn, "SELECT * FROM interactions ORDER BY id DESC");

if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['target_user_id'] . "</td>";
        echo "<td>" . $row['comment_text'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6' style='text-align:center;'>Belum ada aktivitas interaksi</td></tr>";
}
?>