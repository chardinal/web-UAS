<?php
require '../db_conection.php';

// Ambil data dari database
$query = "SELECT * FROM pemesanan";
$result = $conn->query($query);

if (!$result) {
    die("Error: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Data Pemesanan</title>
    <link rel="stylesheet" href="tabel_admin_style.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>DevSync Admin</h2>
            <ul>
            <li><a href="web_admin.php">Dashboard</a></li>
            <li><a href="tabel_pemesanan.php">Tabel Pemesanan</a></li> 
            <li><a href="pesanan.php">Pesanan</a></li>
            <li><a href="pendapatan.php">Pendapatan</a></li>
            <li><a href="#">Charts</a></li>
            <li><a href="#">Tables</a></li>
            </ul>
        </div>

        <!-- Kontainer Tabel -->
        <div class="container">
            <h1>Admin Panel - Data Pemesanan</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pemesanan</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Paket</th>
                        <th>Tipe Aplikasi</th>
                        <th>Fitur</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['id_pemesanan']) ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['nik']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['telepon']) ?></td>
                        <td><?= htmlspecialchars($row['alamat']) ?></td>
                        <td><?= htmlspecialchars($row['package']) ?></td>
                        <td><?= htmlspecialchars($row['tipe']) ?></td>
                        <td><?= htmlspecialchars($row['features']) ?></td>
                        <td><?= htmlspecialchars($row['pesan']) ?></td>
                        <td>
                            <a href="edit.php?id=<?= htmlspecialchars($row['id_pemesanan']) ?>" class="edit-button">Edit</a>
                            <a href="delete.php?id=<?= htmlspecialchars($row['id_pemesanan']) ?>" class="delete-button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
