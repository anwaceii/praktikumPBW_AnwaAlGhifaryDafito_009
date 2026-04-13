<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Biaya</title>
</head>
<body>
    
</body>
</html>

<?php
const PAJAK = 0.15;

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$barang = $_POST['barang'];

if ($barang == 'Buku') {
    $total = 50000 * (0.15);
} elseif ($barang == 'Gitar') {
    $total = 250000 * (0.15);
} elseif ($barang == 'Laptop') {
    $total = 1000000 * (0.15);
}
?>

<h2>Detail Biaya</h2>
<p>Nama Mahasiswa: <?php echo htmlspecialchars($nama); ?></p>
<p>NIM Mahasiswa: <?php echo htmlspecialchars($nim); ?></p>
<p>Email: <?php echo htmlspecialchars($email); ?></p>               
<p>Barang yang dipilih: <?php echo htmlspecialchars($barang); ?></p>
<p>Total Biaya: Rp <?php echo number_format($total, 2, ',', '.'); ?></p>    
    