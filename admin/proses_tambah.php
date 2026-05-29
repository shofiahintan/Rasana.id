<?php
// Hubungkan ke database. Jalurnya maju sekali karena file ini ada di dalam folder admin
// Ini akan selalu mencari folder config dari root project kamu
include $_SERVER['DOCUMENT_ROOT'] . '/rasana.id/config/database.php';

if (isset($_POST['submit'])) {
    // Ambil data dari form dan amankan dari karakter aneh
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Query SQL untuk memasukkan data ke tabel posts
    $query = "INSERT INTO posts (title, category, description) VALUES ('$title', '$category', '$description')";
    
    if (mysqli_query($conn, $query)) {
        // Jika sukses, langsung lempar balik ke dashboard utama admin
        echo "<script>
                alert('Data kuliner berhasil ditambahkan!');
                window.location.href = '../dashboard admin.php';
              </script>";
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>