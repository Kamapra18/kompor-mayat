<?php
session_start();
include "servis/database.php";

if (!isset($db)) {
    die("Koneksi ke database tidak ditemukan. Periksa konfigurasi database Anda.");
}

// Button cancel
if (isset($_GET['cancel_id'])) {
    $cancel_id = intval($_GET['cancel_id']);
    $query = "DELETE FROM pemesanan WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $cancel_id);

    if ($stmt->execute()) {
        echo "<script>alert('Pesanan berhasil dihapus!'); window.location.href='status.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pesanan.');</script>";
    }

    $stmt->close();
}

// Button booking (ubah status menjadi selesai)
if (isset($_GET['id'])) {
    $booking_id = intval($_GET['id']);
    $query = "UPDATE pemesanan SET status = 'selesai' WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $booking_id);

    if ($stmt->execute()) {
        echo "<script>alert('Status berhasil diperbarui menjadi selesai!'); window.location.href='status.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui status.');</script>";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pesanan</title>
    <style>
        .contain h1{
            color: #fff;
        }
        .contain {
            max-width: 90%;
            margin: 4% auto 30px;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            text-align: left;
            padding: 12px;
        }
        thead.table-dark {
            background-color: #333;
            color: #fff;
        }
        tbody tr:hover {
            background-color: #eaeaea;
        }
        .action-buttons a {
            margin-right: 10px;
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
        }
        .btn-edit {
            background-color: #4CAF50;
        }
        .btn-cancel {
            background-color: #f44336;
        }
        .btn-delete {
            background-color: #9c27b0;
        }
        .btn-pay {
            background-color: #2196F3;
        }
        .back-link {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-link:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <?php include "layout/header.html"; ?>
    <div class="contain">
        <h1>Status Pesanan</h1>
        <table>
            <thead class="table-dark">
                <tr>
                    <th>Jumlah Pesanan</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Alamat</th>
                    <th>Tanggal Sewa</th>
                    <th>Status</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlGet = "SELECT * FROM pemesanan";
                $query = mysqli_query($db, $sqlGet);

                while ($data = mysqli_fetch_array($query)) {
                    // Hitung total harga berdasarkan paket
                    $harga_paket = 0;
                    if ($data['paket'] === 'standar') {
                        $harga_paket = 1000000;
                    } elseif ($data['paket'] === 'medium') {
                        $harga_paket = 1500000;
                    } elseif ($data['paket'] === 'premium') {
                        $harga_paket = 2500000;
                    }
                    $total_harga = $harga_paket * intval($data['jumlah_pesanan']);

                    // Tanggal sewa
                    $tanggal_sewa = htmlspecialchars($data['tanggal_mulai']) . " - " . htmlspecialchars($data['tanggal_selesai']);

                    // Aksi
                    $aksi = "";
                    if ($data['status'] === 'diproses') {
                        $aksi .= '<a href="sewa.php?id=' . $data['id'] . '" class="btn-edit">Edit</a>';
                        $aksi .= '<a href="#" onclick="confirmCancel(' . $data['id'] . ')" class="btn-cancel">Cancel</a>';
                        $aksi .= '<a href="?id=' . $data['id'] . '" class="btn-pay">Booking</a>';
                    } elseif ($data['status'] === 'selesai') {
                        $aksi .= '<a href="#" onclick="confirmDelete(' . $data['id'] . ')" class="btn-delete">Hapus</a>';
                    }

                    echo "
                        <tr>
                            <td>" . htmlspecialchars($data['jumlah_pesanan']) . "</td>
                            <td>" . htmlspecialchars($data['nama']) . "</td>
                            <td>" . htmlspecialchars($data['paket']) . "</td>
                            <td>" . htmlspecialchars($data['alamat']) . "</td>
                            <td>" . $tanggal_sewa . "</td>
                            <td>" . htmlspecialchars($data['status']) . "</td>
                            <td>Rp " . number_format($total_harga, 0, ',', '.') . "</td>
                            <td class='action-buttons'>$aksi</td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
            <script>
                function confirmCancel(id) {
                    if (confirm("Yakin ingin membatalkan pesanan ini?")) {
                        window.location.href = "?cancel_id=" + id;
                    }
                }

                function confirmDelete(id) {
                    if (confirm("Yakin ingin menghapus pesanan ini?")) {
                        window.location.href = "?cancel_id=" + id;
                    }
                }
            </script>
        </table>
    </div>
    <a href="layanan.php" class="back-link">Order Lagi</a>
</body>
</html>
