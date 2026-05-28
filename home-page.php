<?php
include 'auth/session_check.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rasana.id - Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="home-page.css" />
    <style>
        /* ── CARD HEADER FLEXBOX FIX (berlaku global semua card) ── */
        .card-header {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            gap: 10px;
            padding: 10px 12px;
        }
        .card-header img {
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        .card-header > div {
            flex: 1;
            min-width: 0;
        }
        .card-header h4 {
            font-size: 13px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
        }
        .card-header p {
            font-size: 11px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
        }
        .tag {
            flex-shrink: 0;
            margin-left: 0;
            white-space: nowrap;
        }

        /* ── SISTEM TAB ── */
        .tab-section { display: none; }
        .tab-section.active { display: block; }
        @keyframes fadeSlideIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .tab-section.active { animation: fadeSlideIn 0.28s ease forwards; }

        /* ── HOVER & POINTER: Story ── */
        .story-item {
            cursor: pointer;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
        .story-item:hover { transform: scale(1.07); opacity: 0.85; }

        /* ── HOVER & POINTER: Pilihan Terpopuler ── */
        .mini-card {
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .mini-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.12);
        }

        /* ── HOVER & POINTER: Disarankan ── */
        .suggest li { cursor: pointer; }
        .suggest li img {
            transition: transform 0.18s ease;
            cursor: pointer;
        }
        .suggest li img:hover { transform: scale(1.1); }
        .add {
            cursor: pointer;
            transition: background 0.18s, color 0.18s, transform 0.15s;
        }
        .add:hover { transform: translateY(-2px); }

        /* ── STORY MODAL (Pop-up Instagram-style) ── */
        .story-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.88);
            z-index: 999;
            display: none;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.2s ease;
        }
        .story-modal-overlay.open { display: flex; }
        @keyframes fadeIn {
            from { opacity: 0; } to { opacity: 1; }
        }
        .story-modal-box {
            position: relative;
            width: 340px;
            max-width: 95vw;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0,0,0,0.6);
            background: #1a1a1a;
            animation: popIn 0.25s cubic-bezier(.34,1.56,.64,1) forwards;
        }
        @keyframes popIn {
            from { transform: scale(0.88); opacity: 0; }
            to   { transform: scale(1);    opacity: 1; }
        }
        /* Progress bar */
        .story-progress-bar {
            position: absolute;
            top: 10px;
            left: 12px;
            right: 12px;
            display: flex;
            gap: 4px;
            z-index: 10;
        }
        .story-progress-segment {
            flex: 1;
            height: 3px;
            background: rgba(255,255,255,0.35);
            border-radius: 999px;
            overflow: hidden;
        }
        .story-progress-segment .fill {
            height: 100%;
            background: #fff;
            width: 0%;
            border-radius: 999px;
        }
        .story-progress-segment.done .fill { width: 100%; }
        .story-progress-segment.active .fill {
            animation: progressFill 4s linear forwards;
        }
        @keyframes progressFill {
            from { width: 0%; } to { width: 100%; }
        }
        /* Header dalam modal */
        .story-modal-header {
            position: absolute;
            top: 24px;
            left: 12px;
            right: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 10;
        }
        .story-modal-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 2px solid #fff;
            object-fit: cover;
        }
        .story-modal-name {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            text-shadow: 0 1px 4px rgba(0,0,0,0.5);
            flex: 1;
        }
        .story-modal-time {
            color: rgba(255,255,255,0.75);
            font-size: 11px;
        }
        /* Tombol close */
        .story-modal-close {
            position: absolute;
            top: 14px;
            right: 14px;
            z-index: 20;
            background: rgba(0,0,0,0.45);
            border: none;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #fff;
            font-size: 18px;
            transition: background 0.18s;
        }
        .story-modal-close:hover { background: rgba(0,0,0,0.7); }
        /* Gambar story */
        .story-modal-img {
            width: 100%;
            aspect-ratio: 9/16;
            object-fit: cover;
            display: block;
        }
        /* Navigasi prev/next */
        .story-nav {
            position: absolute;
            top: 0; bottom: 0;
            width: 45%;
            cursor: pointer;
            z-index: 11;
        }
        .story-nav.prev { left: 0; }
        .story-nav.next { right: 0; }
        /* Caption bawah */
        .story-modal-caption {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 40px 16px 18px;
            background: linear-gradient(to top, rgba(0,0,0,0.75), transparent);
            color: #fff;
            font-size: 13px;
            line-height: 1.5;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">
        <a href="dashboard admin.php"><img src="asset/logo2.png" alt="logo"></a>
    </div>
    <div class="side-menu">
        <a href="search.php"><i class="ri-global-line"></i></a>
        <a href="home-page.php" class="active"><i class="ri-home-4-line"></i></a>
        <a href="posting.php"><i class="ri-add-line"></i></a>
        <a href="map.php"><i class="ri-map-pin-line"></i></a>
        <a href="notification.php"><i class="ri-notification-3-line"></i></a>
        <a href="profilesetting.php"><i class="ri-settings-3-line"></i></a>
    </div>
    <div class="profile">
        <a href="profilesetting.php">
            <img src="asset/Ellipse 11.png" alt="profile">
        </a>
    </div>
</div>

<!-- MAIN LAYOUT -->
<main class="layout">

  <!-- ═══════════════════════════ FEED ═══════════════════════════ -->
  <section class="feed">
    <header class="feed-header">
      <div>
        <h1>Feeds</h1>
        <div class="sub">Trending kuliner &amp; cerita dari komunitas</div>
      </div>
      <div class="controls">
        <div class="tabs">
          <button class="tab" data-tab="tab-baru">Baru</button>
          <button class="tab active" data-tab="tab-populer">Populer</button>
          <button class="tab" data-tab="tab-teman">Teman</button>
        </div>
        <a href="posting.php" class="fab-post" aria-label="post">+</a>
      </div>
    </header>

    <div class="hero-banner">
      <div class="hero-copy">
        <h2>Temukan rasa baru hari ini</h2>
        <p>Ceritakan pengalaman kulinermu atau bagikan resep favorit — komunitas menunggu!</p>
      </div>
      <div class="hero-image">
        <img src="asset/or.png" alt="hero banner">
      </div>
    </div>

    <div class="feed-scroll">

      <!-- ╔══════════════════════════════════════╗
           ║  TAB POPULER — 6 card lengkap         ║
           ╚══════════════════════════════════════╝ -->
      <div id="tab-populer" class="tab-section active">
        <div class="cards">

          <!-- CARD 1 · Pungky Satriani -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profile.png" alt="Pungky Satriani">
              <div><h4>Pungky Satriani</h4><p>Banyumas, Jawa Tengah</p></div>
              <span class="tag">Resep</span>
            </div>
            <img class="card-img" src="asset/Rectangle 93.png" alt="kue pukis">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">4,000 likes</p>
              <p>Siapa yang kangen jajanan klasik ini? Kue pukis, manis legit dengan tekstur lembut...</p>
              <p class="meta">Lihat semua 620 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro1.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Ayu Pratiwi</span><span class="comment-date">2 minggu yang lalu</span></div>
                      <div class="comment-text">Aduh nostalgia banget, dulu tiap pulang sekolah pasti beli pukis di depan gerbang 😍</div>
                    </div>
                  </div>
                  <div class="comment-item">
                    <img src="asset/pro2.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Rizky H.</span><span class="comment-date">1 minggu yang lalu</span></div>
                      <div class="comment-text">Teksturnya keliatan lembut banget, resepnya dong kak 🙏</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">2 Minggu yang lalu</p>
                <a href="user-pungky-satriani.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD 2 · Wade Warren (FIXED: header 1 baris via CSS flexbox) -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profile 2.png" alt="Wade Warren">
              <div><h4>Wade Warren</h4><p>Palembang, Sumatera Selatan</p></div>
              <span class="tag story">Cerita Kuliner</span>
            </div>
            <img class="card-img" src="asset/post.png" alt="Tekwan Palembang">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">3,000 likes</p>
              <p>Bukan cuma pempek, Palembang punya tekwan yang hangat &amp; bersejarah...</p>
              <p class="meta">Lihat semua 520 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro3.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Dina Kartika</span><span class="comment-date">2 minggu yang lalu</span></div>
                      <div class="comment-text">Baru tau sejarah tekwan ternyata sedalem itu, jadi pengen ke Palembang lagi 😭</div>
                    </div>
                  </div>
                  <div class="comment-item">
                    <img src="asset/pro4.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Fajar Ananda</span><span class="comment-date">1 minggu yang lalu</span></div>
                      <div class="comment-text">Setuju! Kuah tekwan hangat-hangat gitu paling enak dimakan pas hujan 🌧️</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">2 Minggu yang lalu</p>
                <a href="user-wade-warren.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD 3 · Dewi Hartati (FIXED: tombol Lihat ditambahkan) -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profile 3.png" alt="Dewi Hartati">
              <div><h4>Dewi Hartati</h4><p>Bandung, Jawa Barat</p></div>
              <span class="tag">Review</span>
            </div>
            <img class="card-img" src="asset/Batagor.jpg" alt="Batagor Bandung">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">6,200 likes</p>
              <p>Batagor legendaris Bandung dengan bumbu kacang gurih dan sambal pedas manis. Renyah di luar, lembut di dalam!</p>
              <p class="meta">Lihat semua 220 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro1.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Gilang Ramadhan</span><span class="comment-date">1 minggu yang lalu</span></div>
                      <div class="comment-text">Ini batagor favoritku juga! Bumbunya ngga pelit sama sekali 😋</div>
                    </div>
                  </div>
                  <div class="comment-item">
                    <img src="asset/pro2.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Mega Lestari</span><span class="comment-date">6 hari yang lalu</span></div>
                      <div class="comment-text">Review-nya lengkap banget, next ke Bandung wajib mampir sini.</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">1 Minggu yang lalu</p>
                <a href="user_dewi_hartati.php?id=batagor-bandung" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD 4 · Rian Saputra -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profile 4.png" alt="Rian Saputra">
              <div><h4>Rian Saputra</h4><p>Yogyakarta</p></div>
              <span class="tag story">Cerita Kuliner</span>
            </div>
            <img class="card-img" src="asset/Nasi Gudeg.jpg" alt="Gudeg Jogja">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">5,100 likes</p>
              <p>Jogja bukan hanya gudeg. Ada banyak cerita di balik jajanan legendaris...</p>
              <p class="meta">Lihat semua 340 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro3.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Sari Anindya</span><span class="comment-date">3 minggu yang lalu</span></div>
                      <div class="comment-text">Jogja emang selalu punya cerita, bahkan dari makanan pinggir jalannya ❤️</div>
                    </div>
                  </div>
                  <div class="comment-item">
                    <img src="asset/pro4.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Yoga P.</span><span class="comment-date">2 minggu yang lalu</span></div>
                      <div class="comment-text">Baca ini jadi inget pertama kali touring ke Jogja cuma buat kulineran.</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">3 Minggu yang lalu</p>
                <a href="user-rian-saputra.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD 5 · Marta Lestari -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profile 5.png" alt="Marta Lestari">
              <div><h4>Marta Lestari</h4><p>Surabaya, Jawa Timur</p></div>
              <span class="tag">Resep</span>
            </div>
            <img class="card-img" src="asset/Rawon Daging.jpg" alt="Rawon Surabaya">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">1,800 likes</p>
              <p>Resep rawon khas Jawa Timur, kuah hitam gurih dengan daging empuk yang bikin ketagihan!</p>
              <p class="meta">Lihat semua 110 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro1.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Lina K.</span><span class="comment-date">3 hari yang lalu</span></div>
                      <div class="comment-text">Rawon-nya keliatan pekat banget, ini pake kluwek favoritku kayaknya 🤤</div>
                    </div>
                  </div>
                  <div class="comment-item">
                    <img src="asset/pro2.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Bagus Prasetyo</span><span class="comment-date">2 hari yang lalu</span></div>
                      <div class="comment-text">Sudah coba resepnya, rasanya mirip banget rawon langganan di Surabaya!</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">4 Hari yang lalu</p>
                <a href="user-marta-lestari.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD 6 · Ari Pratama (FIXED: tombol Lihat ditambahkan) -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profile 6.png" alt="Ari Pratama">
              <div><h4>Ari Pratama</h4><p>Medan, Sumatera Utara</p></div>
              <span class="tag">Review</span>
            </div>
            <img class="card-img" src="asset/Resep Bika Ambon yang Bertekstur Lembut.jpg" alt="Bika Ambon Medan">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">2,900 likes</p>
              <p>Bika ambon legit dari toko lama di Medan ini masih juara sampai sekarang 🔥🔥</p>
              <p class="meta">Lihat semua 260 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro3.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Nadya Salsabila</span><span class="comment-date">5 hari yang lalu</span></div>
                      <div class="comment-text">Langganan titip bika ambon dari Medan ke Jakarta, toko ini emang nggak pernah gagal.</div>
                    </div>
                  </div>
                  <div class="comment-item">
                    <img src="asset/pro4.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Jonathan</span><span class="comment-date">4 hari yang lalu</span></div>
                      <div class="comment-text">Teksturnya keliatan bersarang banget, persis yang asli Medan!</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">5 Hari yang lalu</p>
                <a href="user-ari-pratama.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

        </div><!-- /.cards populer -->
      </div><!-- /#tab-populer -->


      <!-- ╔══════════════════════════════════════╗
           ║  TAB BARU — 3 card dummy              ║
           ╚══════════════════════════════════════╝ -->
      <div id="tab-baru" class="tab-section">
        <div class="cards">

          <!-- CARD BARU 1 -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profilefor5.jpg" alt="Siti Rahayu">
              <div><h4>Siti Rahayu</h4><p>Semarang, Jawa Tengah</p></div>
              <span class="tag">Resep</span>
            </div>
            <img class="card-img" src="asset/gulaiayamkampung.jpeg" alt="Gulai Ayam Kampung">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">2,100 likes</p>
              <p>Gulai ayam kampung bumbu merah — perpaduan rempah yang bikin nagih dan cocok dimakan siang hari!</p>
              <p class="meta">Lihat semua 98 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro2.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Hana</span><span class="comment-date">Kemarin</span></div>
                      <div class="comment-text">Warna gulainya cantik banget, pasti enak dimakan sama nasi panas 🍛</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">3 Jam yang lalu</p>
                <a href="user-siti-rahayu.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD BARU 2 -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profilefor5.jpg" alt="Dendi Kusuma">
              <div><h4>Dendi Kusuma</h4><p>Makassar, Sulawesi Selatan</p></div>
              <span class="tag story">Cerita Kuliner</span>
            </div>
            <img class="card-img" src="asset/cotomakasar.jpeg" alt="coto makassar">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">870 likes</p>
              <p>Pertama kali makan coto Makassar di warung aslinya — pengalaman kuliner yang benar-benar tak terlupakan!</p>
              <p class="meta">Lihat semua 45 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro3.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Yuni</span><span class="comment-date">5 jam yang lalu</span></div>
                      <div class="comment-text">Coto Makassar emang juara deh, apalagi kalau pake burasa!</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">6 Jam yang lalu</p>
                <a href="user-dendi-kusuma.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD BARU 3 -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profilefor5.jpg" alt="Reza Mahendra">
              <div><h4>Reza Mahendra</h4><p>Lombok, NTB</p></div>
              <span class="tag">Review</span>
            </div>
            <img class="card-img" src="asset/ayamtaliwang.jpeg" alt="Ayam Taliwang Lombok">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">1,320 likes</p>
              <p>Ayam Taliwang di warung tepi pantai Lombok — pedas membakar tapi bikin ketagihan setiap kali ke sini.</p>
              <p class="meta">Lihat semua 72 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro1.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Aldo</span><span class="comment-date">Baru saja</span></div>
                      <div class="comment-text">Ayam Taliwang asli Lombok emang beda rasanya!</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">1 Jam yang lalu</p>
                <a href="user-reza-mahendra.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

        </div><!-- /.cards baru -->
      </div><!-- /#tab-baru -->


      <!-- ╔══════════════════════════════════════╗
           ║  TAB TEMAN — 2 card dummy             ║
           ╚══════════════════════════════════════╝ -->
      <div id="tab-teman" class="tab-section">
        <div class="cards">

          <!-- CARD TEMAN 1 -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profilefor5.jpg" alt="Rian Saputra">
              <div><h4>Rian Saputra</h4><p>Yogyakarta</p></div>
              <span class="tag story">Cerita Kuliner</span>
            </div>
            <img class="card-img" src="asset/tidakhanyagudeg.jpeg" alt="Gudeg Jogja">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">5,100 likes</p>
              <p>Jogja bukan hanya gudeg. Ada banyak cerita di balik jajanan legendaris yang wajib dicoba!</p>
              <p class="meta">Lihat semua 340 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro3.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Sari Anindya</span><span class="comment-date">3 minggu yang lalu</span></div>
                      <div class="comment-text">Jogja emang selalu punya cerita dari makanan pinggir jalannya ❤️</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">3 Minggu yang lalu</p>
                <a href="user-rian-saputra.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

          <!-- CARD TEMAN 2 -->
          <div class="card">
            <div class="card-header">
              <img src="asset/profilefor5.jpg" alt="Budi Santoso">
              <div><h4>Budi Santoso</h4><p>Solo, Jawa Tengah</p></div>
              <span class="tag">Resep</span>
            </div>
            <img class="card-img" src="asset/baksosolo.jpeg" alt="Bakso Solo">
            <div class="card-icon">
              <i class="ri-heart-line"></i>
              <i class="ri-chat-1-line"></i>
              <i class="ri-share-forward-line"></i>
            </div>
            <div class="card-body">
              <p class="likes">3,400 likes</p>
              <p>Bakso Solo yang kenyal dengan kuah kaldu sapi pekat — resep warung legendaris 30 tahun!</p>
              <p class="meta">Lihat semua 185 comments</p>
              <div class="comment-box">
                <div class="comment-header-row"><span class="comment-title">Komentar</span></div>
                <div class="comment-list">
                  <div class="comment-item">
                    <img src="asset/pro4.png" class="comment-avatar-img" alt="">
                    <div class="comment-bubble">
                      <div class="comment-top"><span class="comment-name">Yoga P.</span><span class="comment-date">1 minggu yang lalu</span></div>
                      <div class="comment-text">Udah pernah ke sana! Kuahnya emang beda, bikin ketagihan 🍜</div>
                    </div>
                  </div>
                </div>
                <div class="comment-form">
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="">
                  <input type="text" class="comment-input" placeholder="Tulis komentar...">
                  <button type="button" class="comment-send">Kirim</button>
                </div>
              </div>
              <div class="time-row">
                <p class="time">1 Minggu yang lalu</p>
                <a href="user-budi-santoso.php" class="blog-btn">Lihat</a>
              </div>
            </div>
          </div>

        </div><!-- /.cards teman -->
      </div><!-- /#tab-teman -->

    </div><!-- /.feed-scroll -->
  </section><!-- /feed -->


  <!-- ═══════════════════════════ RIGHT PANEL ═══════════════════════════ -->
  <aside class="right">
  <div class="right-inner">

    <div class="stories-card">
      <h3>Cerita</h3>
      <div class="stories">
        
        <div class="story-item" data-story-index="0">
          <div class="story-avatar-wrapper">
            <img src="asset/dzakiyah.jpeg" alt="Story 1">
          </div>
          <span class="story-username">Dzakiyah Rara</span>
        </div>

        <div class="story-item" data-story-index="1">
          <div class="story-avatar-wrapper">
            <img src="asset/oca.jpeg" alt="Story 2">
          </div>
          <span class="story-username">Ocha R</span>
        </div>

        <div class="story-item" data-story-index="2">
          <div class="story-avatar-wrapper">
            <img src="asset/sarahkayes.jpeg" alt="Story 3">
          </div>
          <span class="story-username">Sarah and Keysha</span>
        </div>

        <div class="story-item" data-story-index="3">
          <div class="story-avatar-wrapper">
            <img src="asset/reva.jpeg" alt="Story 4">
          </div>
          <span class="story-username">Reva</span>
        </div>

      </div>
    </div>

  
      <!-- Pilihan Terpopuler -->
<!-- PASTIKAN CODES DI BAWAH INI BERADA DI DALAM <div class="right-inner"> -->

    <!-- ==================== SEKSI STORIES/CERITA KAMU (TUTUP DENGAN AMAN) ==================== -->
    <!-- (Pastikan div penutup seksi cerita di atasnya sudah aman, lalu lanjut ke seksi di bawah ini) -->

    <!-- ==================== AREA TOP PICKS (BERSIH & TERISOLASI) ==================== -->
    <div class="trending-mini" style="background: rgba(255,255,255,0.9) !important; border-radius: 16px !important; padding: 1rem !important; box-shadow: 0 8px 22px rgba(0,0,0,0.05) !important; border: 1px solid rgba(255,255,255,0.7) !important; backdrop-filter: blur(10px) !important; display: flex !important; flex-direction: column !important; gap: 0.7rem !important; width: 100% !important; clear: both !important;">
        
        <h3 style="margin: 0 0 0.2rem !important; font-size: 0.86rem !important; font-weight: 700 !important; letter-spacing: 0.05em !important; text-transform: uppercase !important; color: #5c3b18 !important; opacity: 0.85 !important; display: block !important;">Pilihan Terpopuler</h3>
        
        <div class="mini-list" style="display: flex !important; flex-direction: column !important; gap: 0.7rem !important; width: 100% !important;">

            <!-- Card 1: Gudeg Jogja -->
            <a href="search.php?q=Jogja" class="mini-card" style="display: flex !important; gap: 0.7rem !important; align-items: center !important; background: rgba(255,255,255,0.95) !important; padding: 0.6rem 0.7rem !important; border-radius: 12px !important; box-shadow: 0 6px 18px rgba(0,0,0,0.04) !important; text-decoration: none !important;">
                <img src="asset/tidakhanyagudeg.jpeg" alt="Gudeg Jogja" style="width: 54px !important; height: 54px !important; border-radius: 10px !important; object-fit: cover !important; display: block !important;">
                <div class="mini-info" style="line-height: 1.3 !important;">
                    <strong style="font-size: 0.88rem !important; color: #5c3b18 !important; font-weight: 600 !important; display: block !important;">Gudeg Jogja</strong>
                    <span style="font-size: 0.74rem !important; color: #6b5031 !important; margin-top: 2px !important; display: block !important;">7.8k saves</span>
                </div>
            </a> <!-- Tag penutup A card 1 -->

            <!-- Card 2: Bakso Malang -->
            <a href="search.php?q=Bakso" class="mini-card" style="display: flex !important; gap: 0.7rem !important; align-items: center !important; background: rgba(255,255,255,0.95) !important; padding: 0.6rem 0.7rem !important; border-radius: 12px !important; box-shadow: 0 6px 18px rgba(0,0,0,0.04) !important; text-decoration: none !important;">
                <img src="asset/bakso.png" alt="Bakso Malang" style="width: 54px !important; height: 54px !important; border-radius: 10px !important; object-fit: cover !important; display: block !important;">
                <div class="mini-info" style="line-height: 1.3 !important;">
                    <strong style="font-size: 0.88rem !important; color: #5c3b18 !important; font-weight: 600 !important; display: block !important;">Bakso Malang</strong>
                    <span style="font-size: 0.74rem !important; color: #6b5031 !important; margin-top: 2px !important; display: block !important;">5.1k saves</span>
                </div>
            </a> <!-- Tag penutup A card 2 -->

        </div> <!-- Tag penutup mini-list -->
    </div> <!-- Tag penutup trending-mini -->

<!-- SILAHKAN LANJUT KE SEKSI DISARANKAN / SUGGESTED DI BAWAHNYA -->
      <!-- Disarankan -->
      <div class="suggest-card">
        <h3>Disarankan</h3>
        <ul class="suggest">
          <li>
            <img src="asset/pro1.png" alt="Arlene McCoy">
            <div class="s-meta"><strong>Arlene McCoy</strong><span class="handle">@Lene</span></div>
            <button class="add">+ Follow</button>
          </li>
          <li>
            <img src="asset/pro2.png" alt="Jerome Bell">
            <div class="s-meta"><strong>Jerome Bell</strong><span class="handle">@Bell</span></div>
            <button class="add">+ Follow</button>
          </li>
          <li>
            <img src="asset/pro3.png" alt="Albert Flores">
            <div class="s-meta"><strong>Albert Flores</strong><span class="handle">@Flo</span></div>
            <button class="add">+ Follow</button>
          </li>
          <li>
            <img src="asset/pro4.png" alt="Ralph Edwards">
            <div class="s-meta"><strong>Ralph Edwards</strong><span class="handle">@Wards</span></div>
            <button class="add">+ Follow</button>
          </li>
        </ul>
      </div>

    </div>
  </aside>

</main><!-- /layout -->


<!-- ═══════════════════════════════════════════════════════════
     STORY MODAL (Instagram-style pop-up)
     ═══════════════════════════════════════════════════════════ -->
<div class="story-modal-overlay" id="storyModal">
  <div class="story-modal-box">

    <!-- Progress bar (1 segment per story) -->
    <div class="story-progress-bar" id="storyProgressBar"></div>

    <!-- Header: avatar + nama + waktu -->
    <div class="story-modal-header">
      <img class="story-modal-avatar" id="storyAvatar" src="asset/Ellipse 11.png" alt="">
      <span class="story-modal-name" id="storyName">Alexa Rawles</span>
      <span class="story-modal-time" id="storyTime">Baru saja</span>
    </div>

    <!-- Tombol close -->
    <button class="story-modal-close" id="storyClose">
      <i class="ri-close-line"></i>
    </button>

    <!-- Gambar utama story -->
    <img class="story-modal-img" id="storyImg" src="asset/story1.png" alt="Story">

    <!-- Navigasi klik kiri/kanan -->
    <div class="story-nav prev" id="storyPrev"></div>
    <div class="story-nav next" id="storyNext"></div>

    <!-- Caption -->
    <div class="story-modal-caption" id="storyCaption">Cerita kuliner hari ini</div>

  </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

  /* ════════════════════════════════════════════
     1. SISTEM TAB
  ════════════════════════════════════════════ */
  const tabBtns = document.querySelectorAll('.tabs .tab');
  const tabSecs = document.querySelectorAll('.tab-section');

  tabBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      tabBtns.forEach(function (b) { b.classList.remove('active'); });
      tabSecs.forEach(function (s) { s.classList.remove('active'); });
      this.classList.add('active');
      const sec = document.getElementById(this.getAttribute('data-tab'));
      if (sec) sec.classList.add('active');
    });
  });


  /* ════════════════════════════════════════════
     2. SCROLL: sembunyikan header + hero
  ════════════════════════════════════════════ */
  const feedHeader = document.querySelector('.feed-header');
  const heroBanner = document.querySelector('.hero-banner');
  if (feedHeader && heroBanner) {
    const trigger = feedHeader.offsetHeight + heroBanner.offsetHeight - 20;
    window.addEventListener('scroll', function () {
      const over = window.scrollY > trigger;
      feedHeader.classList.toggle('scrolled', over);
      heroBanner.classList.toggle('scrolled', over);
    });
  }


  /* ════════════════════════════════════════════
     3. LIKE (event delegation)
  ════════════════════════════════════════════ */
  document.addEventListener('click', function (e) {
    const icon = e.target;
    if ((!icon.classList.contains('ri-heart-line') && !icon.classList.contains('ri-heart-fill'))
        || !icon.closest('.card-icon')) return;
    const liked = icon.classList.toggle('liked');
    icon.classList.toggle('ri-heart-line', !liked);
    icon.classList.toggle('ri-heart-fill', liked);
  });


  /* ════════════════════════════════════════════
     4. KOMENTAR (event delegation)
  ════════════════════════════════════════════ */
  document.addEventListener('click', function (e) {
    if (!e.target.classList.contains('ri-chat-1-line') || !e.target.closest('.card-icon')) return;
    const card = e.target.closest('.card');
    const box  = card && card.querySelector('.comment-box');
    if (!box) return;

    if (!box.dataset.init) {
      const input   = box.querySelector('.comment-input');
      const sendBtn = box.querySelector('.comment-send');
      const list    = box.querySelector('.comment-list');

      function addComment () {
        const text = input.value.trim();
        if (!text) return;
        const item = document.createElement('div');
        item.className = 'comment-item';
        item.innerHTML =
          '<img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Kamu">' +
          '<div class="comment-bubble"><div class="comment-top">' +
          '<span class="comment-name">Kamu</span>' +
          '<span class="comment-date">Baru saja</span></div>' +
          '<div class="comment-text">' + text + '</div></div>';
        list.appendChild(item);
        input.value = '';
        list.scrollTop = list.scrollHeight;
      }
      if (sendBtn) sendBtn.addEventListener('click', addComment);
      if (input)   input.addEventListener('keydown', function(ev){
        if (ev.key === 'Enter') { ev.preventDefault(); addComment(); }
      });
      box.dataset.init = 'true';
    }
    box.classList.toggle('show');
    e.target.classList.toggle('comment-active');
  });


  /* ════════════════════════════════════════════
     5. TOMBOL FOLLOW — toggle teks & warna
  ════════════════════════════════════════════ */
  document.querySelectorAll('.add').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const isFollowing = this.textContent.trim() === 'Mengikuti';
      this.textContent = isFollowing ? '+ Follow' : 'Mengikuti';
      this.style.background = isFollowing ? '' : '#6c4e2c';
      this.style.color      = isFollowing ? '' : '#fff';
    });
  });


  /* ════════════════════════════════════════════
     6. STORY MODAL — Instagram-style
  ════════════════════════════════════════════ */
// Data story — Sekarang dipisah antara foto profil dan foto isi story-nya
  const stories = [
    { 
      avatar: 'asset/dzakiyah.jpeg', 
      storyImg: 'asset/storypop1.jpeg', 
      name: 'Dzakiyah Rara',   
      time: '5 menit lalu',  
      caption: 'Sarapan enak biar hari makin semangat <3' 
    },
    { 
      avatar: 'asset/oca.jpeg',      
      storyImg: 'asset/storypop2.jpeg', 
      name: 'Ocha R',          
      time: '12 menit lalu', 
      caption: 'Kue pukis fresh from the pan!' 
    },
    { 
      avatar: 'asset/sarahkayes.jpeg', 
      storyImg: 'asset/storypop3.jpeg', 
      name: 'Sarah and Keysha', 
      time: '30 menit lalu', 
      caption: 'Weekend di Bandung, wajib mampir batagor>< ' 
    },
    { 
      avatar: 'asset/reva.jpeg',     
      storyImg: 'asset/storypop4.jpeg', 
      name: 'Reva',            
      time: '1 jam lalu',    
      caption: 'Jogja selalu punya kejutan kuliner o_o ' 
    },
  ];

  const modal      = document.getElementById('storyModal');
  const imgEl      = document.getElementById('storyImg');
  const nameEl     = document.getElementById('storyName');
  const timeEl     = document.getElementById('storyTime');
  const captionEl  = document.getElementById('storyCaption');
  const avatarEl   = document.getElementById('storyAvatar');
  const progressBar= document.getElementById('storyProgressBar');
  const closeBtn   = document.getElementById('storyClose');
  const prevBtn    = document.getElementById('storyPrev');
  const nextBtn    = document.getElementById('storyNext');

  let currentIndex = 0;
  let autoTimer    = null;

  // Buat segment progress bar
  function buildProgressBar (total) {
    progressBar.innerHTML = '';
    for (let i = 0; i < total; i++) {
      const seg = document.createElement('div');
      seg.className = 'story-progress-segment';
      seg.innerHTML = '<div class="fill"></div>';
      progressBar.appendChild(seg);
    }
  }

  function updateProgressBar (activeIndex) {
    const segs = progressBar.querySelectorAll('.story-progress-segment');
    segs.forEach(function (seg, i) {
      seg.classList.remove('done', 'active');
      if (i < activeIndex)  seg.classList.add('done');
      if (i === activeIndex) seg.classList.add('active');
    });
  }
function showStory (index) {
    if (index < 0 || index >= stories.length) { closeModal(); return; }
    currentIndex = index;
    const s = stories[index];
    
    // 1. imgEl adalah foto konten utama (pakai storyImg)
    imgEl.src       = s.storyImg;
    
    // 2. avatarEl adalah foto profil kecil di pojok modal (pakai avatar)
    avatarEl.src    = s.avatar;
    
    nameEl.textContent    = s.name;
    timeEl.textContent    = s.time;
    captionEl.textContent = s.caption;
    
    updateProgressBar(index);

    // Auto-advance setelah 4 detik
    clearTimeout(autoTimer);
    autoTimer = setTimeout(function () { showStory(index + 1); }, 4000);
  }

  function openModal (startIndex) {
    buildProgressBar(stories.length);
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
    showStory(startIndex);
  }

  function closeModal () {
    modal.classList.remove('open');
    document.body.style.overflow = '';
    clearTimeout(autoTimer);
  }

  // Klik story item di panel kanan
  document.querySelectorAll('.story-item').forEach(function (item) {
    item.addEventListener('click', function () {
      const idx = parseInt(this.getAttribute('data-story-index'), 10) || 0;
      openModal(idx);
    });
  });

  // Navigasi
  nextBtn.addEventListener('click', function () { showStory(currentIndex + 1); });
  prevBtn.addEventListener('click', function () { showStory(currentIndex - 1); });

  // Tombol X
  closeBtn.addEventListener('click', closeModal);

  // Klik area gelap di luar box
  modal.addEventListener('click', function (e) {
    if (e.target === modal) closeModal();
  });

  // Keyboard: Esc = tutup, ← → = navigasi
  document.addEventListener('keydown', function (e) {
    if (!modal.classList.contains('open')) return;
    if (e.key === 'Escape')     closeModal();
    if (e.key === 'ArrowRight') showStory(currentIndex + 1);
    if (e.key === 'ArrowLeft')  showStory(currentIndex - 1);
  });

}); // DOMContentLoaded
</script>

</body>
</html>