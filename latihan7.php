<?php
require __DIR__ . '/includes/functions.php';

// ---- Bagian pemrosesan ----
$error = null;
$subtotal = null;
$barang = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";

    if ($barang === ""
        || !is_numeric($hargaInput)
        || !ctype_digit((string)$jumlahInput)
        || (float)$hargaInput < 0
        || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}

// ---- Bagian tampilan ----
$judul = "Latihan 7 — Pengolahan Data Sederhana";
require __DIR__ . '/includes/header.php';
?>
<form method="POST">
    <label>Nama barang
        <input name="barang" value="<?= e($barang) ?>" required>
    </label>
    <label>Harga
        <input name="harga" type="number" min="0" step="0.01" required>
    </label>
    <label>Jumlah
        <input name="jumlah" type="number" min="1" step="1" required>
    </label>
    <button type="submit">Hitung</button>
</form>
<?php
if ($error !== null) {
    echo '<p class="error">' . e($error) . "</p>";
} elseif ($subtotal !== null) {
    echo '<div class="sukses">';
    echo "<p>Barang: " . e($barang) . "</p>";
    echo "<p>Jumlah: " . e((string)$jumlah) . "</p>";
    echo "<p>Subtotal: " . formatRupiah($subtotal) . "</p>";
    echo "</div>";
}
?>
<?php require __DIR__ . '/includes/footer.php'; ?>
