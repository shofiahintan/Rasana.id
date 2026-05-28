<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah</title>

    <link rel="stylesheet" href="posting.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        
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
                    <img src="asset/Ellipse 11.png" alt="profile">
                </a>
            </div>
        </div>
        
        <main class="main-content">
            
            <div class="upload-card">
                
                <h1 class="page-title">Unggah</h1> 

                <div class="image-upload-area" id="imageUploadArea">
                    <input type="file" id="imageUploadInput" accept="image/*" hidden>
                    <i class="ri-image-line image-placeholder-icon"></i>
                    <i class="ri-upload-line upload-icon"></i>
                </div>

                <div class="form-section category-section">
                    <label class="form-label">Category</label>

                    <div class="custom-select-wrapper">
                        <div id="custom-category-select" class="custom-select-trigger">
                            <span id="selected-category">Kategori</span>
                            <i class="ri-arrow-down-s-line select-arrow"></i>
                        </div>

                        <div class="custom-options" id="categoryOptions">
                            <div class="custom-option" data-value="resep">Resep</div>
                            <div class="custom-option" data-value="cerita-kuliner">Cerita Kuliner</div>
                            <div class="custom-option" data-value="review">Review</div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <label class="form-label">Description</label>
                    <textarea id="description" class="description-textarea" placeholder="Tambahkan Deskripsi..."></textarea>
                </div>

                <div class="form-section location-section">
    <label class="form-label">Location</label>

    <div class="custom-select-wrapper">
        <div id="custom-location-select" class="custom-select-trigger">
            <span id="selected-location">Pilih Daerah</span>
            <i class="ri-arrow-down-s-line select-arrow"></i>
        </div>

        <!-- DAFTAR DAERAH SE-INDONESIA SESUAI PETA -->
     <!-- DAFTAR 34 PROVINSI LENGKAP SE-INDONESIA -->
<div class="custom-options" id="locationOptions" style="max-height: 250px; overflow-y: auto;">
    <!-- Sumatra -->
    <div class="custom-option" data-value="aceh">Aceh</div>
    <div class="custom-option" data-value="sumut">Sumatera Utara</div>
    <div class="custom-option" data-value="sumbar">Sumatera Barat</div>
    <div class="custom-option" data-value="riau">Riau</div>
    <div class="custom-option" data-value="kepri">Kepulauan Riau</div>
    <div class="custom-option" data-value="jambi">Jambi</div>
    <div class="custom-option" data-value="sumsel">Sumatera Selatan</div>
    <div class="custom-option" data-value="babel">Kepulauan Bangka Belitung</div>
    <div class="custom-option" data-value="bengkulu">Bengkulu</div>
    <div class="custom-option" data-value="lampung">Lampung</div>
    
    <!-- Jawa -->
    <div class="custom-option" data-value="jakarta">DKI Jakarta</div>
    <div class="custom-option" data-value="banten">Banten</div>
    <div class="custom-option" data-value="jabar">Jawa Barat</div>
    <div class="custom-option" data-value="jateng">Jawa Tengah</div>
    <div class="custom-option" data-value="yogyakarta">DI Yogyakarta</div>
    <div class="custom-option" data-value="jatim">Jawa Timur</div>
    
    <!-- Bali & Nusa Tenggara -->
    <div class="custom-option" data-value="bali">Bali</div>
    <div class="custom-option" data-value="ntb">Nusa Tenggara Barat</div>
    <div class="custom-option" data-value="ntt">Nusa Tenggara Timur</div>
    
    <!-- Kalimantan -->
    <div class="custom-option" data-value="kalbar">Kalimantan Barat</div>
    <div class="custom-option" data-value="kalteng">Kalimantan Tengah</div>
    <div class="custom-option" data-value="kalsel">Kalimantan Selatan</div>
    <div class="custom-option" data-value="kaltim">Kalimantan Timur</div>
    <div class="custom-option" data-value="kalra">Kalimantan Utara</div>
    
    <!-- Sulawesi -->
    <div class="custom-option" data-value="sulut">Sulawesi Utara</div>
    <div class="custom-option" data-value="sulteng">Sulawesi Tengah</div>
    <div class="custom-option" data-value="sulsel">Sulawesi Selatan</div>
    <div class="custom-option" data-value="sultra">Sulawesi Tenggara</div>
    <div class="custom-option" data-value="gorontalo">Gorontalo</div>
    <div class="custom-option" data-value="sulbar">Sulawesi Barat</div>
    
    <!-- Maluku & Papua -->
    <div class="custom-option" data-value="maluku">Maluku</div>
    <div class="custom-option" data-value="malut">Maluku Utara</div>
    <div class="custom-option" data-value="papuabarat">Papua Barat</div>
    <div class="custom-option" data-value="papua">Papua</div>
</div>
    </div>
</div>           <!-- TOMBOL YANG SUDAH DIPERBAIKI STRUKTURNYA -->
                <a href="unggahan.php" class="create-events-btn" style="text-align: center; display: block; text-decoration: none; line-height: 2.5;">Buat Postingan</a>
            </div>
        </main>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const uploadArea = document.getElementById('imageUploadArea');
    const uploadInput = document.getElementById('imageUploadInput');

    uploadArea.addEventListener('click', () => uploadInput.click());

    uploadInput.addEventListener('change', function(e) {
        const uploadIcon = uploadArea.querySelector('.upload-icon');
        if (uploadIcon) uploadIcon.style.display = 'none';

        const file = e.target.files[0];

        // LOGIKA PENGECEKAN FILE SEKARANG SUDAH BERADA DI DALAM FUNGSI YANG BENAR
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                uploadArea.querySelectorAll('.uploaded-image, .image-placeholder-icon')
                    .forEach(el => el.remove());

                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'uploaded-image';
                uploadArea.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    }); // penutup addEventListener change yang benar

    function setupSelect(triggerId, optionsId, selectedId) {
        const trigger = document.getElementById(triggerId);
        const options = document.getElementById(optionsId);
        const selected = document.getElementById(selectedId);
        const arrow = trigger.querySelector('.select-arrow');

        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            options.classList.toggle('show');

            if(arrow) {
                arrow.className = options.classList.contains('show')
                    ? "ri-arrow-up-s-line select-arrow"
                    : "ri-arrow-down-s-line select-arrow";
            }
        });

        options.querySelectorAll('.custom-option').forEach(opt => {
            opt.addEventListener('click', (e) => {
                e.stopPropagation();
                selected.textContent = opt.textContent;
                options.classList.remove('show');
                if(arrow) arrow.className = "ri-arrow-down-s-line select-arrow";
            });
        });

        document.addEventListener('click', () => {
            options.classList.remove('show');
            if(arrow) arrow.className = "ri-arrow-down-s-line select-arrow";
        });
    }

    setupSelect('custom-category-select', 'categoryOptions', 'selected-category');
    setupSelect('custom-location-select', 'locationOptions', 'selected-location');

});
</script>

</body>
</html>