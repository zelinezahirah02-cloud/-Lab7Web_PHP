<?php
require __DIR__ . '/includes/functions.php';
$judul = "Latihan 6 — Form POST";
require __DIR__ . '/includes/header.php';
?>
<form method="POST" action="">
    <label for="nama">Nama:
        <input id="nama" name="nama" type="text" required>
    </label>
    <label for="prodi">Program Studi:
        <input id="prodi" name="prodi" type="text" required>
    </label>
    <button type="submit" name="kirim">Kirim Data</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");

    if ($nama === "" || $prodi === "") {
        echo '<p class="error">Semua kolom wajib diisi.</p>';
    } else {
        echo '<div class="sukses">';
        echo "<h3>Data diterima</h3>";
        echo "Nama: " . e($nama) . "<br>";
        echo "Program Studi: " . e($prodi);
        echo "</div>";
    }
}
?>
<?php require __DIR__ . '/includes/footer.php'; ?>
