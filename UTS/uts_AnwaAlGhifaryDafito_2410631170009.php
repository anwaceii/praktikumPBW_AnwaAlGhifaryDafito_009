<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Mahasiswa</title>
    <style>
  
    </style>
</head>
<body>
    <div class="container">
        <h1>Koperasi Mahasiswa</h1>
        <form action="proses.php" method="post">
            <div class="">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" placeholder="Masukkan nama mahasiswa" required minlength="3" maxlength="30">
            </div>

            <div class="">
                <label for="nim">NIM Mahasiswa</label>
                <input type="text" name="nim" placeholder="Masukkan NIM" required minlength="8" maxlength="20">
            </div>

            <div class="">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Masukkan email aktif" required maxlength="40">
            </div>

            <div class="">
                <label>Jenis Layanan</label>
                <div class="inline-options">
                    <label><input type="radio" name="layanan" value="Reguler" required> Reguler</label>
                    <label><input type="radio" name="layanan" value="Prioritas"> Prioritas</label>
                </div>
            </div>

        <div>
        <label>Pilihan Barang</label><br>
        <input type="checkbox" name="barang" value="Buku"> Buku
        <input type="checkbox" name="barang" value="Gitar"> Gitar
        <input type="checkbox" name="barang" value="Laptop"> Laptop
        </div>
        <br>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
