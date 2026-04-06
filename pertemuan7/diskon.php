<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>

<h2>Menu Diskon Pembayaran Mahasiswa</h2>

<form action="diskon_proses.php" method="post">
    <div style="margin-bottom: 10px;">
        <label>Nama Mahasiswa</label><br>
        <input type="text" name="nama" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label>NPM</label><br>
        <input type="text" name="npm" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Program Studi</label><br>
        <input type="text" name="prodi" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Semester</label><br>
        <input type="number" name="semester" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Biaya UKT</label><br>
        <input type="number" name="ukt" required>
    </div>

    <button type="submit" name="hitung">Hitung Diskon</button>
</form>

</body>
</html>
