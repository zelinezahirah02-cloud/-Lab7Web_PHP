<?php
require __DIR__ . '/includes/functions.php';
$judul = "Latihan 5 — Form GET";
require __DIR__ . '/includes/header.php';
?>
<form method="GET" action="">
    <label for="kata">Kata kunci:
        <input id="kata" name="kata" type="text">
    </label>
    <button type="submit">Cari</button>
</form>
<?php
if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    echo "Kata kunci: " . e($kata);
}
?>
<?php require __DIR__ . '/includes/footer.php'; ?>
