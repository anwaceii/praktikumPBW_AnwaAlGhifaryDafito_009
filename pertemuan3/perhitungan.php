<?php
$angka1 = $_POST['angka1'] ?? '';
$angka2 = $_POST['angka2'] ?? '';
$operasi = $_POST['operasi'] ?? '+';
$hasil = null;
$pesanError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($angka1 === '' || $angka2 === '') {
        $pesanError = 'Angka pertama dan kedua harus diisi.';
    } elseif (!is_numeric($angka1) || !is_numeric($angka2)) {
        $pesanError = 'Input harus berupa angka.';
    } else {
        switch ($operasi) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ((float) $angka2 == 0.0) {
                    $pesanError = 'Pembagian dengan nol tidak diperbolehkan.';
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default:
                $pesanError = 'Operasi tidak valid.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan PHP Sederhana</title>
</head>
<body>
    <h2>Perhitungan PHP Sederhana</h2>

    <form method="POST" action="">
        <div>
            <label for="angka1">Angka Pertama</label><br>
            <input type="number" name="angka1" id="angka1" step="any" value="<?php echo htmlspecialchars((string) $angka1); ?>">
        </div>
        <br>

        <div>
            <label for="angka2">Angka Kedua</label><br>
            <input type="number" name="angka2" id="angka2" step="any" value="<?php echo htmlspecialchars((string) $angka2); ?>">
        </div>
        <br>

        <div>
            <label for="operasi">Pilih Operasi</label><br>
            <select name="operasi" id="operasi">
                <option value="+" <?php echo $operasi === '+' ? 'selected' : ''; ?>>Penjumlahan (+)</option>
                <option value="-" <?php echo $operasi === '-' ? 'selected' : ''; ?>>Pengurangan (-)</option>
                <option value="*" <?php echo $operasi === '*' ? 'selected' : ''; ?>>Perkalian (*)</option>
                <option value="/" <?php echo $operasi === '/' ? 'selected' : ''; ?>>Pembagian (/)</option>
            </select>
        </div>
        <br>

        <button type="submit">Hitung</button>
    </form>

    <?php if ($pesanError !== ''): ?>
        <p style="color: red;"><?php echo htmlspecialchars($pesanError); ?></p>
    <?php endif; ?>

    <?php if ($hasil !== null): ?>
        <h3>Hasil: <?php echo htmlspecialchars((string) $hasil); ?></h3>
    <?php endif; ?>
</body>
</html>
