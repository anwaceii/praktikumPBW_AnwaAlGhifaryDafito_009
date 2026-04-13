<style>
    nav {
        background-color: #d73e3e; 
        padding: 10px;             
        text-align: center;        
        border-radius: 8px;        
    }

    nav a {
        color: white;              
        text-decoration: none;     
        margin: 0 15px;            
        font-family: Arial, sans-serif; 
        font-weight: bold;
    }

    nav a:hover {
        color: #ffcccc;            
        text-decoration: underline;
    }
</style>

<nav>
    <?php
    // Tautan navigasi ke file-file soal Anda
    echo '<a href="soalke-1.php">Soal ke-1</a>';
    echo '<a href="soalke-2.php">Soal ke-2</a>';
    echo '<a href="soalke-3.php">Soal ke-3</a>';
    echo '<a href="soalke-4.php">Soal ke-4</a>';
    ?>
</nav>
<br>