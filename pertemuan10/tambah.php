<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto shadow-sm" style="max-width: 500px;">
            <div class="card-header bg-success text-white">Input Buku Baru</div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label>Judul Buku</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Penulis</label>
                        <input type="text" name="penulis" class="form-control" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Tahun Terbit</label>
                            <input type="number" name="tahun" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>Stok</label>
                            <input type="number" name="stok" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label>Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary w-100">Simpan ke Database</button>
                    <a href="admin.php" class="btn btn-link w-100 mt-2 text-secondary">Batal</a>
                </form>

                <?php
                if(isset($_POST['simpan'])){
                    include 'koneksi.php';
                    mysqli_query($koneksi, "insert into buku set 
                        Judul = '$_POST[judul]',
                        Penulis = '$_POST[penulis]',
                        Tahun_Terbit = '$_POST[tahun]',
                        Harga = '$_POST[harga]',
                        stok = '$_POST[stok]'");
                    echo "<script>alert('Buku Berhasil Ditambah!'); window.location='admin.php'</script>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>