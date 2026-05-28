<?php

session_start();

include '../config/database.php';


// AMBIL DATA LOGIN
$email = htmlspecialchars($_POST['email']);
$password = $_POST['password'];


// VALIDASI INPUT
if (empty($email) || empty($password)) {
    die("Email dan password wajib diisi!");
}


// CEK EMAIL
$query = "SELECT * FROM users WHERE email='$email'";

$result = mysqli_query($conn, $query);


// CEK USER ADA
if (mysqli_num_rows($result) === 1) {

    $user = mysqli_fetch_assoc($result);

    // VERIFY PASSWORD HASH
    if (password_verify($password, $user['password'])) {

        // SESSION LOGIN
        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];

        // PINDAH KE HOME
        header("Location: ../home-page.php");
        exit;

    } else {

        die("Password salah!");

    }

} else {

    die("Email tidak ditemukan!");

}

?>