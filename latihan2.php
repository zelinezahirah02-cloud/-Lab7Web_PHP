<?php
require __DIR__ . '/includes/functions.php';
$judul = "Latihan 2 — Variabel, Operator, Percabangan";
require __DIR__ . '/includes/header.php';

$nama = "Zeline Zahirah Zahrah Yasin";
$tugas = 85;
$uts = 78;
$uas = 90;
$nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);
$predikat = tentukanPredikat($nilaiAkhir);

?>
<div class="stats">
    <div class="stat"><span class="label">Nama</span><span class="value" style="font-size:1.05rem"><?= e($nama) ?></span></div>
    <div class="stat"><span class="label">Nilai akhir</span><span class="value"><?= number_format($nilaiAkhir, 2) ?></span></div>
    <div class="stat accent"><span class="label">Predikat</span><span class="value"><?= $predikat ?></span></div>
</div>
<?php

// Uji beberapa kombinasi nilai
$kasusUji = [
    ["Tugas" => 100, "UTS" => 90, "UAS" => 95],
    ["Tugas" => 80,  "UTS" => 70, "UAS" => 75],
    ["Tugas" => 65,  "UTS" => 60, "UAS" => 62],
    ["Tugas" => 40,  "UTS" => 50, "UAS" => 30],
];
?>
<h3>Uji Kombinasi Nilai</h3>
<table>
    <thead><tr><th>Tugas</th><th>UTS</th><th>UAS</th><th>Nilai Akhir</th><th>Predikat</th></tr></thead>
    <tbody>
    <?php foreach ($kasusUji as $k):
        $na = hitungNilaiAkhir($k["Tugas"], $k["UTS"], $k["UAS"]); ?>
        <tr>
            <td><?= $k["Tugas"] ?></td>
            <td><?= $k["UTS"] ?></td>
            <td><?= $k["UAS"] ?></td>
            <td><?= number_format($na, 2) ?></td>
            <td><?php $p = tentukanPredikat($na); ?><span class="badge badge-<?= $p ?>"><?= $p ?></span></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require __DIR__ . '/includes/footer.php'; ?>
