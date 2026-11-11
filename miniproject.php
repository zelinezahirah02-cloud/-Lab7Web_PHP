<?php
require __DIR__ . '/includes/functions.php';

// ================= PEMROSESAN DATA =================
$data = null;
$error = [];

// Nilai awal form (dipakai untuk mengisi ulang input)
$nama = $nim = $prodi = $email = "";
$semesterInput = "";

const SEMESTER_MIN = 1;
const SEMESTER_MAX = 14;
const NIM_MIN = 8;   // ketentuan panjang NIM: 8–12 digit
const NIM_MAX = 12;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";

    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) < NIM_MIN || strlen($nim) > NIM_MAX) {
        $error[] = "NIM harus berupa angka sepanjang " . NIM_MIN . "–" . NIM_MAX . " digit.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (!ctype_digit((string)$semesterInput)
        || (int)$semesterInput < SEMESTER_MIN
        || (int)$semesterInput > SEMESTER_MAX) {
        $error[] = "Semester harus berupa angka " . SEMESTER_MIN . "–" . SEMESTER_MAX . ".";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}

// ================= TAMPILAN =================
$judul = "Mini Project — Formulir Data Mahasiswa";
require __DIR__ . '/includes/header.php';
?>

<?php if ($error): ?>
    <div class="error">
        <strong>Terdapat kesalahan:</strong>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li><?= e($pesan) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($data): ?>
    <div class="sukses">
        <h3>Ringkasan Data Mahasiswa</h3>
        <table>
            <tr><th>Nama</th><td><?= e($data["nama"]) ?></td></tr>
            <tr><th>NIM</th><td><?= e($data["nim"]) ?></td></tr>
            <tr><th>Program Studi</th><td><?= e($data["prodi"]) ?></td></tr>
            <tr><th>Semester</th><td><?= e((string)$data["semester"]) ?></td></tr>
            <tr><th>Email</th><td><?= e($data["email"]) ?></td></tr>
        </table>
    </div>
<?php endif; ?>

<form method="POST" action="">
    <label>Nama
        <input name="nama" type="text" value="<?= e($nama) ?>" required>
    </label>
    <label>NIM
        <input name="nim" type="text" inputmode="numeric" value="<?= e($nim) ?>" required>
    </label>
    <label>Program Studi
        <input name="prodi" type="text" value="<?= e($prodi) ?>" required>
    </label>
    <label>Semester (<?= SEMESTER_MIN ?>–<?= SEMESTER_MAX ?>)
        <input name="semester" type="number" min="<?= SEMESTER_MIN ?>" max="<?= SEMESTER_MAX ?>" step="1" value="<?= e((string)$semesterInput) ?>" required>
    </label>
    <label>Email
        <input name="email" type="email" value="<?= e($email) ?>" required>
    </label>
    <div>
        <button type="submit">Kirim</button>
        <button type="reset">Reset (browser)</button>
        <a class="btn" href="miniproject.php">Kosongkan (muat ulang)</a>
    </div>
</form>
<?php require __DIR__ . '/includes/footer.php'; ?>
