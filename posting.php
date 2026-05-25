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
                            <span id="selected-location">Lamongan, Jawa Timur</span>
                            <i class="ri-arrow-down-s-line select-arrow"></i>
                        </div>

                        <div class="custom-options" id="locationOptions">
                            <div class="custom-option" data-value="lamongan">Lamongan, Jawa Timur</div>
                            <div class="custom-option" data-value="malang">Malang, Jawa Timur</div>
                            <div class="custom-option" data-value="tasikmalaya">Tasikmalaya, Jawa Barat</div>
                        </div>
                    </div>
                </div>
                <a href = "unggahan.php"><button class="create-events-btn">Buat Postingan</button></a>
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

});

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
    });

    function setupSelect(triggerId, optionsId, selectedId) {
        const trigger = document.getElementById(triggerId);
        const options = document.getElementById(optionsId);
        const selected = document.getElementById(selectedId);
        const arrow = trigger.querySelector('.select-arrow');

        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            options.classList.toggle('show');

            arrow.className = options.classList.contains('show')
                ? "ri-arrow-up-s-line select-arrow"
                : "ri-arrow-down-s-line select-arrow";
        });

        options.querySelectorAll('.custom-option').forEach(opt => {
            opt.addEventListener('click', (e) => {
                e.stopPropagation();
                selected.textContent = opt.textContent;
                options.classList.remove('show');
                arrow.className = "ri-arrow-down-s-line select-arrow";
            });
        });

        document.addEventListener('click', () => {
            options.classList.remove('show');
            arrow.className = "ri-arrow-down-s-line select-arrow";
        });
    }

    setupSelect('custom-category-select', 'categoryOptions', 'selected-category');
    setupSelect('custom-location-select', 'locationOptions', 'selected-location');

});
</script>

</body>
</html>