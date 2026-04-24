<?php
session_start();
if($_SESSION['status'] != "login"){ header("location:login.php"); }
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Riwayat Pesanan</span>
            <a href="index.php" class="btn btn-outline-light btn-sm">Kembali ke Dashboard</a>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow border-0">
            <div class="card-body p-4">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Buku</th>
                            <th>Jumlah</th>
                            <th>Total Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        // Query JOIN untuk menarik data dari tabel relasi
                        $sql = "SELECT p.Tanggal_Pesanan, pl.Nama, b.Judul, dp.Kuantitas, p.Total_Harga
                                FROM pesanan p
                                JOIN pelanggan pl ON p.Pelanggan_ID = pl.ID
                                JOIN detail_pesanan dp ON p.ID = dp.Pesanan_ID
                                JOIN buku b ON dp.Buku_ID = b.ID
                                ORDER BY p.ID DESC";
                        
                        $tampil = mysqli_query($koneksi, $sql);
                        while($data = mysqli_fetch_array($tampil)){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= date('d/m/Y', strtotime($data['Tanggal_Pesanan'])); ?></td>
                            <td class="fw-bold"><?= $data['Nama']; ?></td>
                            <td><?= $data['Judul']; ?></td>
                            <td><?= $data['Kuantitas']; ?></td>
                            <td class="text-success fw-bold">Rp <?= number_format($data['Total_Harga'], 0, ',', '.'); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>