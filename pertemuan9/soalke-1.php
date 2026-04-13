<!DOCTYPE html>
<html>
<head>
    <title>Soal 1 - Form Kendaraan</title>
</head>
<body>
    <?php include 'soalke-5.php'; ?>

    <h3>1. Tentukan Jenis Kendaraan</h3>

      <form action="" method="post">

        <h2>Tentukan Jumlah Roda :</h2>

        <label for="roda">Masukan Jumlah Roda : </label> <br>
        <input type="number" name="roda" required>

        <br>
        <br>

        <button>Submit</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roda = $_POST['roda'];

        echo "Anda memasukkan roda: " . $roda . "<br>";

        switch ($roda) {
            case 2:
                echo "Hasil:Sepeda, Motor";
                break;
            case 3:
                echo "Hasil:Becak, Bajaj";
                break;
            case 4:
                echo "Hasil:Mobil";
                break;
            case 6:
                echo "Hasil:Truk";
                break;
            default:
                echo "Hasil: Jenis kendaraan tidak terdaftar";
                break;
        }
    }
    ?>
</body>
</html>