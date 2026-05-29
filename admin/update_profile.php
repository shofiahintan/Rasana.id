<?php
session_start();

// 1. Pastikan path include benar (../ berarti naik satu folder ke luar admin)
include '../koneksi.php'; 

// Cek apakah koneksi berhasil
if (!isset($conn)) {
    die("Gagal terhubung ke database. Cek file koneksi.php!");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $new_name = mysqli_real_escape_string($conn, $_POST['name']);
    
    // Proses Foto
    if (!empty($_FILES['foto']['name'])) {
        $foto_name = time() . '_' . $_FILES['foto']['name'];
        $target_dir = "../asset/profiles/"; 
        
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir . $foto_name)) {
            $query = "UPDATE users SET username = '$new_name', foto_profil = '$foto_name' WHERE id = '$user_id'";
            $_SESSION['foto_profil'] = $foto_name;
        }
    } else {
        $query = "UPDATE users SET username = '$new_name' WHERE id = '$user_id'";
    }
    
    // Eksekusi
    if (mysqli_query($conn, $query)) {
        $_SESSION['username'] = $new_name;
        header("Location: ../dashboard admin.php?status=success");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>