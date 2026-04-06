<?php
$nama = $_POST["nama"];
$npm = $_POST["npm"];
$prodi = $_POST["prodi"];
$semester = $_POST["semester"];
$ukt = $_POST["ukt"];

if ($ukt >= 5000000 && $semester > 8) {
    $diskon = 15;
} elseif ($ukt >= 5000000) {
    $diskon = 10;
} else {
    $diskon = 0;
}

$bayar = $ukt - ($ukt * $diskon / 100);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diskon Mahasiswa</title>
</head>
<body>
        <tr>
            <td><h2>Hasil Diskon Pembayaran Mahasiswa</h2></td>
        </tr>
        <tr>
            <td>
                <h2>Nama Mahasiswa : <?php echo $nama; ?></h2>
                <h2>NPM : <?php echo $npm; ?></h2>
                <h2>Program Studi : <?php echo $prodi; ?></h2>
                <h2>Semester : <?php echo $semester; ?></h2>
                <h2>Biaya UKT : Rp. <?php echo number_format($ukt, 0, ",", "."); ?>,-</h2>
                <h2>Diskon : <?php echo $diskon; ?>%</h2>
                <h2>Jumlah Yang Harus Dibayar : Rp. <?php echo number_format($bayar, 0, ",", "."); ?>,-</h2>
            </td>
        </tr>
    </table>

</body>
</html>
