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
      <img src="asset/Ellipse 11.png" alt="alexarawles">
      <div>
        <p class="admin-name">Alexa Rawles</p>
        <p class="admin-role">Super Admin</p>
      </div>
    </div>
    <button class="admin-logout">
      <i class="ri-logout-box-r-line"></i> Keluar
    </button>
  </div>

  <div class="admin-bottom">
    <p>© 2026 Rasana.id</p>
  </div>
</aside>

<main class="admin-main">
  <header class="admin-topbar">
    <div>
      <h1>Dashboard Admin</h1>
      <p class="topbar-sub">Pantau pengguna, postingan, dan interaksi di Rasana.id</p>
    </div>
    <div class="topbar-right">
      <div class="admin-badge-online"></div>
      <span>Online</span>
    </div>
  </header>

  <section class="admin-section">
    <h2 class="section-title">Ringkasan Sistem</h2>
    <div class="stats-grid">
      <div class="stat-card-premium">
        <div class="stat-icon-wrapper"><i class="ri-user-3-line"></i></div>
        <div class="stat-info">
          <span class="stat-label">Total User</span>
          <p class="stat-value">12,540</p>
        </div>
      </div>

      <div class="stat-card-premium">
        <div class="stat-icon-wrapper"><i class="ri-file-list-3-line"></i></div>
        <div class="stat-info">
          <span class="stat-label">Total Postingan</span>
          <p class="stat-value">3,210</p>
        </div>
      </div>

      <div class="stat-card-premium">
        <div class="stat-icon-wrapper"><i class="ri-heart-2-line"></i></div>
        <div class="stat-info">
          <span class="stat-label">Total Interaksi</span>
          <p class="stat-value">8,452</p>
        </div>
      </div>

      <div class="stat-card-premium highlight-card">
        <div class="stat-icon-wrapper"><i class="ri-fire-line"></i></div>
        <div class="stat-info">
          <span class="stat-label">Kuliner Terpopuler</span>
          <p class="stat-value-text">Resep Pukis</p>
        </div>
      </div>
    </div>
  </section>

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

  <section class="admin-section" id="pengguna">
    <div class="section-head">
      <h2 class="section-title">Manajemen Pengguna</h2>
      <div class="section-actions">
        <input type="text" class="input-search" placeholder="Cari nama, email, atau user ID...">
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
            <th>User ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Status</th>
            <th>Tanggal Daftar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>USR00124</td>
            <td>Pungky Satriani</td>
            <td>@pungkys</td>
            <td>pungky@example.com</td>
            <td><span class="badge badge-success">Aktif</span></td>
            <td>12 Mar 2025</td>
            <td class="table-actions">
              <button class="btn-small"><i class="ri-eye-line"></i></button>
              <button class="btn-small btn-outline-danger"><i class="ri-forbid-2-line"></i></button>
            </td>
          </tr>
          <tr>
            <td>USR00358</td>
            <td>Dewi Hartati</td>
            <td>@dewih</td>
            <td>dewi@example.com</td>
            <td><span class="badge badge-success">Aktif</span></td>
            <td>05 Feb 2025</td>
            <td class="table-actions">
              <button class="btn-small"><i class="ri-eye-line"></i></button>
              <button class="btn-small btn-outline-danger"><i class="ri-forbid-2-line"></i></button>
            </td>
          </tr>
          <tr>
            <td>USR00177</td>
            <td>Rian Saputra</td>
            <td>@rian.food</td>
            <td>rian@example.com</td>
            <td><span class="badge badge-danger">Diblokir</span></td>
            <td>21 Jan 2025</td>
            <td class="table-actions">
              <button class="btn-small btn-outline-success"><i class="ri-checkbox-circle-line"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

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
      </div>
    </div>

    <div class="table-wrapper">
      <table class="admin-table">
        <thead>
          <tr>
            <th>Post ID</th>
            <th>Judul / Isi Singkat</th>
            <th>Kategori</th>
            <th>User ID</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>POST-1022</td>
            <td>Kue pukis manis legit dengan topping cokelat...</td>
            <td><span class="badge badge-soft">Resep</span></td>
            <td>USR00124</td>
            <td><span class="badge badge-success">Publish</span></td>
            <td>10 Mar 2025</td>
            <td class="table-actions">
              <button class="btn-small"><i class="ri-eye-line"></i></button>
              <button class="btn-small btn-outline-danger"><i class="ri-forbid-2-line"></i></button>
            </td>
          </tr>
          <tr>
            <td>POST-1108</td>
            <td>Cerita di balik tekwan hangat khas Palembang...</td>
            <td><span class="badge badge-soft">Cerita</span></td>
            <td>USR00211</td>
            <td><span class="badge badge-warning">Pending</span></td>
            <td>09 Mar 2025</td>
            <td class="table-actions">
              <button class="btn-small btn-outline-success"><i class="ri-checkbox-circle-line"></i></button>
              <button class="btn-small btn-outline-danger"><i class="ri-forbid-2-line"></i></button>
            </td>
          </tr>
          <tr>
            <td>POST-1112</td>
            <td>Review batagor legendaris di Bandung...</td>
            <td><span class="badge badge-soft">Review</span></td>
            <td>USR00358</td>
            <td><span class="badge badge-danger">Diblokir</span></td>
            <td>07 Mar 2025</td>
            <td class="table-actions">
              <button class="btn-small btn-outline-success"><i class="ri-refresh-line"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="admin-section" id="interaksi">
    <div class="section-head">
      <h2 class="section-title">Log Interaksi User</h2>
      <div class="section-actions">
        <select class="input-select">
          <option value="">Semua Interaksi</option>
          <option value="like">Like</option>
          <option value="comment">Comment</option>
          <option value="share">Share</option>
          <option value="follow">Follow</option>
        </select>
      </div>
    </div>

    <div class="table-wrapper">
      <table class="admin-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Jenis</th>
            <th>User ID</th>
            <th>Target</th>
            <th>Post ID</th>
            <th>Isi Comment</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>INT-8001</td>
            <td><span class="badge badge-soft">Like</span></td>
            <td>USR00124</td>
            <td>USR00358</td>
            <td>POST-1112</td>
            <td>-</td>
            <td>10 Mar 08:21</td>
          </tr>
          <tr>
            <td>INT-8002</td>
            <td><span class="badge badge-soft">Comment</span></td>
            <td>USR00211</td>
            <td>USR00124</td>
            <td>POST-1022</td>
            <td>"Resepnya gampang diikutin, makasih kak!"</td>
            <td>10 Mar 08:35</td>
          </tr>
          <tr>
            <td>INT-8003</td>
            <td><span class="badge badge-soft">Follow</span></td>
            <td>USR00358</td>
            <td>USR00124</td>
            <td>-</td>
            <td>-</td>
            <td>10 Mar 09:02</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</main>

<script>
  Chart.defaults.font.family = "'Poppins', -apple-system, sans-serif";
  Chart.defaults.color = '#777777';

  // 1. Grafik Batang (Nuansa Bumi Khas Rasana)
  const ctxCategory = document.getElementById('categoryChart').getContext('2d');
  new Chart(ctxCategory, {
    type: 'bar',
    data: {
      labels: ['Resep Makanan', 'Review Tempat', 'Cerita Kuliner', 'Tips & Trik'],
      datasets: [{
        label: 'Jumlah Postingan',
        data: [1420, 980, 530, 280],
        backgroundColor: [
          '#754C24', // Cokelat Tua
          '#AC8254', // Warm Beige
          '#F9DA62', // Gold Rasana
          '#FCE8A3'  // Cream
        ],
        borderRadius: 8,
        borderWidth: 0,
        barThickness: 32
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: { duration: 1200, easing: 'easeOutQuart' },
      plugins: { legend: { display: false } },
      scales: {
        y: {
          beginAtZero: true,
          grid: { color: '#F3EFE6', drawTicks: false },
          border: { dash: [5, 5] }
        },
        x: { grid: { display: false } }
      }
    }
  });

  // 2. Grafik Donut (Premium Minimalis)
  const ctxEngagement = document.getElementById('engagementChart').getContext('2d');
  new Chart(ctxEngagement, {
    type: 'doughnut',
    data: {
      labels: ['Like', 'Comment', 'Share', 'Follow'],
      datasets: [{
        data: [4852, 2100, 1000, 500],
        backgroundColor: ['#754C24', '#AC8254', '#F9DA62', '#E0E0E0'],
        borderWidth: 4,
        borderColor: '#ffffff'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: { duration: 1500, easing: 'easeOutBack' },
      plugins: {
        legend: {
          position: 'right',
          labels: { boxWidth: 12, padding: 20, font: { size: 13 } }
        }
      },
      cutout: '80%'
    }
  });

  // Logika Manual Menu Aktif Sidebar saat di-klik
  const menuItems = document.querySelectorAll('.admin-menu .menu-item');
  menuItems.forEach(item => {
    item.addEventListener('click', function() {
      menuItems.forEach(i => i.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>

</body>
</html>