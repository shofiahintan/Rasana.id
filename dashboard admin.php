<?php
session_start();

// Cek apakah user sudah login DAN apakah role-nya adalah admin
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    // Jika tidak memenuhi syarat, usir ke halaman login biasa
    header("Location: auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Rasana.id - Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="dashboard admin.css">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<aside class="admin-sidebar">
  
  <div class="admin-logo">
    <a href="home-page.php"><img src="asset/logo2.png" alt="Rasana Logo"></a>
    <span>Rasana</span>
  </div>

  <nav class="admin-menu">
    <a href="#" class="menu-item active"><i class="ri-dashboard-line"></i><span>Dashboard</span></a>
    <a href="#tren-statistik" class="menu-item"><i class="ri-bar-chart-box-line"></i><span>Tren & Statistik</span></a>
    <a href="#postingan" class="menu-item"><i class="ri-file-list-3-line"></i><span>Postingan</span></a>
    <a href="#pengguna" class="menu-item"><i class="ri-user-3-line"></i><span>Pengguna</span></a>
    <a href="#interaksi" class="menu-item"><i class="ri-chat-1-line"></i><span>Interaksi</span></a>
  </nav>

 <div class="admin-profile-box">
    <div class="admin-profile-info">
      <img src="asset/profiles/<?php echo $_SESSION['foto_profil'] ?? 'default.png'; ?>" alt="Profile">
      <div>
        <p class="admin-name"><?php echo $_SESSION['username']; ?></p>
        <p class="admin-role"><?php echo ucfirst($_SESSION['role']); ?></p>
      </div>
    </div>
    
    <button onclick="document.getElementById('modalEdit').style.display='block'" 
            style="background: #745338; color: white; border: none; padding: 10px; width: 100%; border-radius: 8px; cursor: pointer; margin-top: 10px; margin-bottom: 10px;">
      Edit Profil
    </button>
    
    <a href="auth/logout.php" class="admin-logout" style="text-decoration: none; display: flex; align-items: center; justify-content: center; color: #745338;">
      <i class="ri-logout-box-r-line"></i> Keluar
    </a>
</div>

  <div class="admin-bottom">
    <p>© 2026 Rasana.id</p>
  </div>

</aside>

<main class="admin-main">

  <header class="admin-topbar">
    <div>
      <h1>Dashboard Admin</h1>
      <p class="topbar-sub">
        Pantau pengguna, postingan, dan interaksi di Rasana.id
      </p>
    </div>

    <div class="topbar-right">
      <div class="admin-badge-online"></div>
      <span>Online</span>
    </div>
  </header>

 <section class="admin-section">
    <h2 class="section-title">Ringkasan Sistem</h2>
    
    <?php include 'admin/get_stats.php'; ?>
</section>

  <!-- CHART -->
  <section class="admin-section" id="tren-statistik">

    <h2 class="section-title">Tren & Statistik Kuliner</h2>

    <div class="charts-grid">

      <div class="chart-card">
        <h3>Kategori Kuliner Populer (Total Postingan)</h3>

        <div class="chart-container">
          <canvas id="categoryChart"></canvas>
        </div>
      </div>

      <div class="chart-card">
        <h3>Distribusi Interaksi Pengguna</h3>

        <div class="chart-container">
          <canvas id="engagementChart"></canvas>
        </div>
      </div>

    </div>

  </section>

  <!-- PENGGUNA -->
 <section class="admin-section" id="pengguna">
    <div class="section-head">
        <h2 class="section-title">Manajemen Pengguna</h2>
        <div class="section-actions">

        <input
          type="text"
          class="input-search"
          placeholder="Cari nama, email, atau user ID..."
        >

        <select class="input-select">
          <option value="">Semua Status</option>
          <option value="aktif">Aktif</option>
          <option value="diblokir">Diblokir</option>
        </select>

      </div>

    </div>

    <div class="table-wrapper">

      <table class="admin-table">

        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php include 'admin/get_users.php'; ?>
        </tbody>

      </table>

    </div>

  </section>

  <!-- POSTINGAN -->
  <section class="admin-section" id="postingan">

    <div class="section-head">

      <h2 class="section-title">Moderasi Postingan</h2>

      <div class="section-actions">

        <select class="input-select">
          <option value="">Semua Kategori</option>
          <option value="review">Review</option>
          <option value="cerita">Cerita Kuliner</option>
          <option value="resep">Resep</option>
        </select>

        <select class="input-select">
          <option value="">Semua Status</option>
          <option value="publish">Publish</option>
          <option value="pending">Pending</option>
          <option value="blokir">Diblokir</option>
        </select>

        <a href="admin/tambah_kuliner.php"
          style="display: inline-flex; align-items: center; background-color: #745338; color: white; text-decoration: none; padding: 0 18px; height: 44px; border-radius: 16px; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; box-shadow: 0 2px 6px rgba(116,83,56,0.15); box-sizing: border-box;">
          + Tambah Kuliner
        </a>

      </div>

    </div>

    <div class="table-wrapper">

      <table class="admin-table">

        <thead>
          <tr>
            <th>ID</th>
            <th>KONTEN</th>
            <th>KATEGORI</th>
            <th>USER ID</th>
            <th>STATUS</th>
            <th>TANGGAL</th>
            <th>AKSI</th>
          </tr>
        </thead>

        <tbody>
          <?php include 'admin/get_posts.php'; ?>
        </tbody>

      </table>

    </div>

  </section>

  <!-- INTERAKSI -->
<section class="admin-section" id="interaksi">
    <div class="section-head">
        <h2 class="section-title">Log Interaksi User</h2>
    </div>

    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>JENIS</th>
                    <th>USER ID</th>
                    <th>TARGET</th>
                    <th>ISI KOMENTAR</th>
                    <th>WAKTU</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'admin/get_interactions.php'; ?>
            </tbody>
        </table>
    </div>
</section>

</main>
<div id="modalEdit" class="modal-overlay">
    <div class="modal-content">
        <h3 style="color: #4a3728; margin-bottom: 20px;">Edit Profil</h3>
        
        <form action="admin/update_profile.php" method="POST" enctype="multipart/form-data">
            <label for="file-upload" style="display: block; cursor: pointer; padding: 20px; border: 2px dashed #dcdcdc; border-radius: 16px; margin-bottom: 20px; color: #745338;">
                <i class="ri-image-add-line" style="font-size: 24px;"></i>
                <div style="font-size: 12px; font-weight: bold; margin-top: 5px;">Pilih Foto Baru</div>
            </label>
            <input id="file-upload" type="file" name="foto" style="display: none;">

            <input type="text" name="name" value="<?php echo $_SESSION['username']; ?>" 
                   style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #eee; border-radius: 10px; box-sizing: border-box; background: #fdfdfd;">

            <button type="submit" style="width: 100%; padding: 12px; border: none; border-radius: 10px; background: linear-gradient(135deg, #745338 0%, #a67c52 100%); color: white; font-weight: bold; cursor: pointer; transition: 0.3s;">
                Simpan Perubahan
            </button>
            <button type="button" onclick="document.getElementById('modalEdit').style.display='none'" 
                    style="width: 100%; padding: 10px; margin-top: 10px; border: none; background: transparent; color: #888; cursor: pointer;">
                Batal
            </button>
        </form>
    </div>
</div>>
<script>

Chart.defaults.font.family = "'Poppins', -apple-system, sans-serif";
Chart.defaults.color = '#777777';


// BAR CHART
const ctxCategory = document.getElementById('categoryChart').getContext('2d');

new Chart(ctxCategory, {
  type: 'bar',

  data: {
    labels: [
      'Resep Makanan',
      'Review Tempat',
      'Cerita Kuliner',
      'Tips & Trik'
    ],

    datasets: [{
      label: 'Jumlah Postingan',

      data: [1420, 980, 530, 280],

      backgroundColor: [
        '#754C24',
        '#AC8254',
        '#F9DA62',
        '#FCE8A3'
      ],

      borderRadius: 8,
      borderWidth: 0,
      barThickness: 32
    }]
  },

  options: {
    responsive: true,
    maintainAspectRatio: false,

    animation: {
      duration: 1200,
      easing: 'easeOutQuart'
    },

    plugins: {
      legend: {
        display: false
      }
    },

    scales: {
      y: {
        beginAtZero: true,

        grid: {
          color: '#F3EFE6',
          drawTicks: false
        },

        border: {
          dash: [5, 5]
        }
      },

      x: {
        grid: {
          display: false
        }
      }
    }
  }
});


// DOUGHNUT CHART
const ctxEngagement = document.getElementById('engagementChart').getContext('2d');

new Chart(ctxEngagement, {
  type: 'doughnut',

  data: {
    labels: ['Like', 'Comment', 'Share', 'Follow'],

    datasets: [{
      data: [4852, 2100, 1000, 500],

      backgroundColor: [
        '#754C24',
        '#AC8254',
        '#F9DA62',
        '#E0E0E0'
      ],

      borderWidth: 4,
      borderColor: '#ffffff'
    }]
  },

  options: {
    responsive: true,
    maintainAspectRatio: false,

    animation: {
      duration: 1500,
      easing: 'easeOutBack'
    },

    plugins: {
      legend: {
        position: 'right',

        labels: {
          boxWidth: 12,
          padding: 20,
          font: {
            size: 13
          }
        }
      }
    },

    cutout: '80%'
  }
});


// ACTIVE MENU
const menuItems = document.querySelectorAll('.admin-menu .menu-item');

menuItems.forEach(item => {

  item.addEventListener('click', function () {

    menuItems.forEach(i => {
      i.classList.remove('active');
    });

    this.classList.add('active');

  });

});

</script>
<script>
document.getElementById('file-upload').addEventListener('change', function(e) {
    var fileName = e.target.files[0].name;
    var label = document.querySelector('label[for="file-upload"]');
    label.innerHTML = '<i class="ri-check-line"></i> ' + fileName;
    label.style.borderStyle = 'solid'; // Berubah jadi garis tegas kalau sudah terpilih
});
</script>
</body>
</html>