<?php
require __DIR__ . '/includes/functions.php';
$judul = "Eksperimen Mandiri (1–3)";
require __DIR__ . '/includes/header.php';

// ---- Eksperimen 1: rata-rata tiga komponen nilai ----
$komponen = ["Tugas" => 85, "UTS" => 78, "UAS" => 90];
$rataRata = hitungRataRata($komponen);
?>
<h2>1. Rata-rata Nilai</h2>
<ul>
    <?php foreach ($komponen as $nama => $nilai): ?>
        <li><?= e($nama) ?>: <?= $nilai ?></li>
    <?php endforeach; ?>
</ul>
<p>Rata-rata: <strong><?= number_format($rataRata, 2) ?></strong></p>

<?php
// ---- Eksperimen 2: GET mencari nama dari array ----
$daftarNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
$cari = trim($_GET["cari"] ?? "");
?>
<h2>2. Cari Nama (GET)</h2>
<form method="GET" action="">
    <label>Nama yang dicari
        <input name="cari" type="text" value="<?= e($cari) ?>">
    </label>
    <button type="submit">Cari</button>
</form>
<?php
if (isset($_GET["cari"])) {
    if ($cari === "") {
        echo '<p class="error">Masukkan kata kunci.</p>';
    } else {
        $hasil = array_filter($daftarNama, fn($n) => stripos($n, $cari) !== false);
        if ($hasil) {
            echo "<p>Ditemukan " . count($hasil) . " hasil untuk &ldquo;" . e($cari) . "&rdquo;:</p><ul>";
            foreach ($hasil as $n) echo "<li>" . e($n) . "</li>";
            echo "</ul>";
        } else {
            echo "<p>Tidak ada nama yang cocok dengan &ldquo;" . e($cari) . "&rdquo;.</p>";
        }
    }
}
?>

<h2>3. Format Harga ke Rupiah</h2>
<ul>
    <?php foreach ([1500, 150000, 2750000.5] as $h): ?>
        <li><?= $h ?> &rarr; <?= formatRupiah($h) ?></li>
    <?php endforeach; ?>
</ul>
<p><small>Eksperimen 4 (validasi NIM) dan 5 (tombol reset) ada di <a href="miniproject.php">Mini Project</a>.</small></p>
<?php require __DIR__ . '/includes/footer.php'; ?>
