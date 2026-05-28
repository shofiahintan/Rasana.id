<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasana.id - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <aside class="sidebar">
        <div class="logo">
            <img src="https://via.placeholder.com/40" alt="Logo">
        </div>
        <nav class="side-menu">
            <a href="#" class="active"><i class="fa-solid fa-house"></i></a>
            <a href="#"><i class="fa-solid fa-compass"></i></a>
            <a href="#"><i class="fa-solid fa-heart"></i></a>
            <a href="#"><i class="fa-solid fa-plus-square"></i></a>
            <a href="#"><i class="fa-solid fa-gear"></i></a>
        </nav>
        <div class="profile" id="openLogout">
            <img src="https://via.placeholder.com/44" alt="Profile" style="cursor:pointer">
        </div>
    </aside>

    <main class="main-content">
        <header class="header">
            <div class="header-left">
                <h1 class="header-greeting">Halo, Shofiah!</h1>
                <p class="header-date">Kamis, 28 Mei 2026</p>
            </div>
            <div class="header-right">
                <button class="header-button"><i class="fa-solid fa-plus"></i> Unggah Baru</button>
                <div class="header-notification">
                    <i class="fa-solid fa-bell"></i>
                </div>
            </div>
        </header>

        <div class="top-banner"></div>

        <div class="cards">
            <article class="card">
                <div class="card-header">
                    <img src="https://via.placeholder.com/44" alt="User">
                    <div>
                        <h4>Rasana Culinary</h4>
                        <p>Malang, Jawa Timur</p>
                    </div>
                    <span class="tag story">Resep</span>
                </div>
                
                <img src="https://via.placeholder.com/380x210" alt="Post" class="card-img">
                
                <div class="card-icon">
                    <i class="fa-regular fa-heart btn-like"></i>
                    <i class="fa-regular fa-comment btn-comment"></i>
                    <i class="fa-regular fa-paper-plane"></i>
                </div>

                <div class="card-body">
                    <p class="likes">1.240 Suka</p>
                    <p><strong>shofiah.intan</strong> Akhirnya selesai juga mockup desain buat Rasana.id! Gimana menurut kalian? ✨</p>
                    
                    <div class="comment-box">
                        <div class="comment-list">
                            <div class="comment-item">
                                <div class="comment-bubble">
                                    <span class="comment-name">Davin Sava</span>
                                    <p class="comment-text">Keren banget desainnya, rapi!</p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <input type="text" class="comment-input" placeholder="Tulis komentar...">
                            <button class="comment-send">Kirim</button>
                        </div>
                    </div>

                    <div class="time-row">
                        <span class="time">20 menit yang lalu</span>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <div class="modal-overlay" id="modalLogout">
        <div class="modal-box">
            <button class="modal-close" id="closeModalX">&times;</button>
            <h3 class="modal-title">Keluar Aplikasi?</h3>
            <p class="modal-text">Semua sesi kamu akan diakhiri. Yakin mau keluar?</p>
            <div class="modal-actions">
                <button class="modal-btn modal-no" id="btnBatal">Batal</button>
                <button class="modal-btn modal-yes">Keluar</button>
            </div>
        </div>
    </div>

    <script>
        // 1. Fungsi Like
        document.querySelectorAll('.btn-like').forEach(item => {
            item.addEventListener('click', function() {
                this.classList.toggle('fa-solid');
                this.classList.toggle('fa-regular');
                this.classList.toggle('liked');
            });
        });

        // 2. Fungsi Komentar
        document.querySelectorAll('.btn-comment').forEach(item => {
            item.addEventListener('click', function() {
                const card = this.closest('.card');
                const box = card.querySelector('.comment-box');
                box.classList.toggle('show');
                this.classList.toggle('comment-active');
            });
        });

        // 3. Fungsi Modal Logout
        const modal = document.getElementById('modalLogout');
        const btnOpen = document.getElementById('openLogout');
        const btnX = document.getElementById('closeModalX');
        const btnBatal = document.getElementById('btnBatal');

        btnOpen.onclick = () => modal.classList.add('show');
        btnX.onclick = () => modal.classList.remove('show');
        btnBatal.onclick = () => modal.classList.remove('show');
        
        // Klik di luar kotak putih untuk tutup
        window.onclick = (e) => {
            if (e.target == modal) modal.classList.remove('show');
        }
    </script>
</body>
</html>