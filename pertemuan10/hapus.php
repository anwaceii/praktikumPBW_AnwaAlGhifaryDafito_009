<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
}
if(!isset($_GET['id'])){
    header("location:index.php");
}

include 'koneksi.php';
mysqli_query($koneksi, "delete from buku where ID='$_GET[id]'");
echo "<script>alert('Buku berhasil dihapus!'); window.location='index.php'</script>";
?>