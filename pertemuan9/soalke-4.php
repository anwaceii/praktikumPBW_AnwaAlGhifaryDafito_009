<!DOCTYPE html>
<html>
<head>
    <title>Soal 4 - Form Genap Ganjil</title>
</head>
<body>
    <?php include 'soalke-5.php'; ?>

    <h3>4. Cek Angka Genap atau Ganjil</h3>

    <form method="POST" action="">
        <label>Masukkan Angka:</label>
        <input type="number" name="angka" required>
        <button type="submit">Kirim</button>
    </form>

    <br>

    <?php
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];

        $status = ($angka % 2 == 0) ? "Genap" : "Ganjil";

        echo "Angka " . $angka . " adalah bilangan " . $status;
    }
    ?>
</body>
</html>