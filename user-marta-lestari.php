<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawon Daging Surabaya - Marta Lestari</title>
    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Google Fonts Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Menggunakan CSS yang sejenis dengan layout resep -->
    <link rel="stylesheet" href="user-rian-saputra.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-inner">
            <a href="#" class="logo">
                <img src="asset/logo2.png" alt="Rasana.id Logo" class="logo-img">
                <div class="logo-text">
                    <span class="logo-name">Rasana.id</span>
                </div>
            </a>
            <a href="home-page.php" class="nav-back">
                <i class="ri-arrow-left-line"></i>
                Kembali
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Left Sidebar - User Profile -->
        <aside class="sidebar">
            <div class="profile-card">
                <img src="asset/profile 5.png" alt="Marta Lestari" class="profile-avatar">
                <h3 class="profile-name">Marta Lestari</h3>
                <p class="profile-location">
                    <i class="ri-map-pin-line"></i>
                    Surabaya, Jawa Timur
                </p>
                <span class="profile-badge">Kang resep</span>
                
                <div class="profile-stats">
                    <div class="stat">
                        <span class="stat-value">42</span>
                        <span class="stat-label">Resep</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">8.9K</span>
                        <span class="stat-label">Followers</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">1.8K</span>
                        <span class="stat-label">Disukai</span>
                    </div>
                </div>
                
                <button class="btn-follow">
                    <i class="ri-user-add-line"></i>
                    Follow
                </button>
            </div>
        </aside>

        <!-- Center - Recipe Content -->
        <section class="recipe-section">
            <!-- Hero Image -->
            <div class="recipe-hero">
                <img src="asset/Rawon Daging.jpg" alt="Rawon Surabaya">
                <div class="recipe-overlay">
                    <span class="recipe-category">Resep</span>
                    <h1 class="recipe-title">Rawon Daging Sapi Khas Surabaya</h1>
                    <div class="recipe-stats">
                        <span><i class="ri-heart-fill"></i> 1,800 Suka</span>
                        <span><i class="ri-chat-1-line"></i> 110 Komentar</span>
                        <span><i class="ri-time-line"></i> 4 Hari yang lalu</span>
                    </div>
                </div>
            </div>

            <!-- Recipe Body -->
            <div class="recipe-body">
                <p class="recipe-desc">
                    Resep rawon khas Jawa Timur, kuah hitam gurih dengan daging empuk yang bikin ketagihan! Rahasia kepekatan dan kelezatan kuahnya ada pada pemilihan kluwek berkualitas tinggi dan teknik menumis bumbu yang matang sempurna.
                </p>

                <div class="recipe-actions">
                    <button class="action-btn btn-primary">
                        <i class="ri-heart-line"></i>
                        Suka
                    </button>
                    <button class="action-btn btn-secondary">
                        <i class="ri-share-forward-line"></i>
                        Bagikan
                    </button>
                </div>

                <!-- Ingredients & Steps -->
                <div class="recipe-grid">
                    <!-- Box 1: Bahan-Bahan -->
                    <div class="recipe-box">
                        <h3 class="box-title">
                            <i class="ri-shopping-basket-line"></i>
                            Bahan-Bahan
                        </h3>
                        <ul class="ingredient-list">
                            <li>500 gr daging sapi (sandung lamur)</li>
                            <li>6 buah kluwek berkualitas, ambil isinya</li>
                            <li>5 lembar daun jeruk purut</li>
                            <li>2 batang serai, memarkan</li>
                            <li>2 cm lengkuas, memarkan</li>
                            <li>1.5 liter air kaldu sapi</li>
                            <li>Bumbu halus: 8 bawang merah, 5 bawang putih, 3 kemiri, 2 cm kunyit, 1 sdt ketumbar</li>
                            <li>Pelengkap: tauge pendek, telur asin, sambal, jeruk nipis</li>
                        </ul>
                    </div>

                    <!-- Box 2: Cara Membuat -->
                    <div class="recipe-box">
                        <h3 class="box-title">
                            <i class="ri-file-list-3-line"></i>
                            Cara Membuat
                        </h3>
                        <ol class="steps-list">
                            <li>Rebus daging sapi hingga empuk, lalu potong dadu. Saring dan sisihkan air kaldunya.</li>
                            <li>Seduh isi kluwek dengan air panas, lalu haluskan bersama bumbu halus lainnya.</li>
                            <li>Tumis bumbu halus, serai, daun jeruk, dan lengkuas hingga harum dan matang.</li>
                            <li>Masukkan potongan daging ke dalam tumisan bumbu, aduk hingga daging berubah warna.</li>
                            <li>Tuang air kaldu sapi kembali ke dalam panci, masukkan daging yang sudah dibumbui.</li>
                            <li>Masak dengan api kecil hingga bumbu meresap sempurna ke dalam daging.</li>
                            <li>Sajikan hangat bersama nasi, taburan tauge pendek, telur asin, dan sambal.</li>
                        </ol>
                    </div>
                </div>

                <!-- Tips -->
                <div class="recipe-tips">
                    <h3 class="box-title">
                        <i class="ri-lightbulb-line"></i>
                        Tips Sukses
                    </h3>
                    <ul class="tips-list">
                        <li>Pastikan mencicipi kluwek terlebih dahulu sebelum dihaluskan. Jika terasa pahit, jangan gunakan karena bisa merusak rasa kuah rawon.</li>
                        <li>Rawon akan terasa jauh lebih nikmat dan gurih jika didiamkan semalaman lalu dipanaskan kembali keesokan harinya.</li>
                        <li>Gunakan bagian daging sandung lamur (ada sedikit lemak) agar kaldu rawon lebih gurih dan tekstur dagingnya juicy.</li>
                    </ul>
                </div>

                <!-- Comments -->
                <div class="comments-wrapper">
                    <h3 class="section-title">
                        <i class="ri-chat-3-line"></i>
                        Komentar (110)
                    </h3>

                    <div class="comments-list">
                        <!-- Comment 1 (Sesuai feed card) -->
                        <div class="comment-item">
                            <img src="asset/pro1.png" alt="Lina K.">
                            <div class="comment-content">
                                <div class="comment-header">
                                    <strong>Lina K.</strong>
                                    <span>3 hari yang lalu</span>
                                </div>
                                <p>Rawon-nya keliatan pekat banget, ini pake kluwek favoritku kayaknya 🤤</p>
                            </div>
                        </div>

                        <!-- Comment 2 (Sesuai feed card) -->
                        <div class="comment-item">
                            <img src="asset/pro2.png" alt="Bagus Prasetyo">
                            <div class="comment-content">
                                <div class="comment-header">
                                    <strong>Bagus Prasetyo</strong>
                                    <span>2 hari yang lalu</span>
                                </div>
                                <p>Sudah coba resepnya, rasanya mirip banget rawon langganan di Surabaya!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Input Komentar -->
                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" alt="Saya" style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover;">
                        <input type="text" placeholder="Tulis komentar...">
                        <button type="button">
                            <i class="ri-send-plane-fill"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>