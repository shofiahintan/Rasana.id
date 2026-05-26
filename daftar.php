<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Rasana.id</title>
    <link rel="stylesheet" href="daftar.css">
</head>
<body>

<div class="register-page-container">

    <div class="illustration-panel">
        <img src="asset/asset.png" alt="Illustration" class="main-illustration">
    </div>

    <div class="form-panel">
        <div class="register-form-box">
            
            <div class="logo-header">
                <img src="asset/logo2.png" alt="Logo" class="logo-img">
                <h1 class="logo-text">
                    Rasana<span class="logo-id">.id</span>
                </h1>
            </div>

            <form class="register-form" action="auth/register_process.php" method="POST">
                <input type="text" name="fullname" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit" class="btn register-btn">
                    Daftar
                </button>
            </form>

            <div class="separator">atau</div>

            <button type="button" class="btn facebook-btn">
                <img src="asset/facebook.png" alt="Facebook" class="facebook-icon">
                Daftar dengan Facebook
            </button>

            <p class="login-text">
                Sudah punya akun? 
                <a href="login.php" class="login-link">Masuk</a>
            </p>

        </div>
    </div>

</div>

</body>
</html>