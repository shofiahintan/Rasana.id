<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kuliner Baru - Rasana.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdf2e9;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(116, 83, 56, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #745338;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #ac8254;
            font-weight: 500;
            font-size: 14px;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        input[type="text"]:focus, textarea:focus, select:focus {
            border-color: #ac8254;
            outline: none;
        }
        .btn-submit {
            background-color: #745338;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            width: 100%;
            margin-top: 10px;
        }
        .btn-submit:hover {
            background-color: #ac8254;
        }
        .btn-kembali {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #745338;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Tambah Kuliner Baru</h2>
    
    <form action="proses_tambah.php" method="POST">
        <div class="form-group">
            <label>Nama Kuliner</label>
            <input type="text" name="title" placeholder="Contoh: Bakso Malang Pedas" required>
        </div>
        
        <div class="form-group">
            <label>Kategori</label>
            <select name="category" required>
                <option value="Makanan Berat">Makanan Berat</option>
                <option value="Camilan">Camilan</option>
                <option value="Kue Tradisional">Kue Tradisional</option>
                <option value="Minuman">Minuman</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Deskripsi Kuliner</label>
            <textarea name="description" rows="4" placeholder="Ceritakan keunikan kuliner ini..." required></textarea>
        </div>
        
        <button type="submit" name="submit" class="btn-submit">Simpan Postingan</button>
        <a href="../dashboard admin.php" class="btn-kembali">← Kembali ke Dashboard</a>
    </form>
</div>

</body>
</html>