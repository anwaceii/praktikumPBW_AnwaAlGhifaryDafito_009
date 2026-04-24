<!DOCTYPE html>
<html>
<head>
    <title>Toko Buku Anwa Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    
    <div class="bg-primary text-white p-3 mb-4">
        <div class="container">
            <h2>Toko Buku Anwa Jaya</h2>
        </div>
    </div>

    <div class="container">
        <div class="card shadow-sm p-4">
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Daftar Buku Tersedia</h4>
                
                <form method="GET" action="index.php" class="d-flex">
                    <input type="text" name="cari" class="form-control me-2" placeholder="Cari judul buku..." required>
                    <button type="submit" class="btn btn-outline-primary">Cari</button>
                    
                    <?php if(isset($_GET['cari'])) { ?>
                        <a href="index.php" class="btn btn-danger ms-2">X</a>
                    <?php } ?>
                </form>
            </div>
            
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Harga</th>
                        <th>Sisa Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    
                    // Mengecek apakah tombol cari ditekan
                    if(isset($_GET['cari'])){
                        $kata_kunci = $_GET['cari'];
                        // Cari buku yang judulnya mirip dengan inputan, dan stok > 0
                        $query = "select * from buku where Judul like '%$kata_kunci%' and stok > 0";
                    } else {
                        // Jika tidak mencari, tampilkan semua buku seperti biasa
                        $query = "select * from buku where stok > 0";
                    }
                    
                    $tampil = mysqli_query($koneksi, $query);
                    
                    // Mengecek apakah buku yang dicari ada di database
                    if(mysqli_num_rows($tampil) > 0){
                        while($data = mysqli_fetch_array($tampil)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><b><?php echo $data['Judul']; ?></b></td>
                            <td><?php echo $data['Penulis']; ?></td>
                            <td><?php echo $data['Tahun_Terbit']; ?></td>
                            <td>Rp <?php echo number_format($data['Harga'], 0, ',', '.'); ?></td>
                            <td><?php echo $data['stok']; ?></td>
                            <td>
                                <a href="beli.php?id=<?php echo $data['ID']; ?>" class="btn btn-primary btn-sm">Beli Buku</a>
                            </td>
                        </tr>
                        <?php 
                        }
                    } else {
                        // Teks yang muncul jika judul buku tidak ditemukan
                        echo "<tr><td colspan='7' class='text-center text-danger fw-bold'>Maaf, buku yang Anda cari tidak ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>