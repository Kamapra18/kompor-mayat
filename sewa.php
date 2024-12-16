<?php
session_start();
include "servis/database.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$edit_mode = false;
$data = [];
$user_id = $_SESSION['user_id']; // Ambil user_id dari sesi

// Jika ada parameter ID, ambil data dari database untuk diedit
if (isset($_GET['id'])) {
    $edit_mode = true;
    $id = intval($_GET['id']);
    $query = "SELECT * FROM pemesanan WHERE id = ? AND user_id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ii", $id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        die("Data tidak ditemukan atau Anda tidak memiliki izin.");
    }
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $paket = $_POST['paket'];
    $jumlah_pesanan = intval($_POST['barang']);
    $alamat = $_POST['alamat'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];

    // Validasi sederhana
    if (empty($nama) || empty($paket) || $jumlah_pesanan <= 0 || empty($alamat) || empty($tanggal_mulai) || empty($tanggal_selesai)) {
        $error = "Semua field harus diisi dengan benar.";
    } else {
        if ($edit_mode) {
            // Update data jika dalam mode edit
            $query = "UPDATE pemesanan SET nama = ?, paket = ?, jumlah_pesanan = ?, alamat = ?, tanggal_mulai = ?, tanggal_selesai = ? WHERE id = ? AND user_id = ?";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ssisssii", $nama, $paket, $jumlah_pesanan, $alamat, $tanggal_mulai, $tanggal_selesai, $id, $user_id);
        } else {
            // Simpan data baru jika bukan mode edit
            $query = "INSERT INTO pemesanan (user_id, nama, paket, jumlah_pesanan, alamat, tanggal_mulai, tanggal_selesai, status) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, 'diproses')";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ississs", $user_id, $nama, $paket, $jumlah_pesanan, $alamat, $tanggal_mulai, $tanggal_selesai);
        }

        if ($stmt->execute()) {
            header("Location: status.php");
            exit();
        } else {
            $error = "Terjadi kesalahan: " . $stmt->error;
        }
        $stmt->close();
    }
}

$db->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $edit_mode ? 'Edit Pesanan' : 'Tambah Pesanan'; ?></title>
    <link rel="stylesheet" href="">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            padding: 0;
        }

        .content {
            margin-top: 7%;
            margin-left: 17%;
            max-width: 800px;
            padding: 8px;
            background-color: #e3c4ae;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .sewa {
            background-color: #f4f4f4;
            padding: 30px;
            margin: 18px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .sewa label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .sewa input {
            width: 99%;
            padding: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }

        .sewa select{
            width: 101%;
            padding: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .cancel-btn {
            background-color: #ff4d4d;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .cancel-btn:hover {
            background-color: #cc0000;
        }

        .submit-btn:hover {
            background-color: #218838;
        }
        .back-link{
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px 15px;
            text-decoration: none;
            background-color: #cc0000;
            border-radius: 3px;
            color: #ccc;
        }

    </style>
</head>
<body>
    <?php include "layout/header.html"; ?>
    <div class="content">   
        <div class="sewa">
            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda" value="<?= htmlspecialchars($data['nama'] ?? ''); ?>" required>

                <label for="paket">Paket</label>
                <select name="paket" id="paket" required>
                    <option value="" disabled <?= empty($data['paket']) ? 'selected' : ''; ?>>Pilih Paket</option>
                    <option value="standar" <?= (isset($data['paket']) && $data['paket'] === 'standar') ? 'selected' : ''; ?>>Standar</option>
                    <option value="medium" <?= (isset($data['paket']) && $data['paket'] === 'medium') ? 'selected' : ''; ?>>Medium</option>
                    <option value="premium" <?= (isset($data['paket']) && $data['paket'] === 'premium') ? 'selected' : ''; ?>>Premium</option>
                </select>

                <label for="barang">Jumlah Pesanan</label>
                <input type="number" name="barang" id="barang" placeholder="Masukkan jumlah pesanan" value="<?= htmlspecialchars($data['jumlah_pesanan'] ?? ''); ?>" required>

                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda" value="<?= htmlspecialchars($data['alamat'] ?? ''); ?>" required>
    
                <label for="tanggal_mulai">Tanggal Mulai Sewa</label>
                <input type="date" id="tanggal_mulai" name="tanggal_mulai" value="<?= htmlspecialchars($data['tanggal_mulai'] ?? ''); ?>" required>
    
                <label for="tanggal_selesai">Tanggal Selesai Sewa</label>
                <input type="date" id="tanggal_selesai" name="tanggal_selesai" value="<?= htmlspecialchars($data['tanggal_selesai'] ?? ''); ?>" required>
    
                <div class="buttons">
                    <button type="reset" class="cancel-btn">Cancel</button>
                    <button type="submit" class="submit-btn"><?= $edit_mode ? 'Update Pesanan' : 'Sewa Sekarang'; ?></button>
                </div>
            </form>
        </div>
    </div>
    <a href="layanan.php" class="back-link">BACK</a>
</body>
</html>
