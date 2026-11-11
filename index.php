<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum PHP</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="topbar">
    <div class="topbar-inner">
        <a class="brand" href="index.php"><span class="logo">&lt;/&gt;</span> Praktikum 7 &middot; PHP</a>
        <span class="eyebrow">Pemrograman Web</span>
    </div>
</header>

<main class="container">
    <section class="hero">
        <span class="eyebrow">Latihan 1 &middot; Menjalankan PHP</span>
        <h1>Belajar PHP</h1>
        <?php
        echo "<p>PHP berhasil dijalankan.</p>";
        echo "<p>Waktu server: " . date("d-m-Y H:i:s") . "</p>";
        ?>
        <div class="chips">
            <span class="chip">Server-side</span>
            <span class="chip">Form GET &amp; POST</span>
            <span class="chip">Validasi input</span>
            <span class="chip">PHP <?= PHP_VERSION ?></span>
        </div>
    </section>

    <h2 class="menu-title">Menu Praktikum 7</h2>
    <div class="menu-grid">
        <a class="menu-card" href="latihan2.php"><span class="num">2</span><div><strong>Variabel, operator, percabangan</strong><span class="desc">Nilai akhir &amp; predikat</span></div></a>
        <a class="menu-card" href="latihan3.php"><span class="num">3</span><div><strong>Perulangan dan array</strong><span class="desc">Daftar mahasiswa dengan foreach</span></div></a>
        <a class="menu-card" href="latihan4.php"><span class="num">4</span><div><strong>Function</strong><span class="desc">Diskon, luas, kelulusan</span></div></a>
        <a class="menu-card" href="latihan5.php"><span class="num">5</span><div><strong>Form GET</strong><span class="desc">Pencarian lewat parameter URL</span></div></a>
        <a class="menu-card" href="latihan6.php"><span class="num">6</span><div><strong>Form POST</strong><span class="desc">Kirim &amp; validasi data</span></div></a>
        <a class="menu-card" href="latihan7.php"><span class="num">7</span><div><strong>Pengolahan data sederhana</strong><span class="desc">Hitung subtotal transaksi</span></div></a>
        <a class="menu-card wide" href="miniproject.php"><span class="num">&#9733;</span><div><strong>Mini Project &mdash; Formulir Data Mahasiswa</strong><span class="desc">Validasi server-side lengkap + ringkasan data</span></div></a>
        <a class="menu-card wide" href="eksperimen.php"><span class="num">&#9881;</span><div><strong>Eksperimen Mandiri (1&ndash;3)</strong><span class="desc">Rata-rata, pencarian array, format Rupiah</span></div></a>
    </div>
</main>

<footer class="site-footer">
    Zeline Zahirah Zahrah Yasin &middot; 312510033<br>
</footer>
</body>
</html>
