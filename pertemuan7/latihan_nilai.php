<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ujian</title>
</head>
<body>

<form action="proses.php" method="post">
    <div style="display: flex; gap: 10px; margin-bottom: 10px;">
        <label>Nama Mahasiswa: </label>
        <input type="text" name="name">
    </div> 

    <div style="display: flex; gap: 10px; margin-bottom: 10px;">
        <label>Nilai Ujian: </label>
        <input type="number" name="nilai">
    </div> 

    <div style="display: flex; gap: 10px; margin-bottom: 10px;">
        <label>Mata kuliah: </label>
        <input type="text" name="kuliah">
    </div> 

    <button type="submit">Kirim</button>
</form>

</body>
</html>