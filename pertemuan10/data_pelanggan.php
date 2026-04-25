<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand">Admin Toko</span>
            <div>
                <a href="admin.php" class="btn btn-outline-light btn-sm me-2">Kelola Buku</a>
                <a href="data_pelanggan.php" class="btn btn-light btn-sm me-2 fw-bold text-dark">Data Pelanggan</a>
                <a href="riwayat_pesanan.php" class="btn btn-outline-light btn-sm me-2">Riwayat Transaksi</a>
                <a href="index.php" class="btn btn-info btn-sm">Ke Toko Utama</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm p-4">
            <h4 class="mb-4">Daftar Pelanggan Toko</h4>
            <table class="table table-bordered table-striped">
                <thead class="table-success">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat Lengkap</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "select * from pelanggan order by ID desc");
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><b><?php echo $data['Nama']; ?></b></td>
                        <td><?php echo $data['Email']; ?></td>
                        <td><?php echo $data['Telepon']; ?></td>
                        <td><?php echo $data['Alamat']; ?></td>
                        <td>
                            <a href="hapus_pelanggan.php?id=<?php echo $data['ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pelanggan ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>