<?php
include 'koneksi.php';

// Menangkap data
$buku_id = $_POST['buku_id'];
$kuantitas = $_POST['kuantitas'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$tanggal = date('Y-m-d');

// Cek harga
$cek_buku = mysqli_query($koneksi, "select Harga from buku where ID='$buku_id'");
$data_buku = mysqli_fetch_array($cek_buku);

$harga_satuan = $data_buku['Harga'];
$total_harga = $harga_satuan * $kuantitas;

// 1. Simpan pelanggan
mysqli_query($koneksi, "insert into pelanggan (Nama, Alamat, Email, Telepon) values ('$nama', '$alamat', '$email', '$telepon')");
$pelanggan_id = mysqli_insert_id($koneksi);

// 2. Simpan pesanan
mysqli_query($koneksi, "insert into pesanan (Tanggal_Pesanan, Pelanggan_ID, Total_Harga) values ('$tanggal', '$pelanggan_id', '$total_harga')");
$pesanan_id = mysqli_insert_id($koneksi);

// 3. Simpan detail
mysqli_query($koneksi, "insert into detail_pesanan (Pesanan_ID, Buku_ID, Kuantitas, Harga_Per_Satuan) values ('$pesanan_id', '$buku_id', '$kuantitas', '$harga_satuan')");

// 4. Update stok
mysqli_query($koneksi, "update buku set stok = stok - $kuantitas where ID='$buku_id'");

echo "<script>alert('Pesanan berhasil dibuat!'); window.location='index.php'</script>";
?>