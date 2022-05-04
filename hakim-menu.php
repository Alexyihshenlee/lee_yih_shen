<?php 
# memulakan fail session
session_start();

# memanggil fail header.php dan guard-hakim.php
include('header.php');
include('guard-hakim.php');
?>

<section class="p-4">
    <!-- Memaparkan nama hakim -->
    <h2>Selamat datang <?= $_SESSION['nama'] ?></h2>
    
    <!-- Memaparkan tugas-tugas sebagai hakim pertandingan -->
    <b>Tugas Hakim</b>
    <ol>
        <li>Setiap hakim boleh mendaftar peserta baharu dengan cara memuat naik data *txt peserta.</li>
        <li>Setiap hakim boleh menilai mana-mana peserta yang telah disenaraikan.</li>
        <li>Peserta terakhir akan dinilai dan diberikan markah pada hari terakhir pertandingan.</li>
    </ol>
</section>

<?php include ('footer.php'); ?>
