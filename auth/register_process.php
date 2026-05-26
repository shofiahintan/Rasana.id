<?php

session_start();

include '../config/database.php';


// AMBIL DATA FORM
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$password = $_POST['password'];


// VALIDASI INPUT KOSONG
if (empty($username) || empty($email) || empty($password)) {
    die("Semua field wajib diisi!");
}


// VALIDASI EMAIL
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Format email tidak valid!");
}


// CEK EMAIL SUDAH ADA
$check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

if (mysqli_num_rows($check_email) > 0) {
    die("Email sudah digunakan!");
}


// HASH PASSWORD
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// INSERT KE DATABASE
$query = "INSERT INTO users (username, email, password)
VALUES ('$username', '$email', '$hashed_password')";

$result = mysqli_query($conn, $query);


// CEK HASIL REGISTER
if ($result) {

    $_SESSION['success'] = "Register berhasil!";

    header("Location: ../login.php");
    exit;

} else {

    echo "Register gagal: " . mysqli_error($conn);

}

?>