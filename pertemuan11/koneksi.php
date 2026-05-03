<?php
$koneksi = mysqli_connect("sql210.infinityfree.com", "if0_41764199", "Alghifary12", "if0_41764199_bukulatihan");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>