<!DOCTYPE html>
<html>
<head>
    <title>Admin Toko Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand"> Admin Toko</span>
            <div>
                <a href="admin.php" class="btn btn-light btn-sm me-2 fw-bold text-dark">Kelola Buku</a>
                <a href="data_pelanggan.php" class="btn btn-outline-light btn-sm me-2">Data Pelanggan</a>
                <a href="riwayat_pesanan.php" class="btn btn-outline-light btn-sm me-2">Riwayat Transaksi</a>
                <a href="index.php" class="btn btn-info btn-sm">Ke Toko Utama</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm p-4">
            <div class="d-flex justify-content-between mb-3">
                <h4>Data Admin</h4>
                <a href="tambah.php" class="btn btn-success">+ Tambah Buku Baru</a>
            </div>

            <table class="table table-hover table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "select * from buku order by ID desc");
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Judul']; ?></td>
                        <td><?php echo $data['Penulis']; ?></td>
                        <td>Rp <?php echo number_format($data['Harga'],0,',','.'); ?></td>
                        <td><?php echo $data['stok']; ?></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $data['ID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $data['ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>