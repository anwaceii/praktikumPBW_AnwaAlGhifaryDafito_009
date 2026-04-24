<?php
session_start();
if($_SESSION['status'] != "login"){ header("location:login.php"); }
include 'koneksi.php';

if(isset($_POST['proses_pesanan'])){
    $pelanggan_id = $_POST['pelanggan'];
    $buku_id = $_POST['buku'];
    $kuantitas = $_POST['kuantitas'];
    $tanggal = date('Y-m-d');

    // Ambil data buku untuk cek stok dan harga
    $query_buku = mysqli_query($koneksi, "SELECT Harga, stok FROM buku WHERE ID='$buku_id'");
    $data_buku = mysqli_fetch_array($query_buku);
    
    if($data_buku['stok'] < $kuantitas){
        echo "<script>alert('Gagal! Stok tidak cukup.'); window.location='transaksi.php'</script>";
    } else {
        $total_harga = $data_buku['Harga'] * $kuantitas;

        // 1. Simpan ke tabel pesanan
        mysqli_query($koneksi, "INSERT INTO pesanan (Tanggal_Pesanan, Pelanggan_ID, Total_Harga) 
                                VALUES ('$tanggal', '$pelanggan_id', '$total_harga')");
        
        $id_pesanan_baru = mysqli_insert_id($koneksi);

        // 2. Simpan rincian ke detail_pesanan
        mysqli_query($koneksi, "INSERT INTO detail_pesanan (Pesanan_ID, Buku_ID, Kuantitas, Harga_Per_Satuan) 
                                VALUES ('$id_pesanan_baru', '$buku_id', '$kuantitas', '".$data_buku['Harga']."')");

        // 3. Potong stok buku
        mysqli_query($koneksi, "UPDATE buku SET stok = stok - $kuantitas WHERE ID='$buku_id'");

        echo "<script>alert('Transaksi Berhasil!'); window.location='lihat_transaksi.php'</script>";
    }
}
?>