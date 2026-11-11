<?php
require __DIR__ . '/includes/functions.php';
$judul = "Latihan 3 — Perulangan dan Array";
require __DIR__ . '/includes/header.php';

// Data awal + minimal tiga nama tambahan
$mahasiswa = ["Zeline", "Azerlia", "Morgan", "Mika"];
$mahasiswa[] = "Rion";
$mahasiswa[] = "Key";
$mahasiswa[] = "Elya";

echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . e($nama) . "</li>";
}
echo "</ol>";
echo "<p>Total: " . count($mahasiswa) . " mahasiswa</p>";

require __DIR__ . '/includes/footer.php';
