<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil Pengguna - Rasana.id</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="profilesetting.css">
</head>
<body>

    <div class="sidebar">
    <div class="logo"><a href="dashboard admin.php"><img src="asset/logo2.png" alt="logo"></a></div>

    <div class="side-menu">
        <a href="search.php"><i class="ri-global-line"></i></a>
        <a href="home-page.php"><i class="ri-home-4-line"></i></a>
        <a href="posting.php"><i class="ri-add-line"></i></a>
        <a href="map.php"><i class="ri-map-pin-line"></i></a>
        <a href="notification.php"><i class="ri-notification-3-line"></i></a>
        <a href="profilesetting.php" class="active"><i class="ri-settings-3-line"></i></a>
    </div>

    <div class="profile">
        <a href="profilesetting.php">
            <img src="asset/Ellipse 11.png" alt="Alexa Rawles">
        </a>
    </div>
</div>

  <div class="main-content">
    <div class="header">
      <div class="header-left">
        <span class="header-greeting">Hi, Alexa</span>
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

    <div class="top-banner"></div>

    <div class="profile-details-card">
      <div class="profile-summary">
        <div class="profile-avatar">
          <img src="asset/Ellipse 11.png"Alexa Rawles">
        </div>
        <div class="profile-info">
          <div class="profile-name">Alexa Rawles</div>
          <div class="profile-email-summary">alexarawles@gmail.com</div>
        </div>
        <button class="edit-button">Edit</button>
      </div>

      <div class="form-details">
        <div class="form-group">
          <label for="namaLengkap" class="form-label">Nama lengkap</label>
          <input type="text" id="namaLengkap" class="form-input" value="Alexa Rawles">
        </div>
        <div class="form-group">
          <label for="nickname" class="form-label">Nick Name</label>
          <input type="text" id="nickname" class="form-input" value="Alexa">
        </div>
        <div class="form-group">
          <label for="gender" class="form-label">Gender</label>
          <select id="gender" class="form-select">
            <option value="wanita">Wanita</option>
            <option value="pria">Pria</option>
          </select>
        </div>
        <div class="form-group">
          <label for="kota" class="form-label">Kota</label>
          <select id="kota" class="form-select">
            <option value="surabaya">Kota Surabaya</option>
            <option value="jakarta">Kota Jakarta</option>
          </select>
        </div>
        <div class="form-group">
          <label for="provinsi" class="form-label">Provinsi</label>
          <select id="provinsi" class="form-select">
            <option value="jawa-timur">Jawa Timur</option>
            <option value="jawa-barat">Jawa Barat</option>
          </select>
        </div>
      </div>

      <div class="email-section">
        <div class="email-label">Email</div>
        <div class="email-item">
          <i class="far fa-envelope email-icon"></i>
          <div class="email-text-group">
            <div class="email-address">alexarawles@gmail.com</div>
            <div class="email-status">1 bulan yang lalu</div>
          </div>
        </div>
        <button class="add-email-button"><i class="fas fa-plus"></i> Add Email Address</button>
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

</body>
</html>