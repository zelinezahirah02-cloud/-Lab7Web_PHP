<?php
require __DIR__ . '/includes/functions.php';
$judul = "Latihan 4 — Function";
require __DIR__ . '/includes/header.php';

// Function dari modul
$hargaAkhir = hitungDiskon(150000, 10);
echo "<p>Harga setelah diskon: " . formatRupiah($hargaAkhir) . "</p>";

// Function tambahan: luas persegi panjang
echo "<p>Luas persegi panjang 8 x 4 = " . hitungLuasPersegiPanjang(8, 4) . "</p>";

// Function tambahan: kelulusan
foreach ([85, 60, 45] as $n) {
    echo "<p>Nilai $n: " . tentukanKelulusan($n) . "</p>";
}

require __DIR__ . '/includes/footer.php';
