<?php
include 'koneksi.php';

$id_pelanggan = $_GET['id'];
mysqli_query($koneksi, "delete from pelanggan where ID='$id_pelanggan'");

// Setelah dihapus, kembali ke halaman data_pelanggan
echo "<script>alert('Data pelanggan berhasil dihapus beserta riwayat pesanannya!'); window.location='data_pelanggan.php'</script>";
?>