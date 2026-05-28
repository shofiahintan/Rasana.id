<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rasana.id - Search page</title>
    <link rel="stylesheet" href="search.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

<div class="sidebar">
    <div class="logo">
        <a href="dashboard admin.php"><img src="asset/logo2.png" alt="logo"></a>
    </div>

    <div class="side-menu">
        <a href="search.php" class="active"><i class="ri-global-line"></i></a>
        <a href="home-page.php"><i class="ri-home-4-line"></i></a>
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

<section class="main">

    <div class="hero">
        <h1>Apa yang ingin anda cari hari ini ?</h1>
        <p>Jelajahi resep, cerita, dan review kuliner dari komunitas kami</p>

        <form class="search-box" id="searchForm" onsubmit="return false;">
            <input type="text" id="searchInput" placeholder="Cari ‘rendang padang’ atau ‘warteg terdekat’">
            <button type="button" id="searchBtn">
                <i class="ri-search-line"></i> Cari
            </button>
        </form>

        <div class="filter" id="filterContainer">
            <button class="active" data-category="semua"><i class="ri-grid-fill"></i> Semua</button>
            <button data-category="resep"><i class="ri-restaurant-line"></i> Resep</button>
            <button data-category="review"><i class="ri-star-smile-line"></i> Review</button>
            <button data-category="cerita"><i class="ri-chat-1-line"></i> Cerita</button>
        </div>

        <p class="popular">Pencarian populer</p>
        <div class="tags" id="popularTags">
            <span class="popular-tag">Kue Pukis</span>
            <span class="popular-tag">Rawon</span>
            <span class="popular-tag">Rendang Padang</span>
            <span class="popular-tag">Sate Ayam</span>
        </div>
    </div>

    <div class="cards" id="cardsContainer">

        <!-- CARD 1: RESEP KUE PUKIS -->
        <div class="card" data-category="resep">
            <div class="card-header">
                <img src="asset/profile.png" alt="">
                <div>
                    <h4>Pungky Satriani</h4>
                    <p>Banyumas, Jawa Tengah</p>
                </div>
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
                <p class="card-title">Siapa yang kangen jajanan klasik ini? Kue pukis, manis legit dengan tekstur lembut...</p>
                <p class="meta">Lihat semua 620 comments</p>

                <div class="comment-box">
                    <div class="comment-header-row">
                        <span class="comment-title">Komentar</span>
                    </div>
                    <div class="comment-list">
                        <div class="comment-item">
                            <img src="asset/pro1.png" class="comment-avatar-img" alt="Ayu Pratiwi">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Ayu Pratiwi</span>
                                    <span class="comment-date">2 minggu yang lalu</span>
                                </div>
                                <div class="comment-text">Aduh nostalgia banget, dulu tiap pulang sekolah pasti beli pukis di depan gerbang 😍</div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Profil kamu">
                        <input type="text" class="comment-input" placeholder="Tulis komentar..." />
                        <button type="button" class="comment-send">Kirim</button>
                    </div>
                </div>

                <div class="time-row">
                    <p class="time">2 Minggu yang lalu</p>
                    <a href="user-pungky-satriani.php" class="blog-btn">Lihat</a>
                </div>
            </div>
        </div>

        <!-- CARD 2: CERITA TEKWAN -->
        <div class="card" data-category="cerita">
            <div class="card-header">
                <img src="asset/profile 2.png" alt="">
                <div>
                    <h4>Wade Warren</h4>
                    <p>Palembang, Sumatera Selatan</p>
                </div>
                <span class="tag story">Cerita Kuliner</span>
            </div>

            <img class="card-img" src="asset/post.png" alt="">

            <div class="card-icon">
                <i class="ri-heart-line"></i>
                <i class="ri-chat-1-line"></i>
                <i class="ri-share-forward-line"></i>
            </div>

            <div class="card-body">
                <p class="likes">3,000 likes</p>
                <p class="card-title">Bukan cuma pempek, Palembang punya tekwan yang hangat & bersejarah...</p>
                <p class="meta">Lihat semua 520 comments</p>

                <div class="comment-box">
                    <div class="comment-header-row">
                        <span class="comment-title">Komentar</span>
                    </div>
                    <div class="comment-list">
                        <div class="comment-item">
                            <img src="asset/pro3.png" class="comment-avatar-img" alt="Dina Kartika">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Dina Kartika</span>
                                    <span class="comment-date">2 minggu yang lalu</span>
                                </div>
                                <div class="comment-text">Baru tau sejarah tekwan ternyata sedalem itu, jadi pengen ke Palembang lagi 😭</div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Profil kamu">
                        <input type="text" class="comment-input" placeholder="Tulis komentar..." />
                        <button type="button" class="comment-send">Kirim</button>
                    </div>
                </div>

                <div class="time-row">
                    <p class="time">2 Minggu yang lalu</p>
                    <a href="user-wade-warren.php" class="blog-btn">Lihat</a>
                </div>
            </div>
        </div>

        <!-- CARD 3: REVIEW BATAGOR -->
        <div class="card" data-category="review">
            <div class="card-header">
                <img src="asset/profile 3.png" alt="">
                <div>
                    <h4>Dewi Hartati</h4>
                    <p>Bandung, Jawa Barat</p>
                </div>
                <span class="tag">Review</span>
            </div>

            <img class="card-img" src="asset/Batagor.jpg" alt="">

            <div class="card-icon">
                <i class="ri-heart-line"></i>
                <i class="ri-chat-1-line"></i>
                <i class="ri-share-forward-line"></i>
            </div>

            <div class="card-body">
                <p class="likes">6,200 likes</p>
                <p class="card-title">Batagor legendaris Bandung dengan bumbu kacang gurih dan sambal pedas manis. Renyah di luar, lembut di dalam!</p>
                <p class="meta">Lihat semua 220 comments</p>

                <div class="comment-box">
                    <div class="comment-header-row">
                        <span class="comment-title">Komentar</span>
                    </div>
                    <div class="comment-list">
                        <div class="comment-item">
                            <img src="asset/pro1.png" class="comment-avatar-img" alt="Gilang Ramadhan">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Gilang Ramadhan</span>
                                    <span class="comment-date">1 minggu yang lalu</span>
                                </div>
                                <div class="comment-text">Ini batagor favoritku juga! Bumbunya ngga pelit sama sekali 😋</div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Profil kamu">
                        <input type="text" class="comment-input" placeholder="Tulis komentar..." />
                        <button type="button" class="comment-send">Kirim</button>
                    </div>
                </div>

                <div class="time-row">
                    <p class="time">1 Minggu yang lalu</p>
                    <a href="user_dewi_hartati.php" class="blog-btn">Lihat</a>
                </div>
            </div>
        </div>

        <!-- CARD 4: CERITA JOGJA -->
        <div class="card" data-category="cerita">
            <div class="card-header">
                <img src="asset/profilefor5.jpg" alt="">
                <div>
                    <h4>Rian Saputra</h4>
                    <p>Yogyakarta</p>
                </div>
                <span class="tag story">Cerita Kuliner</span>
            </div>

            <img class="card-img" src="asset/tidakhanyagudeg.jpeg" alt="">

            <div class="card-icon">
                <i class="ri-heart-line"></i>
                <i class="ri-chat-1-line"></i>
                <i class="ri-share-forward-line"></i>
            </div>

            <div class="card-body">
                <p class="likes">5,100 likes</p>
                <p class="card-title">Jogja bukan hanya gudeg. Ada banyak cerita di balik jajanan legendaris...</p>
                <p class="meta">Lihat semua 340 comments</p>

                <div class="comment-box">
                    <div class="comment-header-row">
                        <span class="comment-title">Komentar</span>
                    </div>
                    <div class="comment-list">
                        <div class="comment-item">
                            <img src="asset/pro3.png" class="comment-avatar-img" alt="Sari Anindya">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Sari Anindya</span>
                                    <span class="comment-date">3 minggu yang lalu</span>
                                </div>
                                <div class="comment-text">Jogja emang selalu punya cerita, bahkan dari makanan pinggir jalannya ❤️</div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Profil kamu">
                        <input type="text" class="comment-input" placeholder="Tulis komentar..." />
                        <button type="button" class="comment-send">Kirim</button>
                    </div>
                </div>

                <div class="time-row">
                    <p class="time">3 Minggu yang lalu</p>
                    <a href="user-rian-saputra.php" class="blog-btn">Lihat</a>
                </div>
            </div>
        </div>

        <!-- CARD 5: RESEP RAWON -->
        <div class="card" data-category="resep">
            <div class="card-header">
                <img src="asset/profile 5.png" alt="">
                <div>
                    <h4>Marta Lestari</h4>
                    <p>Surabaya, Jawa Timur</p>
                </div>
                <span class="tag">Resep</span>
            </div>

            <img class="card-img" src="asset/Rawon Daging.jpg" alt="">

            <div class="card-icon">
                <i class="ri-heart-line"></i>
                <i class="ri-chat-1-line"></i>
                <i class="ri-share-forward-line"></i>
            </div>

            <div class="card-body">
                <p class="likes">1,800 likes</p>
                <p class="card-title">Resep rawon khas Jawa Timur, kuah hitam gurih dengan daging empuk</p>
                <p class="meta">Lihat semua 110 comments</p>

                <div class="comment-box">
                    <div class="comment-header-row">
                        <span class="comment-title">Komentar</span>
                    </div>
                    <div class="comment-list">
                        <div class="comment-item">
                            <img src="asset/pro1.png" class="comment-avatar-img" alt="Lina K.">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Lina K.</span>
                                    <span class="comment-date">3 hari yang lalu</span>
                                </div>
                                <div class="comment-text">Rawon-nya keliatan pekat banget, ini pake kluwek favoritku kayaknya 🤤</div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Profil kamu">
                        <input type="text" class="comment-input" placeholder="Tulis komentar..." />
                        <button type="button" class="comment-send">Kirim</button>
                    </div>
                </div>

                <div class="time-row">
                    <p class="time">4 Hari yang lalu</p>
                    <a href="user-marta-lestari.php" class="blog-btn">Lihat</a>
                </div>
            </div>
        </div>

        <!-- CARD 6: REVIEW BIKA AMBON -->
        <div class="card" data-category="review">
            <div class="card-header">
                <img src="asset/profile 6.png" alt="">
                <div>
                    <h4>Ari Pratama</h4>
                    <p>Medan, Sumatera Utara</p>
                </div>
                <span class="tag">Review</span>
            </div>

            <img class="card-img" src="asset/Resep Bika Ambon yang Bertekstur Lembut.jpg" alt="">

            <div class="card-icon">
                <i class="ri-heart-line"></i>
                <i class="ri-chat-1-line"></i>
                <i class="ri-share-forward-line"></i>
            </div>

            <div class="card-body">
                <p class="likes">2,900 likes</p>
                <p class="card-title">Bika ambon legit dari toko lama di Medan ini masih juara sampai sekarang 🔥🔥</p>
                <p class="meta">Lihat semua 260 comments</p>

                <div class="comment-box">
                    <div class="comment-header-row">
                        <span class="comment-title">Komentar</span>
                    </div>
                    <div class="comment-list">
                        <div class="comment-item">
                            <img src="asset/pro3.png" class="comment-avatar-img" alt="Nadya Salsabila">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Nadya Salsabila</span>
                                    <span class="comment-date">5 hari yang lalu</span>
                                </div>
                                <div class="comment-text">Langganan titip bika ambon dari Medan ke Jakarta, toko ini emang nggak pernah gagal.</div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Profil kamu">
                        <input type="text" class="comment-input" placeholder="Tulis komentar..." />
                        <button type="button" class="comment-send">Kirim</button>
                    </div>
                </div>

                <div class="time-row">
                    <p class="time">5 Hari yang lalu</p>
                    <a href="user-ari-pratama.php" class="blog-btn">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTAINER EMPTY STATE -->
<div id="noMatchMessage" style="display:none; text-align:center; margin-top:20px; color:#6b5031; font-weight:500;">
    <i class="ri-emotion-sad-line" style="font-size: 30px; display:block; margin-bottom:8px;"></i>
    Ups! Kuliner yang kamu cari tidak ditemukan.
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {

    // =========================================================================
    // FITUR INTEGRASI: PENCARIAN KATA KUNCI & FILTER KATEGORI
    // =========================================================================
    const cards = document.querySelectorAll('.cards .card');
    const filterButtons = document.querySelectorAll('#filterContainer button');
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const popularTags = document.querySelectorAll('.popular-tag');
    const noMatchMessage = document.getElementById('noMatchMessage');
    const cardsContainer = document.getElementById('cardsContainer');

    // Variabel state global halaman pencarian
    let activeCategory = 'semua';
    let currentSearchQuery = '';

    // Fungsi Utama Kombinasi Filter & Search
    function applyFilterAndSearch() {
        let hasVisibleCard = false;

        cards.forEach(card => {
            const cardCategory = card.dataset.category;
            
            // Mengambil teks dari judul/deskripsi, nama pembuat, dan wilayah untuk dicari
            const cardTitle = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
            const authorName = card.querySelector('.card-header h4')?.textContent.toLowerCase() || '';
            const locationName = card.querySelector('.card-header p')?.textContent.toLowerCase() || '';
            
            // Cek kecocokan Kategori
            const matchCategory = (activeCategory === 'semua' || cardCategory === activeCategory);
            
            // Cek kecocokan Kata Kunci
            const matchQuery = cardTitle.includes(currentSearchQuery) || 
                               authorName.includes(currentSearchQuery) || 
                               locationName.includes(currentSearchQuery);

            // Jika dua-duanya cocok, tampilkan card
            if (matchCategory && matchQuery) {
                card.style.display = 'flex';
                hasVisibleCard = true;
            } else {
                card.style.display = 'none';
            }
        });

        // Menampilkan pesan jika tidak ada makanan yang cocok
        if (!hasVisibleCard) {
            if(!cardsContainer.contains(noMatchMessage)) {
                cardsContainer.after(noMatchMessage);
            }
            noMatchMessage.style.display = 'block';
        } else {
            noMatchMessage.style.display = 'none';
        }
    }

    // 1. Logika Klik Tombol Kategori Bulat Tengah (Sudah Disisipkan Fitur Reset Pencarian)
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Reset kata kunci dan kosongkan input search saat ganti kategori kuliner
            searchInput.value = ''; 
            currentSearchQuery = '';

            activeCategory = this.dataset.category;
            applyFilterAndSearch();
        });
    });

    // 2. Logika Mengetik / Eksekusi Pencarian
    function triggerSearch() {
        currentSearchQuery = searchInput.value.toLowerCase().trim();
        applyFilterAndSearch();
    }

    // Eksekusi pas tombol "Cari" diklik
    searchBtn.addEventListener('click', triggerSearch);

    // Eksekusi pas user tekan tombol "Enter" di keyboard
    searchInput.addEventListener('keyup', function(e) {
        if (e.key === 'Enter') {
            triggerSearch();
        }
    });

    // 3. Logika Klik "Pencarian Populer" (Kue Pukis, Rawon, dll)
    popularTags.forEach(tag => {
        tag.style.cursor = 'pointer'; 
        tag.addEventListener('click', function() {
            const selectedText = this.textContent;
            searchInput.value = selectedText; 
            triggerSearch(); 
        });
    });

    // =========================================================================
    // CODE BARU: DETEKSI PARAMETER PENCARIAN DARI HALAMAN LAIN (BERANDA)
    // =========================================================================
    const urlParams = new URLSearchParams(window.location.search);
    const searchParam = urlParams.get('q'); 

    if (searchParam) {
        searchInput.value = searchParam; 
        currentSearchQuery = searchParam.toLowerCase().trim();
        applyFilterAndSearch(); 
    }

    // ====== BAGIAN 2: FITUR LIKE (IKON HATI BERUBAH BENTUK & WARNA) ======
    const likeIcons = document.querySelectorAll('.card-icon .ri-heart-line, .card-icon .ri-heart-fill');

    likeIcons.forEach(function (icon) {
      icon.addEventListener('click', function () {
        const isLiked = this.classList.toggle('liked');

        if (isLiked) {
          this.classList.remove('ri-heart-line');
          this.classList.add('ri-heart-fill');
        } else {
          this.classList.remove('ri-heart-fill');
          this.classList.add('ri-heart-line');
        }
      });
    });

    // ====== BAGIAN 3: FITUR COMMENT (BUKA/TUTUP BOX KOMENTAR + TAMBAH KOMENTAR) ======
    const commentIcons = document.querySelectorAll('.card-icon .ri-chat-1-line');

    commentIcons.forEach(function (icon) {
      icon.addEventListener('click', function () {
        const card = this.closest('.card');
        if (!card) return;

        const box = card.querySelector('.comment-box');
        if (!box) return;

        if (!box.dataset.init) {
            const input = box.querySelector('.comment-input');
            const sendBtn = box.querySelector('.comment-send');
            const list = box.querySelector('.comment-list');

            function addComment() {
                const text = input.value.trim();
                if (!text) return;

                const item = document.createElement('div');
                item.className = 'comment-item';
                item.innerHTML = `
                  <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="Kamu">
                  <div class="comment-bubble">
                    <div class="comment-top">
                      <span class="comment-name">Kamu</span>
                      <span class="comment-date">Baru saja</span>
                    </div>
                    <div class="comment-text">${text}</div>
                  </div>
                `;

                list.appendChild(item);
                input.value = '';
                list.scrollTop = list.scrollHeight;
            }

            if (sendBtn) {
              sendBtn.addEventListener('click', addComment);
            }

            if (input) {
              input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                  e.preventDefault();
                  addComment();
                }
              });
            }

            box.dataset.init = 'true';
        }

        box.classList.toggle('show');
        this.classList.toggle('comment-active');
      });
    });

  });
</script>

</body>
</html>