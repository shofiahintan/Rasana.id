<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Ayam Taliwang - Reza Mahendra</title>
    <!-- Remix Icon & Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Hubungkan ke file CSS Master -->
    <link rel="stylesheet" href="user-marta-lestari.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-inner">
            <a href="#" class="logo">
                <img src="asset/logo2.png" alt="Rasana.id Logo" class="logo-img">
                <div class="logo-text"><span class="logo-name">Rasana.id</span></div>
            </a>
            <a href="home-page.php" class="nav-back">
                <i class="ri-arrow-left-line"></i> Kembali
            </a>
        </div>
    </header>

    <!-- Main Content Layout -->
    <main class="main-content">
        <!-- Sidebar Profile -->
        <aside class="sidebar">
            <div class="profile-card">
                <img src="asset/profilefor5.jpg" alt="Reza Mahendra" class="profile-avatar">
                <h3 class="profile-name">Reza Mahendra</h3>
                <p class="profile-location"><i class="ri-map-pin-line"></i> Lombok, NTB</p>
                <span class="profile-badge">Local Guide</span>
                <div class="profile-stats">
                    <div class="stat"><span class="stat-value">34</span><span class="stat-label">Review</span></div>
                    <div class="stat"><span class="stat-value">3.1K</span><span class="stat-label">Followers</span></div>
                    <div class="stat"><span class="stat-value">1,320</span><span class="stat-label">Disukai</span></div>
                </div>
                <button class="btn-follow"><i class="ri-user-add-line"></i> Follow</button>
            </div>
        </aside>

        <!-- Review Content -->
        <section class="recipe-section">
            <div class="recipe-hero">
                <img src="asset/ayamtaliwang.jpeg" alt="Ayam Taliwang Lombok">
                <div class="recipe-overlay">
                    <span class="recipe-category" style="background: rgba(23, 162, 184, 0.9);">Review</span>
                    <h1 class="recipe-title">Ayam Taliwang Pantai Lombok: Sensasi Pedas Membakar yang Candu</h1>
                    <div class="recipe-stats">
                        <span><i class="ri-heart-fill"></i> 1,320 Suka</span>
                        <span><i class="ri-chat-1-line"></i> 72 Komentar</span>
                        <span><i class="ri-time-line"></i> 1 Jam yang lalu</span>
                    </div>
                </div>
            </div>

            <div class="recipe-body">
                <p class="recipe-desc">
                    Ayam Taliwang di warung tepi pantai Lombok — pedas membakar tapi bikin ketagihan setiap kali ke sini. Kunci kelezatan review kali ini terletak pada teknik pembakaran ayam kampung muda di atas arang batok kelapa yang menyisakan aroma asap (*smoky*) yang mendalam berbalut lumuran cabai rawit khas Lombok.
                </p>

                <div class="recipe-actions">
                    <button class="action-btn btn-primary"><i class="ri-heart-line"></i> Suka</button>
                    <button class="action-btn btn-secondary"><i class="ri-share-forward-line"></i> Bagikan</button>
                </div>

                <div class="recipe-grid">
                    <!-- Box Pros -->
                    <div class="recipe-box">
                        <h3 class="box-title"><i class="ri-thumb-up-line"></i> Kelebihan (Pros)</h3>
                        <ul class="ingredient-list">
                            <li>Daging ayam menggunakan **ayam kampung muda** sehingga super empuk dan juicy.</li>
                            <li>Bumbu plecing dan taliwangnya meresap sempurna hingga ke tulang bagian dalam.</li>
                            <li>Suasana tempat makan persis di pinggir pantai dengan semilir angin laut yang syahdu.</li>
                        </ul>
                    </div>

                    <!-- Box Rating -->
                    <div class="recipe-box">
                        <h3 class="box-title"><i class="ri-star-line"></i> Penilaian Rasa & Harga</h3>
                        <ol class="steps-list">
                            <li>Tingkat Kepedasan: 9.5 / 10 (Sangat menantang!).</li>
                            <li>Harga per Porsi: Rp 55.000 (Satu ekor ayam utuh mini).</li>
                            <li>Pendamping Menu: Plecing Kangkung dan Beberuk Terong.</li>
                            <li>**Skor Akhir Review: 4.8 / 5.0!**</li>
                        </ol>
                    </div>
                </div>

                <!-- Tips Kuliner -->
                <div class="recipe-tips">
                    <h3 class="box-title"><i class="ri-lightbulb-line"></i> Tips Singgah Kuliner</h3>
                    <ul class="tips-list">
                        <li>Bagi yang tidak terlalu kuat pedas ekstrem, sangat disarankan memesan varian **Ayam Taliwang Madu** atau bumbu bakar manis untuk meredam sengatan cabai rawitnya.</li>
                        <li>Waktu kunjungan terbaik adalah sore hari menjelang magrib, jadi kamu bisa menikmati hidangan pedas ini sambil menyaksikan matahari terbenam (*sunset*) Lombok.</li>
                    </ul>
                </div>

                <!-- Comments Area -->
                <div class="comments-wrapper">
                    <h3 class="section-title"><i class="ri-chat-3-line"></i> Komentar (72)</h3>
                    <div class="comments-list">
                        <div class="comment-item">
                            <img src="asset/pro1.png" alt="Aldo">
                            <div class="comment-content">
                                <div class="comment-header"><strong>Aldo</strong><span>Baru saja</span></div>
                                <p>Ayam Taliwang asli Lombok emang beda rasanya!</p>
                            </div>
                        </div>
                    </div>

                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" alt="Saya" style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover;">
                        <input type="text" placeholder="Tulis komentar...">
                        <button type="button"><i class="ri-send-plane-fill"></i></button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>