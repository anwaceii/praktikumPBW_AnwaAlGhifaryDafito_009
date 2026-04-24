<?php
// Pastikan file koneksi.php sudah ada
include 'koneksi.php';

// Menangkap ID buku dari URL (saat tombol 'Beli Buku' diklik)
$id_buku = $_GET['id'];

// Mengambil data spesifik buku yang dipilih
$tampil = mysqli_query($koneksi, "select * from buku where ID='$id_buku'");
$buku = mysqli_fetch_array($tampil);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian - Toko Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    
    <div class="bg-primary text-white p-3 mb-4">
        <div class="container">
            <h2>Toko Buku Online - Checkout</h2>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Formulir Pembelian Buku</h4>
                    </div>
                    
                    <div class="card-body p-4">
                        <div class="alert alert-info">
                            <p class="mb-1">Anda akan membeli buku:</p>
                            <h5><?php echo $buku['Judul']; ?></h5>
                            <p class="mb-0">Harga Satuan: Rp <?php echo number_format($buku['Harga'], 0, ',', '.'); ?></p>
                            <p class="mb-0">Sisa Stok: <?php echo $buku['stok']; ?></p>
                        </div>
                        
                        <form method="post" action="proses_beli.php">
                            <input type="hidden" name="buku_id" value="<?php echo $buku['ID']; ?>">
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">No Telepon</label>
                                <input type="text" name="telepon" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Alamat Pengiriman</label>
                                <textarea name="alamat" rows="3" class="form-control" required></textarea>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Jumlah Beli</label>
                                <input type="number" name="kuantitas" value="1" min="1" max="<?php echo $buku['stok']; ?>" class="form-control" required>
                            </div>
                            
                            <button type="submit" name="proses_beli" class="btn btn-success w-100 mb-2">Proses Pesanan</button>
                            <a href="index.php" class="btn btn-secondary w-100">Batal / Kembali ke Katalog</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>