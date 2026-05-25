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

    <!-- Ini form pencarian -->
    <form class="search-box" action="search-rendang.php" method="get">

        <!-- Input tempat kita ngetik apa yang mau dicari -->
        <input type="text" name="q" placeholder="Cari ‘rendang padang’ atau ‘warteg terdekat’">

        <!-- Tombol buat ngejalanin pencarian -->
        <button type="submit">
        <i class="ri-search-line"></i> Cari
        </button>
    </form>


        <div class="filter">
            <button class="active"><i class="ri-grid-fill"></i> Semua</button>
            <button><i class="ri-restaurant-line"></i> Resep</button>
            <button><i class="ri-star-smile-line"></i> Review</button>
            <button><i class="ri-chat-1-line"></i> Cerita</button>
        </div>

        <p class="popular">Pencarian populer</p>

        <div class="tags">
            <span>Rendang Padang</span>
            <span>Nasi Gudeg</span>
            <span>Sate Ayam</span>
            <span>Bakso Malang</span>
        </div>
    </div>

    <div class="cards">

        <!-- CARD 1 - RESEP (diberi tombol) -->
        <div class="card">
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
                <p>Siapa yang kangen jajanan klasik ini? Kue pukis, manis legit dengan tekstur lembut...</p>
                <p class="meta">Lihat semua 620 comments</p>

                <!-- KOMENTAR CARD 1 -->
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
                        <div class="comment-item">
                            <img src="asset/pro2.png" class="comment-avatar-img" alt="Rizky H.">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Rizky H.</span>
                                    <span class="comment-date">1 minggu yang lalu</span>
                                </div>
                                <div class="comment-text">Teksturnya keliatan lembut banget, resepnya dong kak 🙏</div>
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

        <!-- CARD 2 - CERITA KULINER (diberi tombol) -->
        <div class="card">
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
                <p>Bukan cuma pempek, Palembang punya tekwan yang hangat & bersejarah...</p>
                <p class="meta">Lihat semua 520 comments</p>

                <!-- KOMENTAR CARD 2 -->
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
                        <div class="comment-item">
                            <img src="asset/pro4.png" class="comment-avatar-img" alt="Fajar Ananda">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Fajar Ananda</span>
                                    <span class="comment-date">1 minggu yang lalu</span>
                                </div>
                                <div class="comment-text">Setuju! Kuah tekwan hangat-hangat gitu paling enak dimakan pas hujan 🌧️</div>
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

        <!-- CARD 3 - REVIEW -->
        <div class="card">
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
                <p>Batagor legendaris Bandung dengan bumbu kacang gurih dan sambal pedas manis. Renyah di luar, lembut di dalam!</p>
                <p class="meta">Lihat semua 220 comments</p>

                <!-- KOMENTAR CARD 3 -->
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
                        <div class="comment-item">
                            <img src="asset/pro2.png" class="comment-avatar-img" alt="Mega Lestari">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Mega Lestari</span>
                                    <span class="comment-date">6 hari yang lalu</span>
                                </div>
                                <div class="comment-text">Review-nya lengkap banget, next ke Bandung wajib mampir sini.</div>
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
                    <!-- no button -->
                </div>
            </div>
        </div>

        <!-- CARD 4 - CERITA KULINER (diberi tombol) -->
        <div class="card">
            <div class="card-header">
                <img src="asset/profile 4.png" alt="">
                <div>
                    <h4>Rian Saputra</h4>
                    <p>Yogyakarta</p>
                </div>
                <span class="tag story">Cerita Kuliner</span>
            </div>

            <img class="card-img" src="asset/Nasi Gudeg.jpg" alt="">

            <div class="card-icon">
                <i class="ri-heart-line"></i>
                <i class="ri-chat-1-line"></i>
                <i class="ri-share-forward-line"></i>
            </div>

            <div class="card-body">
                <p class="likes">5,100 likes</p>
                <p>Jogja bukan hanya gudeg. Ada banyak cerita di balik jajanan legendaris...</p>
                <p class="meta">Lihat semua 340 comments</p>

                <!-- KOMENTAR CARD 4 -->
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
                        <div class="comment-item">
                            <img src="asset/pro4.png" class="comment-avatar-img" alt="Yoga P.">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Yoga P.</span>
                                    <span class="comment-date">2 minggu yang lalu</span>
                                </div>
                                <div class="comment-text">Baca ini jadi inget pertama kali touring ke Jogja cuma buat kulineran.</div>
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

        <!-- CARD 5 - RESEP (diberi tombol) -->
        <div class="card">
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
                <p>Resep rawon khas Jawa Timur, kuah hitam gurih dengan daging empuk </p>
                <p class="meta">Lihat semua 110 comments</p>

                <!-- KOMENTAR CARD 5 -->
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
                        <div class="comment-item">
                            <img src="asset/pro2.png" class="comment-avatar-img" alt="Bagus Prasetyo">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Bagus Prasetyo</span>
                                    <span class="comment-date">2 hari yang lalu</span>
                                </div>
                                <div class="comment-text">Sudah coba resepnya, rasanya mirip banget rawon langganan di Surabaya!</div>
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

        <!-- CARD 6 - REVIEW (tanpa tombol) -->
        <div class="card">
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
                <p>Bika ambon legit dari toko lama di Medan ini masih juara sampai sekarang 🔥🔥</p>
                <p class="meta">Lihat semua 260 comments</p>

                <!-- KOMENTAR CARD 6 -->
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
                        <div class="comment-item">
                            <img src="asset/pro4.png" class="comment-avatar-img" alt="Jonathan">
                            <div class="comment-bubble">
                                <div class="comment-top">
                                    <span class="comment-name">Jonathan</span>
                                    <span class="comment-date">4 hari yang lalu</span>
                                </div>
                                <div class="comment-text">Teksturnya keliatan bersarang banget, persis yang asli Medan!</div>
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
                    <!-- no button -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {

    // ====== BAGIAN 2: FITUR LIKE (IKON HATI BERUBAH BENTUK & WARNA) ======

    // ngambil semua icon hati di setiap card (baik yang line maupun fill)
    const likeIcons = document.querySelectorAll('.card-icon .ri-heart-line, .card-icon .ri-heart-fill');

    // looping semua icon hati
    likeIcons.forEach(function (icon) {
      // pas icon hati diklik
      icon.addEventListener('click', function () {
        // toggle class "liked" (kalau belum ada → ditambah, kalau ada → dihapus)
        const isLiked = this.classList.toggle('liked');

        // kalau lagi posisi "liked" → ganti icon jadi hati isi (fill)
        if (isLiked) {
          this.classList.remove('ri-heart-line');
          this.classList.add('ri-heart-fill');
        } else {
          // kalau batal like → ganti lagi ke hati outline
          this.classList.remove('ri-heart-fill');
          this.classList.add('ri-heart-line');
        }
      });
    });

    // ====== BAGIAN 3: FITUR COMMENT (BUKA/TUTUP BOX KOMENTAR + TAMBAH KOMENTAR) ======

    // ngambil semua icon chat (komentar) di setiap card
    const commentIcons = document.querySelectorAll('.card-icon .ri-chat-1-line');

    // looping tiap icon komentar
    commentIcons.forEach(function (icon) {
      // pas icon komentar diklik
      icon.addEventListener('click', function () {
        // cari elemen .card terdekat dari icon yang diklik (biar komentarnya sesuai card-nya)
        const card = this.closest('.card');
        if (!card) return; // kalau nggak ketemu card, stop

        // dari card yang ketemu, ambil box komentar di dalamnya
        const box = card.querySelector('.comment-box');
        if (!box) return; // kalau nggak ada comment-box, stop

        // inisialisasi event input & tombol cuma sekali (biar nggak dobel-dobel)
        if (!box.dataset.init) {
            // ambil input tempat kita ngetik komentar
            const input = box.querySelector('.comment-input');
            // ambil tombol kirim
            const sendBtn = box.querySelector('.comment-send');
            // ambil container/list tempat semua komentar ditaruh
            const list = box.querySelector('.comment-list');

            // function buat nambah komentar baru ke list
            function addComment() {
                // ambil teks dari input dan trim spasi di pinggir
                const text = input.value.trim();
                // kalau kosong, jangan ngapa-ngapain
                if (!text) return;

                // bikin elemen div baru buat satu komentar
                const item = document.createElement('div');
                item.className = 'comment-item';

                // isi HTML komentar baru (pakai foto profil kamu + nama "Kamu" + waktu "Baru saja")
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

                // masukin komentar baru ke bagian paling bawah list
                list.appendChild(item);
                // kosongin input lagi setelah ngirim
                input.value = '';
                // scroll list komentar ke paling bawah biar komentar terbaru kelihatan
                list.scrollTop = list.scrollHeight;
            }

            // kalau tombol kirim ada → pasang event klik buat jalankan addComment()
            if (sendBtn) {
              sendBtn.addEventListener('click', addComment);
            }

            // kalau user tekan Enter di input → juga panggil addComment()
            if (input) {
              input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                  e.preventDefault(); // biar nggak bikin baris baru
                  addComment();
                }
              });
            }

            // tandain kalau box ini sudah pernah di-init (dipasang event) pakai atribut data
            box.dataset.init = 'true';
        }

        // toggle class "show" → buat nampilin atau nyembunyiin box komentar
        box.classList.toggle('show');
        // kasih efek aktif di icon komentar (warna beda) saat box komentar kebuka
        this.classList.toggle('comment-active');
      });
    });

  });
</script>

</body>
</html>