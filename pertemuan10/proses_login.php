<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Login langsung tanpa cek database karena tabel user tidak ada
if($username == 'admin' && $password == '123'){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    echo "<script>alert('Gagal Login! Username/Password salah'); window.location='login.php'</script>";
}
?>