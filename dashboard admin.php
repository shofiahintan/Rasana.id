<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Rasana.id - Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="dashboard admin.css">
</head>
<body>

<!-- SIDEBAR ADMIN -->
<aside class="admin-sidebar">
  <div class="admin-logo">
    <a href="home-page.html"><img src="asset/logo2.png" alt="Rasana Logo"></a>
    <span>Rasana</span>
  </div>

  <nav class="admin-menu">
    <a href="#" class="active"><i class="ri-dashboard-line"></i>Ringkasan</a>
    <a href="#pengguna"><i class="ri-user-3-line"></i>Pengguna</a>
    <a href="#postingan"><i class="ri-file-list-3-line"></i>Postingan</a>
    <a href="#interaksi"><i class="ri-chat-1-line"></i>Interaksi</a>
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
    <p>© 2025 Rasana.id</p>
  </div>
</aside>

<!-- KONTEN UTAMA -->
<main class="admin-main">
  <!-- BAR ATAS -->
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

  <!-- RINGKASAN STATISTIK -->
  <section class="admin-section">
    <h2>Ringkasan Sistem</h2>
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-header">
          <span>Pengguna Terdaftar</span>
          <i class="ri-user-3-line"></i>
        </div>
        <p class="stat-number">12,540</p>
        <p class="stat-desc">Termasuk pengguna aktif & diblokir</p>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <span>Total Postingan</span>
          <i class="ri-file-list-3-line"></i>
        </div>
        <p class="stat-number">3,210</p>
        <p class="stat-desc">Review, cerita kuliner, dan resep</p>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <span>Interaksi Hari Ini</span>
          <i class="ri-heart-2-line"></i>
        </div>
        <p class="stat-number">8,452</p>
        <p class="stat-desc">Like, comment, share, follow</p>
      </div>

      <div class="stat-card stat-card-alert">
        <div class="stat-header">
          <span>Perlu Moderasi</span>
          <i class="ri-alert-line"></i>
        </div>
        <p class="stat-number">18</p>
        <p class="stat-desc">Dilaporkan atau melanggar aturan</p>
      </div>
    </div>
  </section>

  <!-- TABEL PENGGUNA -->
  <section class="admin-section" id="pengguna">
    <div class="section-head">
      <h2>Manajemen Pengguna</h2>
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

  <!-- TABEL POSTINGAN -->
  <section class="admin-section" id="postingan">
    <div class="section-head">
      <h2>Moderasi Postingan</h2>
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

  <!-- TABEL INTERAKSI -->
  <section class="admin-section" id="interaksi">
    <div class="section-head">
      <h2>Log Interaksi User</h2>
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

</body>
</html>