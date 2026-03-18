<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div>
        <h2>Perhitungan Total Pembelian Dengan Array</h2>

        <hr>

        <?php
            $infobarang = array("Buku Madilog Tan Malaka", 150);
            $hargasatuan = $infobarang[1];
            $persenpajak = 10;
            $jumlahbeli = 3;
            $total = $hargasatuan * $jumlahbeli;
            $pajak = $total * ($persenpajak/100);
            $totalakhir = $total + $pajak;
        ?>

        <p>Nama Barang : <?php echo $infobarang[0] ?> </p>
        <p>Harga Satuan : <?php echo $hargasatuan ?>.000</p>
        <p>Jumlah Beli : <?php echo $jumlahbeli ?> </p>
        <p>Total (Tanpa Pajak) : <?php echo $total ?>.000</p>
        <p>Pajak : <?php echo $pajak ?>.000</p>
        <p>Total : <?php echo $totalakhir ?>.000</p>

    </div>
    
</body>
</html>