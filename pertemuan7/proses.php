<?php
if (empty($_POST['name'])){
    echo "Nama tidak boleh kosong!";
}

$name   = $_POST['name'];
$nilai  = $_POST['nilai'];
$kuliah = $_POST['kuliah'];
?>

<h2>Hasil Output</h2>
<p>Nama Saya Adalah <?php echo $name; ?></p>
<p>Nilai Saya Adalah <?php echo $nilai; ?></p>
<p>Mengambil Mata Kuliah? <?php echo $kuliah; ?></p>

<?php
if ($nilai >= 90){
    echo "Nilai A";
} elseif ($nilai >= 80){
    echo "Nilai B";
} elseif ($nilai >= 70){
    echo "Nilai C";
} elseif ($nilai >= 60){
    echo "Nilai D";
} else {
    echo "Nilai E";
}
?>