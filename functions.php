<?php
// Kumpulan function bantu (Latihan 4 & Eksperimen Mandiri 3)

/** Escape output agar aman ditampilkan di HTML. */
function e(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, "UTF-8");
}

/** Mengubah angka menjadi format Rupiah, contoh: Rp150.000 */
function formatRupiah($angka): string
{
    return "Rp" . number_format((float)$angka, 0, ",", ".");
}

/** Menghitung harga setelah diskon. */
function hitungDiskon(float $harga, float $persen): float
{
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

/** Menghitung luas persegi panjang. */
function hitungLuasPersegiPanjang(float $panjang, float $lebar): float
{
    return $panjang * $lebar;
}

/** Menentukan predikat berdasarkan nilai akhir. */
function tentukanPredikat(float $nilai): string
{
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    }
    return "D";
}

/** Menentukan status kelulusan (batas default 60). */
function tentukanKelulusan(float $nilai, float $batas = 60): string
{
    return $nilai >= $batas ? "Lulus" : "Tidak Lulus";
}

/** Menghitung nilai akhir berbobot: tugas 30%, UTS 30%, UAS 40%. */
function hitungNilaiAkhir(float $tugas, float $uts, float $uas): float
{
    return ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
}

/** Menghitung rata-rata dari sekumpulan nilai. */
function hitungRataRata(array $nilai): float
{
    return count($nilai) === 0 ? 0 : array_sum($nilai) / count($nilai);
}
