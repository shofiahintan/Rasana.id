<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rasana.id</title>
    <link rel="stylesheet" href="login.css?v=2.0">
</head>
<body>

<div class="login-page-container">

    <div class="illustration-panel">
        <img src="asset/asset.png" alt="Login Illustration" class="main-illustration">
    </div>

    <div class="form-panel">
        <div class="login-form-box">
            
            <div class="logo-header">
                <img src="asset/logo2.png" alt="Logo" class="logo-img">
                <h1 class="logo-text">Rasana<span class="logo-id">.id</span></h1>
            </div>

            <form class="login-form" action="auth/login_process.php" method="POST">
                <input 
                    type="email" 
                    name="email"
                    placeholder="Username atau Email" 
                    required
                >

                <input 
                    type="password" 
                    name="password"
                    placeholder="Password" 
                    required
                >

                <button type="submit" class="btn login-btn">
                    Masuk
                </button>
            </form>

            <div class="separator">atau</div>

            <button type="button" class="btn facebook-btn">
                <img src="asset/facebook.png" alt="Facebook Icon" class="facebook-icon">
                Masuk dengan Facebook
            </button>

            <a href="#" class="forgot-password-link">Lupa password?</a>
            
            <p class="register-text">
                Belum punya akun? <a href="daftar.php" class="register-link">Daftar</a>
            </p>

        </div>
    </div>

</div>

</body>
</html>