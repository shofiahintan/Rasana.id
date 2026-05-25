<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi - Rasana.id</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="notification.css">
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">
        <img src="asset/logo2.png" alt="logo" />
    </div>

    <div class="side-menu">
        <a href="search.php"><i class="ri-global-line"></i></a>
        <a href="home-page.php"><i class="ri-home-4-line"></i></a>
        <a href="posting.php"><i class="ri-add-line"></i></a>
        <a href="map.php"><i class="ri-map-pin-line"></i></a>
        <a href="notification.php" class="active"><i class="ri-notification-3-line"></i></a>
        <a href="profilesetting.php"><i class="ri-settings-3-line"></i></a>
    </div>

    <div class="profile">
        <a href="profilesetting.php">
            <img src="asset/Ellipse 11.png" alt="profile" />
        </a>
    </div>
</div>

<!-- MAIN CONTENT -->
<main class="main-content">

    <!-- HEADER -->
    <header class="notif-header">
        <div>
            <h1>Notifikasi</h1>
            <p>Aktivitas terbaru dari unggahan dan akun kamu.</p>
        </div>

        <button class="btn-mark-read">
            <i class="ri-check-double-line"></i>
            Tandai semua sudah dibaca
        </button>
    </header>

    <!-- TAB / FILTER -->
    <div class="notif-tabs">
        <button class="notif-tab active">Semua</button>
        <button class="notif-tab">Interaksi</button>
        <button class="notif-tab">Pengikut</button>
        <button class="notif-tab">Sistem</button>
    </div>

    <!-- LAYOUT 2 KOLOM -->
    <section class="notif-layout">

        <!-- KOLOM KIRI: LIST NOTIF -->
        <div class="notif-list">

            <!-- HARI INI -->
            <div class="notif-group-label">Hari ini</div>

            <article class="notif-card unread">
                <div class="notif-avatar">
                    <img src="asset/profile 5.png" alt="Rani">
                </div>
                <div class="notif-body">
                    <div class="notif-row-top">
                        <span class="notif-name">Rani</span>
                        <span class="notif-time">5 mnt</span>
                    </div>
                    <p class="notif-text">
                        mengomentari unggahan kamu:
                        <span class="notif-highlight">"Kelihatannya enak, di mana lokasinya?"</span>
                    </p>
                    <div class="notif-meta">
                        <span>Komentar</span>
                        <span>•</span>
                        <span>Bakso Mercon Malang</span>
                    </div>
                </div>
                <span class="notif-dot"></span>
            </article>

            <article class="notif-card unread">
                <div class="notif-avatar notif-icon-heart">
                    <i class="ri-heart-3-fill"></i>
                </div>
                <div class="notif-body">
                    <div class="notif-row-top">
                        <span class="notif-name">12 orang</span>
                        <span class="notif-time">20 mnt</span>
                    </div>
                    <p class="notif-text">
                        menyukai unggahan kamu
                        <span class="notif-highlight">"Pempek Dos Viral di Malang"</span>
                    </p>
                    <div class="notif-meta">
                        <span>Suka</span>
                    </div>
                </div>
                <span class="notif-dot"></span>
            </article>

            <!-- MINGGU INI -->
            <div class="notif-group-label">Minggu ini</div>

            <article class="notif-card">
                <div class="notif-avatar">
                    <img src="asset/profile 4.png" alt="Andi">
                </div>
                <div class="notif-body">
                    <div class="notif-row-top">
                        <span class="notif-name">Andi</span>
                        <span class="notif-time">2 hari</span>
                    </div>
                    <p class="notif-text">
                        mulai mengikuti kamu.
                    </p>
                    <div class="notif-meta">
                        <span>Pengikut baru</span>
                    </div>
                </div>
            </article>

            <article class="notif-card">
                <div class="notif-avatar notif-icon-info">
                    <i class="ri-information-line"></i>
                </div>
                <div class="notif-body">
                    <div class="notif-row-top">
                        <span class="notif-name">Rasana.id</span>
                        <span class="notif-time">4 hari</span>
                    </div>
                    <p class="notif-text">
                        punya rekomendasi
                        <span class="notif-highlight">tempat makan baru di dekat kamu.</span>
                    </p>
                    <div class="notif-meta">
                        <span>Rekomendasi sistem</span>
                    </div>
                </div>
            </article>

            <!-- SEBELUMNYA -->
            <div class="notif-group-label">Sebelumnya</div>

            <article class="notif-card">
                <div class="notif-avatar">
                    <img src="asset/pro2.png" alt="Dimas">
                </div>
                <div class="notif-body">
                    <div class="notif-row-top">
                        <span class="notif-name">Dimas</span>
                        <span class="notif-time">1 minggu</span>
                    </div>
                    <p class="notif-text">
                        membagikan unggahan kamu ke cerita mereka.
                    </p>
                    <div class="notif-meta">
                        <span>Share</span>
                    </div>
                </div>
            </article>

        </div>

        <!-- KOLOM KANAN: PANEL SAMPING SIMPLE -->
        <aside class="notif-side">
            <div class="side-card">
                <h3>Ringkasan minggu ini</h3>
                <p class="side-caption">Aktivitas yang terjadi dalam 7 hari terakhir.</p>
                <div class="side-stat">
                    <div>
                        <span class="side-stat-number">+24</span>
                        <span class="side-stat-label">Suka baru</span>
                    </div>
                    <div>
                        <span class="side-stat-number">+6</span>
                        <span class="side-stat-label">Komentar</span>
                    </div>
                    <div>
                        <span class="side-stat-number">+3</span>
                        <span class="side-stat-label">Pengikut</span>
                    </div>
                </div>
            </div>

            <div class="side-card side-tips">
                <h3>Tips</h3>
                <p>Balas komentar di unggahanmu untuk bikin engagement lebih hidup.</p>
            </div>
        </aside>

    </section>

</main>

</body>
</html>