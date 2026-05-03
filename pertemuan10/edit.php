<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) { 
    header("Location: admin.php"); 
    exit;
}
include 'koneksi.php';

$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "select * from buku where ID='$id'");
$data = mysqli_fetch_array($tampil);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow">
                    <div class="card-header bg-warning">
                        <h5 class="mb-0 text-dark">Ubah Informasi Buku</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label class="form-label">Judul Buku</label>
                                <input type="text" name="judul" class="form-control" value="<?= $data['Judul']; ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label class="form-label">Penulis</label>
                                    <input type="text" name="penulis" class="form-control" value="<?= $data['Penulis']; ?>" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Tahun</label>
                                    <input type="number" name="tahun" class="form-control" value="<?= $data['Tahun_Terbit']; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Harga (Rp)</label>
                                    <input type="number" name="harga" class="form-control" value="<?= $data['Harga']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>" required>
                                </div>
                            </div>
                            <hr>
                            <div class="d-grid gap-2">
                                <button type="submit" name="ubah" class="btn btn-warning">Update Data</button>
                                <a href="index.php" class="btn btn-light">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['ubah'])){
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        
        $update = mysqli_query($koneksi, "UPDATE buku SET 
            Judul = '$judul', 
            Penulis = '$penulis', 
            Tahun_Terbit = '$tahun', 
            Harga = '$harga', 
            stok = '$stok' 
            WHERE ID='$id'");
            
        if($update){
            echo "<script>alert('Update Berhasil!'); window.location='index.php'</script>";
        } else {
            echo "<script>alert('Update Gagal!');</script>";
        }
    }
    ?>
</body>
</html>