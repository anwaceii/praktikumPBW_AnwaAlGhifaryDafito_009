<!DOCTYPE html>
<html>
<head>
    <title>Soal ke-2</title>
</head>
<body>
    <?php include 'soalke-5.php'; ?>

    <h3>2. Mencetak Bilangan Genap (2 sampai 10)</h3>
    
    <?php
    for ($i = 0; $i <= 10; $i += 2) {
        echo "Bilangan genap: " . $i . "<br>";
    }
    ?>
</body>
</html>