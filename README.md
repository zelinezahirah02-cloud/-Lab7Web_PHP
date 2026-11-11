# Lab7Web_PHP — Praktikum 7: Pemrograman Server-Side dengan PHP

**Mata Kuliah:** Pemrograman Web  
**Nama:** _(Zeline Zahirah Zahrah Yasin)_  
**NIM:** _(312510033)_  
**Kelas:** _(I251A)_

## 1. Tujuan Praktikum
- Memahami perbedaan pemrosesan client-side dan server-side.
- Mengenali sintaks PHP dan menjalankan file PHP melalui server lokal.
- Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan function.
- Menerima dan memproses data form HTML dengan metode GET dan POST.
- Melakukan validasi dan sanitasi input dasar sebelum data ditampilkan atau diproses.
- Membangun aplikasi sederhana yang menerima, memproses, dan menampilkan data pengguna.

## 2. Perangkat yang Digunakan
| Perangkat | Keterangan |
|---|---|
| Laptop/PC | _(isi spesifikasi / OS)_ |
| Web browser | _(mis. Chrome versi ...)_ |
| Editor | Visual Studio Code |
| PHP | _(versi, mis. 8.2)_ |
| Server lokal | XAMPP / Laragon _(pilih salah satu)_ |

## 3. Cara Menjalankan Server Lokal
1. Instal XAMPP atau Laragon, lalu jalankan layanan **Apache** (dan PHP).
2. Salin folder proyek ini ke direktori web server:
   - XAMPP: `C:\xampp\htdocs\Lab7Web_PHP\`
3. Buka browser dan akses `http://localhost/Lab7Web_PHP/`.
4. **Jangan** membuka file PHP dengan klik ganda (`file://`), karena kode PHP tidak akan dieksekusi.

Alternatif tanpa XAMPP (butuh PHP terpasang): jalankan `php -S localhost:8000` di folder proyek, lalu buka `http://localhost:8000/`.

## 4. Struktur File
```
Lab7Web_PHP/
├── index.php            # Latihan 1 + menu navigasi
├── latihan2.php         # Variabel, operator, percabangan
├── latihan3.php         # Perulangan dan array
├── latihan4.php         # Function
├── latihan5.php         # Form GET
├── latihan6.php         # Form POST
├── latihan7.php         # Pengolahan data sederhana
├── miniproject.php      # Formulir Data Mahasiswa (+ Eksperimen 4 & 5)
├── eksperimen.php       # Eksperimen Mandiri 1–3
├── assets/
│   └── style.css        # Tema tampilan bersama (mode terang/gelap otomatis)
├── includes/
│   ├── functions.php    # Kumpulan function (e, formatRupiah, hitungDiskon, dll.)
│   ├── header.php       # Template header
│   └── footer.php       # Template footer
├── screenshots/         # Screenshot hasil (isi sendiri)
└── README.md
```

## 5. Ringkasan Hasil
| Latihan | File | Hasil Singkat |
|---|---|---|
| 1 | `index.php` | PHP berjalan di server; browser hanya menerima HTML, waktu server tampil. |
| 2 | `latihan2.php` | Nilai akhir berbobot (30/30/40) dan predikat A–D; diuji 4 kombinasi nilai. |
| 3 | `latihan3.php` | Daftar 7 mahasiswa ditampilkan dengan `foreach`. |
| 4 | `latihan4.php` | Function diskon, luas persegi panjang, kelulusan, dan format Rupiah. |
| 5 | `latihan5.php` | Kata kunci dikirim via URL (`?kata=...`) dan ditampilkan aman. |
| 6 | `latihan6.php` | Data POST divalidasi dan ditampilkan dengan `htmlspecialchars()`. |
| 7 | `latihan7.php` | Subtotal = harga × jumlah, dengan validasi server-side. |
| Mini Project | `miniproject.php` | Validasi nama, NIM, prodi, semester (1–14), dan email; ringkasan tampil jika valid. |
| Eksperimen | `eksperimen.php` | Rata-rata nilai, pencarian nama via GET, format Rupiah. |

## 6. Screenshot
<img width="959" height="506" alt="Screenshot 2026-11-11 034755" src="https://github.com/user-attachments/assets/7b3f929b-853c-43c8-939e-8dc032fd9618" />
<img width="957" height="504" alt="Screenshot 2026-11-11 034810" src="https://github.com/user-attachments/assets/d6e9c839-478b-43b2-b1f1-a73cefcf17fa" />
<img width="959" height="503" alt="Screenshot 2026-11-11 034829" src="https://github.com/user-attachments/assets/3899b320-7ff5-4114-a00c-6b0143dd7f9f" />
<img width="959" height="503" alt="Screenshot 2026-11-11 034843" src="https://github.com/user-attachments/assets/32f86b0e-52c2-4ed4-94fa-6f3c20a7b3ca" />
<img width="959" height="503" alt="Screenshot 2026-11-11 034859" src="https://github.com/user-attachments/assets/3349eb23-3c8f-4783-aa24-469f10f0c18f" />
<img width="959" height="501" alt="Screenshot 2026-11-11 034914" src="https://github.com/user-attachments/assets/43304091-a733-4263-91ec-b425bb47c2ab" />
<img width="958" height="501" alt="Screenshot 2026-11-11 034955" src="https://github.com/user-attachments/assets/761d07bc-6370-4267-b05b-471cb0e98eef" />
<img width="959" height="504" alt="Screenshot 2026-11-11 035044" src="https://github.com/user-attachments/assets/86be248a-b709-45d2-aef5-43d02a4932e9" />
<img width="959" height="503" alt="Screenshot 2026-11-11 035105" src="https://github.com/user-attachments/assets/02fd38c2-b99f-4ab5-9801-cc0cf71bbb44" />
<img width="958" height="503" alt="Screenshot 2026-11-11 035125" src="https://github.com/user-attachments/assets/2cf293a2-0e95-4e51-9b6a-2548384f9d16" />
<img width="959" height="502" alt="Screenshot 2026-11-11 035137" src="https://github.com/user-attachments/assets/5ea031f9-2400-4512-832f-829db3cb6f8a" />
<img width="959" height="504" alt="Screenshot 2026-11-11 035151" src="https://github.com/user-attachments/assets/4479ab25-fe56-434e-9656-0b081f0d8e79" />
<img width="959" height="505" alt="Screenshot 2026-11-11 035204" src="https://github.com/user-attachments/assets/9fef9182-1e99-4bbd-8ea7-a1cc4416a967" />

## 7. Kasus Uji Input (Mini Project)
### Input valid
| No | Nama | NIM | Prodi | Semester | Email | Hasil |
|---|---|---|---|---|---|---|
| 1 | Andi Pratama | 2023010001 | Teknik Informatika | 5 | andi@example.com | Ringkasan data tampil |
| 2 | Siti `<b>`Aminah | 202301002345 | Sistem Informasi | 14 | siti.a@kampus.ac.id | Ringkasan tampil; tag HTML di-escape (tidak dieksekusi) |

### Input tidak valid
| No | Nama | NIM | Prodi | Semester | Email | Hasil yang diharapkan |
|---|---|---|---|---|---|---|
| 1 | _(kosong/spasi)_ | 2023010001 | TI | 5 | andi@example.com | "Nama wajib diisi." |
| 2 | Budi | 12AB | TI | 0 | budi@ | NIM bukan angka/panjang salah, semester di luar 1–14, email tidak valid (semua pesan tampil) |

> Catatan: validasi HTML (`required`, `type="email"`) dapat dilewati, sehingga validasi PHP tetap menjadi pemeriksaan utama. Uji dengan DevTools atau `curl` untuk membuktikannya.

## 8. Eksperimen Mandiri
1. **Rata-rata nilai** — `eksperimen.php` bagian 1.
2. **GET dengan array data** — `eksperimen.php` bagian 2.
3. **Function format Rupiah** — `formatRupiah()` di `includes/functions.php`, dipakai di `eksperimen.php`.
4. **Validasi NIM** — `miniproject.php`: hanya angka, 8–12 digit (ketentuan yang ditetapkan).
5. **Tombol reset** — `miniproject.php`. `type="reset"` hanya mengembalikan isian ke nilai awal di browser tanpa permintaan ke server. Karena form mengisi ulang nilai dari POST sebelumnya, nilai awal itu adalah data yang baru dikirim. Tombol "Kosongkan" (link GET) membuat server memproses ulang halaman dengan data kosong.

## 9. Jawaban Pertanyaan Evaluasi
1. **Client-side vs server-side:** Client-side dijalankan di browser pengguna (HTML, CSS, JavaScript). Server-side dijalankan di server (menerima permintaan, memproses input, menerapkan aturan aplikasi, lalu mengirim respons). Browser menerima hasil (HTML), bukan kode PHP.
2. **Mengapa PHP harus lewat web server:** Browser tidak dapat mengeksekusi PHP. Web server dengan interpreter PHP yang menjalankan kode dan mengirim hasilnya. Jika dibuka dengan klik ganda, kode tampil sebagai teks mentah.
3. **Fungsi tanda `$`:** Penanda bahwa suatu identifier adalah variabel (mis. `$nama`).
4. **GET vs POST:** GET mengirim data lewat parameter URL, terlihat dan tersimpan di riwayat; cocok untuk permintaan yang tidak mengubah data (mis. pencarian). POST mengirim data di body permintaan, lazim untuk pengiriman form. POST bukan enkripsi; gunakan HTTPS untuk melindungi data.
5. **Validasi di server:** Validasi di browser (`required`, dll.) bisa dilewati atau dimanipulasi. Server tidak boleh memercayai input pengguna, sehingga pemeriksaan di server wajib demi keamanan dan integritas data.
6. **Fungsi `htmlspecialchars()`:** Mengubah karakter khusus HTML (`<`, `>`, `&`, `"`, `'`) menjadi entitas, sehingga input pengguna tampil sebagai teks biasa dan mengurangi risiko injeksi HTML/script (XSS).
7. **Manfaat function:** Kode dapat dipakai ulang, lebih rapi dan mudah dibaca, mudah diuji dan dirawat (perubahan cukup di satu tempat), serta mengurangi duplikasi.
