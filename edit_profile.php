<section class="admin-section">
    <div class="section-title">Edit Profil</div>
    <form action="admin/update_profile.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="name" value="<?php echo $_SESSION['username']; ?>" class="input-search">
        </div>
        <!-- Tambahkan input lain untuk foto/email sesuai kebutuhan -->
        <button type="submit" class="btn-small btn-outline-success">Simpan Perubahan</button>
    </form>
</section>