<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pesanan Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand">⚙️ Panel Admin Toko</span>
            <div>
                <a href="admin.php" class="btn btn-outline-light btn-sm me-2">Kelola Buku</a>
                <a href="data_pelanggan.php" class="btn btn-outline-light btn-sm me-2">Data Pelanggan</a>
                <a href="riwayat_pesanan.php" class="btn btn-light btn-sm me-2 fw-bold text-dark">Riwayat Transaksi</a>
                <a href="index.php" class="btn btn-info btn-sm">Ke Toko Utama</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm p-4">
            <h4 class="mb-4">Buku Kas Transaksi</h4>
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No Pesanan</th>
                        <th>Tanggal</th>
                        <th>Nama Pembeli</th>
                        <th>Total Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    
                    // Menggabungkan tabel pesanan dan pelanggan agar namanya muncul
                    $query = "select pesanan.ID, pesanan.Tanggal_Pesanan, pelanggan.Nama, pesanan.Total_Harga 
                              from pesanan 
                              join pelanggan on pesanan.Pelanggan_ID = pelanggan.ID 
                              order by pesanan.ID desc";
                              
                    $tampil = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td>#TRX-<?php echo $data['ID']; ?></td>
                        <td><?php echo $data['Tanggal_Pesanan']; ?></td>
                        <td><?php echo $data['Nama']; ?></td>
                        <td class="text-success fw-bold">Rp <?php echo number_format($data['Total_Harga'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>