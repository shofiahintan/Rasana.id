<?php
// Jangan lupa include koneksinya
// Ini akan selalu mencari folder config dari root project kamu
include $_SERVER['DOCUMENT_ROOT'] . '/rasana.id/config/database.php';

// Ambil total postingan
$count_posts = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM posts"));
// Ambil total user
$count_users = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM users"));
// Ambil total interaksi
$count_ints = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM interactions"));
?>

<div class="stats-container">
    <div class="stat-card">
        <div class="icon-box"><i class="ri-restaurant-2-line"></i></div>
        <h3><?php echo $count_posts; ?></h3>
        <p>Total Kuliner</p>
    </div>
    <div class="stat-card">
        <div class="icon-box"><i class="ri-user-3-line"></i></div>
        <h3><?php echo $count_users; ?></h3>
        <p>Total User</p>
    </div>
    <div class="stat-card">
        <div class="icon-box"><i class="ri-heart-3-line"></i></div>
        <h3><?php echo $count_ints; ?></h3>
        <p>Total Interaksi</p>
    </div>
</div>