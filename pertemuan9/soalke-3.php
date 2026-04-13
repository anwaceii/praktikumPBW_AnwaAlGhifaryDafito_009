<!DOCTYPE html>
<html>
<head>
    <title>Soal ke-3</title>
</head>
<body>
    <?php include 'soalke-5.php'; ?>

    <h3>3. Daftar Nama Hewan</h3>
    
    <?php
    $hewan = ["Kerbau", "Anjing", "Harimau", "Gajah", "Singa"];
    
    echo "<ul>"; 
    
   
    foreach ($hewan as $namahewan) {
        echo "<li>" . $namahewan . "</li>";
    }
    
    echo "</ul>"; 
    ?>
</body>
</html>