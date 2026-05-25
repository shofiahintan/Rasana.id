<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Unggahanmu - Rasana.id</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="unggahan.css">
</head>
<body>

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="logo">
      <a href="dashboard admin.php"><img src="asset/logo2.png" alt="logo"></a>
    </div>

    <div class="side-menu">
      <a href="search.php"><i class="ri-global-line"></i></a>
      <a href="home-page.php"><i class="ri-home-4-line"></i></a>
      <a href="posting.php" class="active"><i class="ri-add-line"></i></a>
      <a href="map.php"><i class="ri-map-pin-line"></i></a>
      <a href="notification.php"><i class="ri-notification-3-line"></i></a>
      <a href="profilesetting.php"><i class="ri-settings-3-line"></i></a>
    </div>

    <div class="profile">
      <a href="profilesetting.php">
        <img src="asset/Ellipse 11.png" alt="profil">
      </a>
    </div>
  </div>

  <div class="main-content">
    <div class="header">
      <div class="header-left">
        <span class="header-greeting">Unggahanmu</span>
        <span class="header-date">Selasa, 07 Juni 2025</span>
      </div>
      <div class="header-right">
        <!-- nambah class logout-button buat diambil JS -->
        <button class="header-button logout-button">
          <i class="fas fa-sign-out-alt"></i> Keluar
        </button>
        <a href="unggahan.php"><button class="header-button">
          <i class="fas fa-folder-open"></i> Unggahan
        </button></a>
        <a href="notification.php"><div class="header-notification"><i class="fas fa-bell"></i></div></a>
      </div>
    </div>

    <!-- BANNER -->
    <div class="top-banner"></div>

    <!-- CARD BARU (DARI SEARCH) -->
    <div class="cards">

      <div class="card">
        <div class="card-header">
          <img src="asset/Ellipse 11.png" alt="Alexa Rawles">
          <div>
            <h4>Alexa Rawles</h4>
            <p>Lamongan, Jawa Timur</p>
          </div>
          <span class="tag">Review</span>
        </div>

        <img class="card-img" src="asset/Soto Lamongan Sukoharjo.jpg" alt="Soto Lamongan">

        <div class="card-icon">
          <i class="ri-heart-line"></i>
          <i class="ri-chat-1-line"></i>
          <i class="ri-share-forward-line"></i>
        </div>

        <div class="card-body">
          <p class="likes">1,500 likes</p>

          <p>
            Soto Lamongan ini rasanya mantap, kuahnya gurih dan ringan dengan aroma rempah yang nampol.
            Ditambah topping ayam, telur, dan tomat segar bikin setiap suapan makin kaya rasa dan bikin
            ketagihan.
          </p>

          <p class="meta">Lihat semua 300 comments</p>

          <!-- KOMENTAR -->
          <div class="comment-box">
            <div class="comment-header-row">
              <span class="comment-title">Komentar</span>
            </div>

            <div class="comment-list"></div>

            <div class="comment-form">
              <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me" alt="profil">
              <input type="text" class="comment-input" placeholder="Tulis komentar...">
              <button type="button" class="comment-send">Kirim</button>
            </div>
          </div>

          <div class="time-row">
            <p class="time">8 jam yang lalu</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- popup konfirmasi logout -->
  <div class="modal-overlay" id="logoutModal">
    <div class="modal-box">
      <!-- tombol X buat nutup popup -->
      <button class="modal-close">&times;</button>
      <h3 class="modal-title">Keluar Akun</h3>
      <p class="modal-text">Apakah Anda yakin ingin keluar?</p>
      <div class="modal-actions">
        <!-- tombol ya dan tidak -->
        <button class="modal-btn modal-yes">Ya</button>
        <button class="modal-btn modal-no">Tidak</button>
      </div>
    </div>
  </div>

  <!-- script simple buat handle popup -->
  <script>
    // ambil elemen yang dipakai
    const logoutBtn = document.querySelector('.logout-button'); // tombol keluar
    const logoutModal = document.getElementById('logoutModal'); // popup
    const closeBtn = document.querySelector('.modal-close'); // tombol X
    const noBtn = document.querySelector('.modal-no'); // tombol tidak
    const yesBtn = document.querySelector('.modal-yes'); // tombol ya

    // fungsi buat buka popup
    logoutBtn.addEventListener('click', function () {
      logoutModal.classList.add('show');
    });

    // fungsi buat nutup popup
    function closeModal() {
      logoutModal.classList.remove('show');
    }

    // tombol X dan Tidak sama-sama nutup popup
    closeBtn.addEventListener('click', closeModal);
    noBtn.addEventListener('click', closeModal);

    // kalau klik area gelap di luar box juga nutup
    logoutModal.addEventListener('click', function (e) {
      if (e.target === logoutModal) {
        closeModal();
      }
    });

    // tombol Ya diarahkan ke halaman lain (logout beneran)
    yesBtn.addEventListener('click', function () {
      // ganti 'login.php' sesuai halaman tujuan logout
      window.location.href = 'login.php';
    });
  </script>
<script>
document.addEventListener('DOMContentLoaded', function () {

  // LIKE
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

  // COMMENT
  const commentIcons = document.querySelectorAll('.card-icon .ri-chat-1-line');
  commentIcons.forEach(function (icon) {
    icon.addEventListener('click', function () {
      const card = this.closest('.card');
      const box = card.querySelector('.comment-box');

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
            <img src="asset/Ellipse 11.png" class="comment-avatar-img comment-avatar-me">
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
        }

        sendBtn.addEventListener('click', addComment);
        input.addEventListener('keydown', function (e) {
          if (e.key === 'Enter') {
            e.preventDefault();
            addComment();
          }
        });

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