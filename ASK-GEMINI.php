Saya ingin membuat aplikasi sederhana dan simpel untuk Pencatatan Barang Gudang, mencakup Stok Barang, Barang Masuk, Barang Keluar yang mampu menghasilkan Laporan dan Analisa. Saya tidak membutuhkan harga pada aplikasi. Barang di gudang memiliki 2 kategori yaitu Perkakas dan Bahan. Saya ingin semua transaksi tercatat dan ada laporan dalam format excel. Saya ingin aplikasinya berbasis web dengan tampilan responsive.



Baik, ide aplikasi pencatatan barang gudang berbasis web ini sangat bagus dan fungsional! Berikut adalah kerangka dan fitur-fitur yang bisa Anda pertimbangkan untuk aplikasi sederhana dan responsif ini:

Konsep Aplikasi Pencatatan Barang Gudang
Aplikasi ini akan fokus pada pengelolaan inventaris gudang Anda dengan fitur inti untuk mencatat pergerakan barang, memantau stok, dan menghasilkan laporan. Karena Anda tidak membutuhkan fitur harga dan menginginkan laporan dalam format Excel, aplikasi ini bisa dibuat cukup ringkas namun efektif.

Fitur Utama yang Direkomendasikan
Manajemen Master Barang:
Daftar Barang: Halaman untuk melihat semua barang yang ada di gudang. Setiap barang memiliki nama, kategori (Perkakas/Bahan), dan stok saat ini.
Tambah/Edit Barang: Fungsionalitas untuk menambahkan barang baru atau mengubah detail barang yang sudah ada.
Pencarian & Filter: Kemampuan untuk mencari barang berdasarkan nama atau memfilter berdasarkan kategori.
Transaksi Barang:
Barang Masuk:
Formulir untuk mencatat barang yang masuk ke gudang.
Informasi yang dicatat: Tanggal Masuk, Nama Barang, Kategori Barang, Jumlah Masuk, dan Keterangan (opsional, misal: dari pemasok mana).
Secara otomatis memperbarui stok barang yang bersangkutan.
Barang Keluar:
Formulir untuk mencatat barang yang keluar dari gudang.
Informasi yang dicatat: Tanggal Keluar, Nama Barang, Kategori Barang, Jumlah Keluar, dan Keterangan (opsional, misal: untuk proyek apa, siapa yang mengambil).
Secara otomatis mengurangi stok barang yang bersangkutan.
Validasi stok: Mencegah barang keluar melebihi stok yang tersedia.
Laporan & Analisa Sederhana:
Laporan Stok Barang:
Menampilkan daftar semua barang beserta stoknya saat ini.
Dapat difilter berdasarkan kategori.
Ekspor ke Excel: Tombol untuk mengunduh laporan stok dalam format .xlsx.
Laporan Transaksi (Barang Masuk/Keluar):
Menampilkan riwayat semua transaksi barang masuk dan keluar.
Dapat difilter berdasarkan rentang tanggal, jenis transaksi (masuk/keluar), atau nama barang.
Ekspor ke Excel: Tombol untuk mengunduh laporan transaksi dalam format .xlsx.
Analisa Sederhana (Opsional):
Grafik Ringkasan Stok: Diagram batang sederhana yang menunjukkan proporsi stok Perkakas dan Bahan.
Grafik Pergerakan Barang: Grafik garis sederhana yang menunjukkan tren barang masuk dan keluar selama periode tertentu (misal: bulanan).
Manajemen Pengguna (Opsional, untuk keamanan):
Login/Logout: Sistem otentikasi sederhana untuk memastikan hanya pengguna yang berwenang yang dapat mengakses aplikasi.
Manajemen User: Menambah/mengubah/menghapus akun pengguna (jika diperlukan lebih dari satu pengguna).
Tampilan Responsif:
Desain antarmuka pengguna yang adaptif, sehingga aplikasi nyaman digunakan di berbagai perangkat (desktop, tablet, smartphone).
Teknologi yang Bisa Digunakan
Untuk aplikasi web responsif dengan fitur yang Anda sebutkan, beberapa kombinasi teknologi yang populer dan powerful adalah:

Frontend (Tampilan):
HTML, CSS, JavaScript: Dasar dari setiap aplikasi web.
Framework UI (Contoh):
Bootstrap: Sangat direkomendasikan untuk membuat tampilan responsif dengan cepat dan mudah. Menyediakan komponen UI siap pakai.
Tailwind CSS: Jika Anda menginginkan kontrol desain yang lebih granular dan pendekatan utility-first.
React/Vue/Angular: Jika Anda ingin aplikasi yang lebih dinamis dan kompleks di masa depan, tetapi mungkin sedikit overkill untuk aplikasi sangat sederhana ini. Untuk permulaan, Bootstrap dengan JavaScript murni sudah sangat cukup.
Backend (Logika & Database):
Bahasa Pemrograman (Contoh):
Python (dengan Flask/Django): Sangat populer, mudah dipelajari, dan banyak library untuk mengelola data dan membuat API. Flask lebih ringan untuk aplikasi sederhana.
Node.js (dengan Express.js): Berbasis JavaScript, cocok jika Anda ingin menggunakan satu bahasa di frontend dan backend.
PHP (dengan Laravel/CodeIgniter): Pilihan tradisional untuk pengembangan web, banyak resource dan komunitasnya besar.
Database (Contoh):
SQLite: Sangat cocok untuk aplikasi sederhana karena berbasis file dan tidak memerlukan konfigurasi server terpisah. Mudah untuk development dan testing.
MySQL/PostgreSQL: Jika Anda berencana untuk skala yang lebih besar di masa depan.
Untuk Ekspor Excel:
Library seperti openpyxl (Python), exceljs (Node.js), atau PHPExcel/PhpSpreadsheet (PHP) dapat digunakan di sisi backend untuk menghasilkan file Excel dari data.
Alur Kerja Sederhana
Pengguna Masuk (Opsional): Jika ada manajemen pengguna.
Dashboard: Menampilkan ringkasan stok, mungkin grafik sederhana.
Halaman Barang: Mengelola master data barang (tambah, edit, lihat daftar).
Halaman Transaksi:
Tombol "Barang Masuk" akan menampilkan formulir untuk input data barang masuk.
Tombol "Barang Keluar" akan menampilkan formulir untuk input data barang keluar.
Halaman Laporan:
Memilih jenis laporan (Stok/Transaksi).
Memilih filter (tanggal, kategori).
Menampilkan data dan tombol "Ekspor ke Excel".
Langkah Selanjutnya
Untuk memulai, Anda bisa menentukan teknologi backend mana yang paling Anda minati atau kuasai. Setelah itu, fokus pada pembuatan database sederhana untuk menyimpan data barang dan transaksi, kemudian kembangkan antarmuka pengguna untuk input dan melihat data.

Apakah ada bagian tertentu dari aplikasi ini yang ingin Anda diskusikan lebih lanjut, misalnya tentang detail teknis database atau tampilan antarmuka?





Saya memiliki 20 karyawan, dan saya ingin barang yang keluar juga tercatat karyawan yang menggunakannya. Untuk barang jenis perkakas, sifatnya Dipinjam, jadi harus dikembalikan, sedangkan untuk barang jenis Bahan adalah barang habis pakai, tidak perlu dikembalikan. Saya ingin ada catatan peminjaman barang oleh karyawan.



Baik, saya mengerti. Saya akan menambahkan fitur pencatatan karyawan dan detail peminjaman/penggunaan barang ke dalam konsep aplikasi Anda. Berikut adalah penyesuaiannya:

Manajemen Karyawan:
Tambahkan modul untuk mengelola daftar karyawan (nama, ID karyawan, dll.).
Transaksi Barang Keluar yang Ditingkatkan:
Saat mencatat barang keluar, tambahkan pilihan untuk memilih karyawan yang menggunakan barang tersebut.
Untuk barang jenis "Perkakas," tambahkan status "Dipinjam" dan tanggal jatuh tempo pengembalian.
Untuk barang jenis "Bahan," tidak ada catatan pengembalian.
Laporan Peminjaman (Khusus Perkakas):
Laporan yang menampilkan daftar perkakas yang sedang dipinjam, siapa yang meminjam, dan tanggal jatuh tempo pengembalian.
Status: Dipinjam/Dikembalikan
Notifikasi (Opsional):
Sistem pengingat untuk perkakas yang mendekati atau melewati tanggal jatuh tempo pengembalian.
Dengan penambahan ini, Anda dapat melacak siapa yang menggunakan barang, terutama perkakas, dan memastikan pengembalian yang tepat waktu. Apakah ada detail lain yang ingin Anda tambahkan?





Ok, saya adalah pemula, saya sangat suka dengan yang kamu uraikan mengenai konsep aplikasi di atas. Selanjutnya saya memilih menggunakan HTML, PHP, MySQL, dan Bootstrap, serta untuk tahap awal saya akan menggunakan XAMPP sebagai web server. Selanjutnya mohon dibuatkan langkah-langkah yang harus saya lakukan beserta konfigurasi untuk masing-masing komponen.



Fantastis! Pilihan HTML, PHP, MySQL, dan Bootstrap adalah kombinasi yang sangat bagus untuk pemula. Ini adalah tumpukan teknologi yang sudah teruji, banyak sumber daya, dan komunitasnya besar. Menggunakan XAMPP juga merupakan langkah yang tepat untuk memulai pengembangan di lingkungan lokal Anda.

Mari kita susun langkah-langkah yang harus Anda lakukan, lengkap dengan konfigurasi dasar untuk setiap komponennya.

Langkah-Langkah Awal Pembuatan Aplikasi Pencatatan Barang Gudang
1. Instalasi dan Konfigurasi XAMPP
XAMPP (Apache, MySQL, PHP, Perl) adalah lingkungan server lokal yang akan memungkinkan Anda menjalankan kode PHP dan mengelola database MySQL di komputer Anda.

Unduh XAMPP:
Kunjungi situs resmi Apache Friends: https://www.apachefriends.org/index.html
Unduh versi XAMPP yang sesuai dengan sistem operasi Anda (Windows, macOS, Linux).
Instalasi XAMPP:
Jalankan installer yang telah Anda unduh.
Ikuti langkah-langkah instalasi. Biasanya, Anda bisa memilih pengaturan default.
Penting: Perhatikan lokasi instalasi XAMPP, biasanya di C:\xampp (untuk Windows). Folder htdocs di dalam folder instalasi XAMPP (C:\xampp\htdocs) adalah tempat Anda akan meletakkan semua file proyek PHP Anda.
Mulai XAMPP Control Panel:
Setelah instalasi selesai, cari dan jalankan XAMPP Control Panel.
Di Control Panel, klik tombol "Start" di samping Apache (untuk web server) dan MySQL (untuk database).
Pastikan statusnya berubah menjadi warna hijau, menandakan bahwa keduanya berjalan dengan sukses. Jika ada masalah (misalnya port bentrok), Anda mungkin perlu mengubah port Apache atau MySQL di konfigurasi, tetapi untuk permulaan, defaultnya harusnya berfungsi.
2. Persiapan Database MySQL
Anda akan menggunakan phpMyAdmin yang sudah terintegrasi dengan XAMPP untuk mengelola database.

Akses phpMyAdmin:
Pastikan Apache dan MySQL berjalan di XAMPP Control Panel.
Buka browser web Anda dan ketik URL ini: http://localhost/phpmyadmin/
Buat Database Baru:
Di phpMyAdmin, di panel kiri, klik pada "New" atau "Databases".
Masukkan nama database Anda, contohnya: db_gudang.
Pilih collation utf8mb4_general_ci (ini adalah praktik yang baik untuk mendukung berbagai karakter).
Klik tombol "Create".
Buat Tabel-Tabel Database:
Setelah database db_gudang terbuat, klik pada nama database tersebut di panel kiri.

Sekarang Anda akan membuat tabel-tabel sesuai kebutuhan aplikasi. Berikut adalah struktur dasar tabel yang bisa Anda buat:

Tabel karyawan: Untuk menyimpan data karyawan

SQL

CREATE TABLE karyawan (
    id_karyawan INT AUTO_INCREMENT PRIMARY KEY,
    nama_karyawan VARCHAR(100) NOT NULL UNIQUE
);
Tabel barang: Untuk menyimpan data master barang

SQL

CREATE TABLE barang (
    id_barang INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(100) NOT NULL UNIQUE,
    kategori ENUM('Perkakas', 'Bahan') NOT NULL,
    stok INT DEFAULT 0
);
Tabel transaksi: Untuk mencatat semua pergerakan barang (masuk/keluar)

SQL

CREATE TABLE transaksi (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    tanggal_transaksi DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_barang INT NOT NULL,
    jenis_transaksi ENUM('Masuk', 'Keluar') NOT NULL,
    jumlah INT NOT NULL,
    keterangan TEXT,
    id_karyawan INT NULL, -- NULLable, karena barang masuk mungkin tidak terkait karyawan
    FOREIGN KEY (id_barang) REFERENCES barang(id_barang),
    FOREIGN KEY (id_karyawan) REFERENCES karyawan(id_karyawan)
);
Tabel peminjaman: Khusus untuk perkakas yang dipinjam

SQL

CREATE TABLE peminjaman (
    id_peminjaman INT AUTO_INCREMENT PRIMARY KEY,
    id_transaksi_keluar INT NOT NULL, -- Merujuk ke transaksi barang keluar yang terkait peminjaman
    id_barang INT NOT NULL,
    id_karyawan INT NOT NULL,
    tanggal_pinjam DATETIME DEFAULT CURRENT_TIMESTAMP,
    tanggal_kembali DATETIME NULL, -- Akan diisi saat barang dikembalikan
    status_peminjaman ENUM('Dipinjam', 'Dikembalikan') DEFAULT 'Dipinjam',
    catatan TEXT,
    FOREIGN KEY (id_transaksi_keluar) REFERENCES transaksi(id_transaksi),
    FOREIGN KEY (id_barang) REFERENCES barang(id_barang),
    FOREIGN KEY (id_karyawan) REFERENCES karyawan(id_karyawan)
);
Cara Membuat Tabel:

Di phpMyAdmin, setelah memilih db_gudang, klik tab "SQL".
Copy-paste satu per satu kode CREATE TABLE di atas ke dalam editor SQL, lalu klik "Go" atau "Run" untuk membuat setiap tabel. Ulangi untuk semua tabel.
3. Struktur Folder Proyek Aplikasi
Buat folder untuk proyek Anda di dalam htdocs XAMPP.

Buka folder C:\xampp\htdocs (atau lokasi instalasi XAMPP Anda).

Buat folder baru, contohnya: gudang_app.

Di dalam folder gudang_app, Anda bisa membuat struktur folder dasar seperti ini:

gudang_app/
├── css/               (untuk file CSS kustom Anda)
│   └── style.css
├── js/                (untuk file JavaScript kustom Anda)
│   └── script.js
├── includes/          (untuk file PHP yang di-include, seperti koneksi database)
│   └── koneksi.php
├── assets/            (opsional, untuk gambar, font, dll.)
├── index.php          (halaman utama/dashboard)
├── barang.php         (halaman untuk manajemen barang)
├── transaksi.php      (halaman untuk input transaksi masuk/keluar)
├── karyawan.php       (halaman untuk manajemen karyawan)
├── laporan_stok.php   (halaman untuk laporan stok)
├── laporan_transaksi.php (halaman untuk laporan transaksi)
├── laporan_peminjaman.php (halaman untuk laporan peminjaman)
└── logout.php         (jika ada sistem login)
4. File Koneksi Database (PHP)
Buat file koneksi ke database Anda.

Di dalam folder gudang_app/includes/, buat file baru bernama koneksi.php.

Isi dengan kode berikut:

PHP

<?php
$host = "localhost"; // Biasanya localhost
$user = "root";      // Default username XAMPP
$pass = "";          // Default password XAMPP (kosong)
$db = "db_gudang";   // Nama database yang Anda buat

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// echo "Koneksi database berhasil!"; // Anda bisa menghapus baris ini setelah testing
?>
Simpan file ini. Ini akan menjadi file yang Anda include di setiap halaman PHP yang membutuhkan akses ke database.

5. Integrasi Bootstrap (Untuk Tampilan Responsif)
Bootstrap akan sangat membantu Anda membuat tampilan yang responsif tanpa perlu menulis banyak CSS dari awal.

Cara Paling Mudah (CDN):
Buka browser dan kunjungi situs Bootstrap: https://getbootstrap.com/

Cari bagian "Introduction" atau "Quick start" untuk mendapatkan CDN (Content Delivery Network) link.

Biasanya Anda akan menemukan dua link utama: satu untuk CSS dan satu untuk JavaScript (bundle dengan Popper.js).

Contoh HTML (struktur dasar dengan Bootstrap CDN):
Buat file index.php di dalam folder gudang_app.

PHP

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Gudang Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Gudang App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="barang.php">Master Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="karyawan.php">Master Karyawan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTransaksi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transaksi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownTransaksi">
                            <li><a class="dropdown-item" href="transaksi.php?jenis=masuk">Barang Masuk</a></li>
                            <li><a class="dropdown-item" href="transaksi.php?jenis=keluar">Barang Keluar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLaporan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Laporan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLaporan">
                            <li><a class="dropdown-item" href="laporan_stok.php">Laporan Stok</a></li>
                            <li><a class="dropdown-item" href="laporan_transaksi.php">Laporan Transaksi</a></li>
                            <li><a class="dropdown-item" href="laporan_peminjaman.php">Laporan Peminjaman</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Selamat Datang di Aplikasi Gudang!</h1>
        <p>Ini adalah halaman utama Anda.</p>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eJzUHsJ7wIe0j" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
Simpan file ini sebagai index.php di dalam folder gudang_app.
Anda bisa mengaksesnya di browser dengan http://localhost/gudang_app/index.php atau cukup http://localhost/gudang_app/.
6. Mulai Mengembangkan Halaman PHP
Setelah semua setup dasar, Anda bisa mulai membangun setiap halaman:

barang.php:
Halaman ini akan menampilkan tabel daftar barang dari database.
Formulir untuk menambah barang baru (nama barang, kategori).
Logika PHP untuk menyimpan data ke tabel barang dan memperbarui stok.
Logika untuk mengedit dan menghapus barang.
karyawan.php:
Mirip dengan barang.php, untuk mengelola daftar karyawan.
Formulir untuk menambah karyawan baru (nama karyawan).
transaksi.php:
Ini akan menjadi halaman yang sedikit lebih kompleks.
Formulir untuk Barang Masuk: Pilih barang, masukkan jumlah.
Formulir untuk Barang Keluar: Pilih barang, masukkan jumlah, pilih karyawan.
Jika kategori barang adalah "Perkakas", tampilkan input untuk tanggal_kembali (opsional, bisa juga default seminggu dari sekarang) dan status_peminjaman.
Jika "Bahan", tidak perlu input tambahan.
Logika PHP untuk memperbarui stok di tabel barang berdasarkan jenis transaksi.
Logika untuk memasukkan data ke tabel transaksi.
Logika untuk memasukkan data ke tabel peminjaman jika itu adalah perkakas yang keluar.
Halaman Laporan (laporan_stok.php, laporan_transaksi.php, laporan_peminjaman.php):
Ambil data dari database menggunakan query PHP.
Tampilkan dalam tabel HTML.
Tambahkan tombol "Ekspor ke Excel". Untuk ini, Anda memerlukan library PHP pihak ketiga yang dapat membaca/menulis file Excel, contohnya PhpSpreadsheet. Anda bisa menginstalnya menggunakan Composer (ini langkah selanjutnya jika Anda sudah nyaman dengan PHP dasar). Namun, untuk permulaan, Anda bisa membuat laporan HTML dasar dulu.
Catatan tentang Ekspor Excel: Ini adalah bagian yang akan sedikit lebih menantang bagi pemula. Untuk membuat file Excel dengan PHP, Anda akan membutuhkan library seperti PhpSpreadsheet. Penggunaannya melibatkan menulis kode PHP yang memanipulasi objek spreadsheet dan kemudian mengirimkan header HTTP yang tepat agar browser mengunduhnya sebagai file Excel. Untuk langkah awal, fokuslah pada menampilkan laporan di tabel HTML.
Tips untuk Pemula:

Mulai dari yang Paling Sederhana: Jangan mencoba membuat semua fitur sekaligus. Mulai dengan membuat halaman barang.php yang bisa menampilkan, menambah, dan mengedit barang. Setelah itu, baru ke karyawan.php, lalu transaksi.php, dan terakhir laporan.
Gunakan Template: Gunakan struktur HTML index.php di atas sebagai template untuk halaman-halaman PHP Anda yang lain agar konsisten. Anda bisa membuat file header.php dan footer.php yang berisi bagian head dan navigasi, lalu include di setiap halaman.
Debugging: Jika ada error, XAMPP akan menampilkan error PHP di browser. Baca pesan errornya dengan teliti, itu akan banyak membantu Anda.
Sumber Daya: Gunakan Google, Stack Overflow, dan dokumentasi resmi PHP, MySQL, dan Bootstrap jika Anda menemui kendala. Ada banyak tutorial online yang bisa Anda ikuti.
Ini adalah peta jalan yang komprehensif untuk memulai proyek Anda. Ingat, proses belajar adalah bertahap. Jangan ragu untuk bertanya jika Anda menemui kesulitan di salah satu langkahnya! Apakah ada pertanyaan spesifik tentang salah satu tahapan ini yang ingin Anda gali lebih dalam?


Sumber




Ok, tolong buatkan masing-masing isi file barang.php, karyawan.php, transaksi.php, laporan_stok.php, laporan_transaksi.php, laporan_peminjaman.php, serta file-file lain yang dibutuhkan.



Oke, ini dia kerangka kode untuk setiap file PHP yang Anda butuhkan, lengkap dengan struktur dasar HTML, integrasi Bootstrap, dan logika PHP untuk CRUD (Create, Read, Update, Delete) sederhana serta logika laporan.

Kita akan menggunakan pendekatan modular dengan header.php dan footer.php agar kode tidak berulang dan lebih mudah dikelola.

1. Struktur Folder Proyek
Pastikan struktur folder Anda seperti ini di dalam htdocs/gudang_app/:

gudang_app/
├── css/
│   └── style.css
├── js/
│   └── script.js
├── includes/
│   ├── koneksi.php
│   ├── header.php
│   └── footer.php
├── index.php
├── barang.php
├── karyawan.php
├── transaksi.php
├── laporan_stok.php
├── laporan_transaksi.php
├── laporan_peminjaman.php
└── proses_barang.php        (untuk menangani tambah/edit/hapus barang)
└── proses_karyawan.php      (untuk menangani tambah/edit/hapus karyawan)
└── proses_transaksi.php     (untuk menangani barang masuk/keluar)
└── proses_kembali_peminjaman.php (untuk menangani pengembalian perkakas)
2. File includes/koneksi.php
File ini sudah Anda buat sebelumnya. Pastikan isinya seperti ini:

PHP

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_gudang";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
3. File includes/header.php
File ini akan berisi bagian <head> HTML dan navigasi (navbar) Bootstrap.

PHP

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Gudang Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Gudang App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="barang.php"><i class="fas fa-box"></i> Master Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="karyawan.php"><i class="fas fa-users"></i> Master Karyawan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTransaksi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-exchange-alt"></i> Transaksi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownTransaksi">
                        <li><a class="dropdown-item" href="transaksi.php?jenis=masuk">Barang Masuk</a></li>
                        <li><a class="dropdown-item" href="transaksi.php?jenis=keluar">Barang Keluar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLaporan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-file-alt"></i> Laporan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownLaporan">
                        <li><a class="dropdown-item" href="laporan_stok.php">Laporan Stok</a></li>
                        <li><a class="dropdown-item" href="laporan_transaksi.php">Laporan Transaksi</a></li>
                        <li><a class="dropdown-item" href="laporan_peminjaman.php">Laporan Peminjaman</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
4. File includes/footer.php
File ini akan berisi penutup </div>, </body>, dan tag JavaScript Bootstrap.

PHP

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eJzUHsJ7wIe0j" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
5. File index.php (Halaman Dashboard)
Halaman utama yang menampilkan ringkasan.

PHP

<?php
include 'includes/koneksi.php';
include 'includes/header.php';

// Ambil data statistik sederhana (opsional)
$total_barang_query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM barang");
$total_barang = mysqli_fetch_assoc($total_barang_query)['total'];

$total_karyawan_query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM karyawan");
$total_karyawan = mysqli_fetch_assoc($total_karyawan_query)['total'];

$stok_perkakas_query = mysqli_query($koneksi, "SELECT SUM(stok) AS total_stok FROM barang WHERE kategori = 'Perkakas'");
$stok_perkakas = mysqli_fetch_assoc($stok_perkakas_query)['total_stok'] ?: 0;

$stok_bahan_query = mysqli_query($koneksi, "SELECT SUM(stok) AS total_stok FROM barang WHERE kategori = 'Bahan'");
$stok_bahan = mysqli_fetch_assoc($stok_bahan_query)['total_stok'] ?: 0;

?>

<h1 class="mb-4">Dashboard Gudang</h1>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-box"></i> Total Jenis Barang</h5>
                <p class="card-text fs-2"><?php echo $total_barang; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-users"></i> Total Karyawan</h5>
                <p class="card-text fs-2"><?php echo $total_karyawan; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-tools"></i> Stok Perkakas</h5>
                <p class="card-text fs-2"><?php echo $stok_perkakas; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-flask"></i> Stok Bahan</h5>
                <p class="card-text fs-2"><?php echo $stok_bahan; ?></p>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
6. File barang.php (Manajemen Master Barang)
Menampilkan daftar barang, form tambah/edit, dan tombol hapus.

PHP

<?php
include 'includes/koneksi.php';
include 'includes/header.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id_barang = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$nama_barang = '';
$kategori = '';

if ($action == 'edit' && $id_barang > 0) {
    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = $id_barang");
    if ($data = mysqli_fetch_assoc($query)) {
        $nama_barang = $data['nama_barang'];
        $kategori = $data['kategori'];
    } else {
        echo "<div class='alert alert-danger'>Barang tidak ditemukan.</div>";
        $action = ''; // Reset action jika tidak ditemukan
    }
}
?>

<h1 class="mb-4"><i class="fas fa-box"></i> Master Barang</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        <?php echo ($action == 'edit' ? 'Edit' : 'Tambah') ?> Barang
    </div>
    <div class="card-body">
        <form action="proses_barang.php" method="POST">
            <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
            <input type="hidden" name="action" value="<?php echo ($action == 'edit' ? 'update' : 'add'); ?>">

            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo htmlspecialchars($nama_barang); ?>" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Perkakas" <?php echo ($kategori == 'Perkakas' ? 'selected' : ''); ?>>Perkakas</option>
                    <option value="Bahan" <?php echo ($kategori == 'Bahan' ? 'selected' : ''); ?>>Bahan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            <?php if ($action == 'edit'): ?>
                <a href="barang.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Batal Edit</a>
            <?php endif; ?>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Daftar Barang
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query_barang = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY nama_barang ASC");
                    if (mysqli_num_rows($query_barang) > 0) {
                        while ($data = mysqli_fetch_assoc($query_barang)) {
                            echo "<tr>";
                            echo "<td>" . $data['id_barang'] . "</td>";
                            echo "<td>" . htmlspecialchars($data['nama_barang']) . "</td>";
                            echo "<td>" . htmlspecialchars($data['kategori']) . "</td>";
                            echo "<td>" . $data['stok'] . "</td>";
                            echo "<td>";
                            echo "<a href='barang.php?action=edit&id=" . $data['id_barang'] . "' class='btn btn-warning btn-sm me-1'><i class='fas fa-edit'></i> Edit</a>";
                            echo "<a href='proses_barang.php?action=delete&id=" . $data['id_barang'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus barang ini? Stok juga akan dihapus.');\"><i class='fas fa-trash'></i> Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>Tidak ada data barang.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
7. File proses_barang.php (Logika CRUD Barang)
File ini akan memproses data dari form barang.php.

PHP

<?php
session_start(); // Mulai session untuk pesan notifikasi
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $id_barang = isset($_POST['id_barang']) ? (int)$_POST['id_barang'] : 0;
    $nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);

    if ($action == 'add') {
        // Cek duplikasi nama barang
        $check_query = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang = '$nama_barang'");
        if (mysqli_num_rows($check_query) > 0) {
            $_SESSION['message'] = "Nama barang sudah ada.";
            $_SESSION['message_type'] = "danger";
        } else {
            $query = "INSERT INTO barang (nama_barang, kategori, stok) VALUES ('$nama_barang', '$kategori', 0)";
            if (mysqli_query($koneksi, $query)) {
                $_SESSION['message'] = "Barang berhasil ditambahkan!";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
                $_SESSION['message_type'] = "danger";
            }
        }
    } elseif ($action == 'update') {
        $query = "UPDATE barang SET nama_barang = '$nama_barang', kategori = '$kategori' WHERE id_barang = $id_barang";
        if (mysqli_query($koneksi, $query)) {
            $_SESSION['message'] = "Barang berhasil diperbarui!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
            $_SESSION['message_type'] = "danger";
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id_barang = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Hapus transaksi terkait (penting untuk integrity referential)
    // Atau bisa juga atur foreign key di DB menjadi ON DELETE CASCADE
    // Untuk sederhana, kita hapus manual transaksi & peminjaman yang terkait.
    // NOTE: Ini bisa rumit jika data transaksi sudah banyak. Untuk aplikasi sederhana, ini cukup.
    // Jika ada peminjaman terkait, hapus dulu
    $query_del_peminjaman = "DELETE FROM peminjaman WHERE id_barang = $id_barang";
    mysqli_query($koneksi, $query_del_peminjaman);

    // Hapus transaksi terkait
    $query_del_transaksi = "DELETE FROM transaksi WHERE id_barang = $id_barang";
    mysqli_query($koneksi, $query_del_transaksi);

    // Baru hapus barang
    $query = "DELETE FROM barang WHERE id_barang = $id_barang";
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['message'] = "Barang berhasil dihapus!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error menghapus barang: " . mysqli_error($koneksi);
        $_SESSION['message_type'] = "danger";
    }
}

mysqli_close($koneksi);
header("Location: barang.php"); // Redirect kembali ke halaman master barang
exit();
?>
8. File karyawan.php (Manajemen Master Karyawan)
Mirip dengan barang.php untuk manajemen karyawan.

PHP

<?php
session_start(); // Mulai session untuk pesan notifikasi
include 'includes/koneksi.php';
include 'includes/header.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id_karyawan = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$nama_karyawan = '';

if ($action == 'edit' && $id_karyawan > 0) {
    $query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan = $id_karyawan");
    if ($data = mysqli_fetch_assoc($query)) {
        $nama_karyawan = $data['nama_karyawan'];
    } else {
        echo "<div class='alert alert-danger'>Karyawan tidak ditemukan.</div>";
        $action = '';
    }
}
?>

<h1 class="mb-4"><i class="fas fa-users"></i> Master Karyawan</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        <?php echo ($action == 'edit' ? 'Edit' : 'Tambah') ?> Karyawan
    </div>
    <div class="card-body">
        <form action="proses_karyawan.php" method="POST">
            <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>">
            <input type="hidden" name="action" value="<?php echo ($action == 'edit' ? 'update' : 'add'); ?>">

            <div class="mb-3">
                <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?php echo htmlspecialchars($nama_karyawan); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            <?php if ($action == 'edit'): ?>
                <a href="karyawan.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Batal Edit</a>
            <?php endif; ?>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Daftar Karyawan
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Karyawan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nama_karyawan ASC");
                    if (mysqli_num_rows($query_karyawan) > 0) {
                        while ($data = mysqli_fetch_assoc($query_karyawan)) {
                            echo "<tr>";
                            echo "<td>" . $data['id_karyawan'] . "</td>";
                            echo "<td>" . htmlspecialchars($data['nama_karyawan']) . "</td>";
                            echo "<td>";
                            echo "<a href='karyawan.php?action=edit&id=" . $data['id_karyawan'] . "' class='btn btn-warning btn-sm me-1'><i class='fas fa-edit'></i> Edit</a>";
                            echo "<a href='proses_karyawan.php?action=delete&id=" . $data['id_karyawan'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus karyawan ini? Peminjaman terkait juga akan dihapus.');\"><i class='fas fa-trash'></i> Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3' class='text-center'>Tidak ada data karyawan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
9. File proses_karyawan.php (Logika CRUD Karyawan)
PHP

<?php
session_start();
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $id_karyawan = isset($_POST['id_karyawan']) ? (int)$_POST['id_karyawan'] : 0;
    $nama_karyawan = mysqli_real_escape_string($koneksi, $_POST['nama_karyawan']);

    if ($action == 'add') {
        // Cek duplikasi nama karyawan
        $check_query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nama_karyawan = '$nama_karyawan'");
        if (mysqli_num_rows($check_query) > 0) {
            $_SESSION['message'] = "Nama karyawan sudah ada.";
            $_SESSION['message_type'] = "danger";
        } else {
            $query = "INSERT INTO karyawan (nama_karyawan) VALUES ('$nama_karyawan')";
            if (mysqli_query($koneksi, $query)) {
                $_SESSION['message'] = "Karyawan berhasil ditambahkan!";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
                $_SESSION['message_type'] = "danger";
            }
        }
    } elseif ($action == 'update') {
        $query = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan' WHERE id_karyawan = $id_karyawan";
        if (mysqli_query($koneksi, $query)) {
            $_SESSION['message'] = "Karyawan berhasil diperbarui!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
            $_SESSION['message_type'] = "danger";
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id_karyawan = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Hapus peminjaman terkait karyawan ini
    $query_del_peminjaman = "DELETE FROM peminjaman WHERE id_karyawan = $id_karyawan";
    mysqli_query($koneksi, $query_del_peminjaman);

    // Hapus transaksi terkait karyawan ini (jika ada id_karyawan di tabel transaksi)
    $query_del_transaksi = "DELETE FROM transaksi WHERE id_karyawan = $id_karyawan";
    mysqli_query($koneksi, $query_del_transaksi);


    $query = "DELETE FROM karyawan WHERE id_karyawan = $id_karyawan";
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['message'] = "Karyawan berhasil dihapus!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error menghapus karyawan: " . mysqli_error($koneksi);
        $_SESSION['message_type'] = "danger";
    }
}

mysqli_close($koneksi);
header("Location: karyawan.php");
exit();
?>
10. File transaksi.php (Form Transaksi Barang Masuk/Keluar)
Ini adalah halaman paling kompleks karena ada logika untuk peminjaman perkakas.

PHP

<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';

$jenis_transaksi = isset($_GET['jenis']) ? $_GET['jenis'] : '';

if (!in_array($jenis_transaksi, ['masuk', 'keluar'])) {
    echo "<div class='alert alert-danger'>Jenis transaksi tidak valid.</div>";
    include 'includes/footer.php';
    exit();
}

$barang_query = mysqli_query($koneksi, "SELECT id_barang, nama_barang, kategori, stok FROM barang ORDER BY nama_barang ASC");
$karyawan_query = mysqli_query($koneksi, "SELECT id_karyawan, nama_karyawan FROM karyawan ORDER BY nama_karyawan ASC");

?>

<h1 class="mb-4">
    <i class="fas fa-exchange-alt"></i> Transaksi Barang <?php echo ($jenis_transaksi == 'masuk' ? 'Masuk' : 'Keluar'); ?>
</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        Form Transaksi
    </div>
    <div class="card-body">
        <form action="proses_transaksi.php" method="POST">
            <input type="hidden" name="jenis_transaksi" value="<?php echo $jenis_transaksi; ?>">

            <div class="mb-3">
                <label for="id_barang" class="form-label">Nama Barang</label>
                <select class="form-select" id="id_barang" name="id_barang" required>
                    <option value="">Pilih Barang</option>
                    <?php
                    while ($data_barang = mysqli_fetch_assoc($barang_query)) {
                        echo "<option value='" . $data_barang['id_barang'] . "' data-kategori='" . $data_barang['kategori'] . "' data-stok='" . $data_barang['stok'] . "'>" . htmlspecialchars($data_barang['nama_barang']) . " (Stok: " . $data_barang['stok'] . ")</option>";
                    }
                    ?>
                </select>
                <small class="form-text text-muted" id="stok_info"></small>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
            </div>

            <?php if ($jenis_transaksi == 'keluar'): ?>
            <div class="mb-3">
                <label for="id_karyawan" class="form-label">Karyawan yang Menggunakan</label>
                <select class="form-select" id="id_karyawan" name="id_karyawan" required>
                    <option value="">Pilih Karyawan</option>
                    <?php
                    while ($data_karyawan = mysqli_fetch_assoc($karyawan_query)) {
                        echo "<option value='" . $data_karyawan['id_karyawan'] . "'>" . htmlspecialchars($data_karyawan['nama_karyawan']) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div id="peminjaman_fields" style="display:none;">
                <h5 class="mt-4">Detail Peminjaman (Khusus Perkakas)</h5>
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Estimasi Kembali (Opsional)</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
                    <small class="form-text text-muted">Abaikan jika barang habis pakai.</small>
                </div>
                <div class="mb-3">
                    <label for="catatan_peminjaman" class="form-label">Catatan Peminjaman (Opsional)</label>
                    <textarea class="form-control" id="catatan_peminjaman" name="catatan_peminjaman" rows="2"></textarea>
                </div>
            </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan (Opsional)</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Proses Transaksi</button>
        </form>
    </div>
</div>

<script>
    // JavaScript untuk menampilkan/menyembunyikan field peminjaman
    document.addEventListener('DOMContentLoaded', function() {
        const barangSelect = document.getElementById('id_barang');
        const peminjamanFields = document.getElementById('peminjaman_fields');
        const jenisTransaksi = "<?php echo $jenis_transaksi; ?>";
        const jumlahInput = document.getElementById('jumlah');
        const stokInfo = document.getElementById('stok_info');

        function togglePeminjamanFields() {
            const selectedOption = barangSelect.options[barangSelect.selectedIndex];
            const kategori = selectedOption.dataset.kategori;
            const stokSaatIni = selectedOption.dataset.stok;

            if (jenisTransaksi === 'keluar') {
                if (kategori === 'Perkakas') {
                    peminjamanFields.style.display = 'block';
                } else {
                    peminjamanFields.style.display = 'none';
                }

                // Tampilkan stok saat ini untuk barang keluar
                stokInfo.textContent = `Stok tersedia: ${stokSaatIni}`;
                jumlahInput.max = stokSaatIni; // Atur max input jumlah sesuai stok
                jumlahInput.placeholder = `Maksimal ${stokSaatIni}`;
            } else {
                 // Untuk barang masuk, tidak ada limit jumlah
                stokInfo.textContent = ``; // Kosongkan info stok
                jumlahInput.removeAttribute('max');
                jumlahInput.placeholder = ``;
            }
        }

        barangSelect.addEventListener('change', togglePeminjamanFields);

        // Panggil saat halaman pertama kali dimuat (misal jika ada data edit yang dimuat)
        togglePeminjamanFields();
    });
</script>

<?php
include 'includes/footer.php';
?>
11. File proses_transaksi.php (Logika Transaksi Masuk/Keluar)
PHP

<?php
session_start();
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jenis_transaksi = mysqli_real_escape_string($koneksi, $_POST['jenis_transaksi']);
    $id_barang = (int)$_POST['id_barang'];
    $jumlah = (int)$_POST['jumlah'];
    $keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);
    $id_karyawan = isset($_POST['id_karyawan']) ? (int)$_POST['id_karyawan'] : NULL;

    // Ambil data barang untuk mengetahui kategori dan stok saat ini
    $barang_data_query = mysqli_query($koneksi, "SELECT nama_barang, kategori, stok FROM barang WHERE id_barang = $id_barang");
    $barang_data = mysqli_fetch_assoc($barang_data_query);

    if (!$barang_data) {
        $_SESSION['message'] = "Barang tidak ditemukan.";
        $_SESSION['message_type'] = "danger";
        header("Location: transaksi.php?jenis=" . $jenis_transaksi);
        exit();
    }

    $nama_barang = $barang_data['nama_barang'];
    $kategori_barang = $barang_data['kategori'];
    $stok_saat_ini = $barang_data['stok'];

    if ($jenis_transaksi == 'masuk') {
        $new_stok = $stok_saat_ini + $jumlah;

        // Mulai transaksi database
        mysqli_begin_transaction($koneksi);
        try {
            // 1. Catat transaksi
            $query_transaksi = "INSERT INTO transaksi (id_barang, jenis_transaksi, jumlah, keterangan) VALUES ($id_barang, 'Masuk', $jumlah, '$keterangan')";
            if (!mysqli_query($koneksi, $query_transaksi)) {
                throw new Exception("Gagal mencatat transaksi masuk: " . mysqli_error($koneksi));
            }

            // 2. Update stok barang
            $query_update_stok = "UPDATE barang SET stok = $new_stok WHERE id_barang = $id_barang";
            if (!mysqli_query($koneksi, $query_update_stok)) {
                throw new Exception("Gagal memperbarui stok barang: " . mysqli_error($koneksi));
            }

            mysqli_commit($koneksi);
            $_SESSION['message'] = "Transaksi Barang Masuk untuk '$nama_barang' sejumlah $jumlah berhasil!";
            $_SESSION['message_type'] = "success";

        } catch (Exception $e) {
            mysqli_rollback($koneksi);
            $_SESSION['message'] = "Terjadi kesalahan: " . $e->getMessage();
            $_SESSION['message_type'] = "danger";
        }

    } elseif ($jenis_transaksi == 'keluar') {
        if ($jumlah > $stok_saat_ini) {
            $_SESSION['message'] = "Jumlah keluar ($jumlah) melebihi stok tersedia ($stok_saat_ini) untuk barang '$nama_barang'.";
            $_SESSION['message_type'] = "warning";
            header("Location: transaksi.php?jenis=" . $jenis_transaksi);
            exit();
        }

        if ($id_karyawan === NULL) {
            $_SESSION['message'] = "Karyawan harus dipilih untuk transaksi barang keluar.";
            $_SESSION['message_type'] = "warning";
            header("Location: transaksi.php?jenis=" . $jenis_transaksi);
            exit();
        }

        $new_stok = $stok_saat_ini - $jumlah;

        // Mulai transaksi database
        mysqli_begin_transaction($koneksi);
        try {
            // 1. Catat transaksi keluar
            $query_transaksi = "INSERT INTO transaksi (id_barang, jenis_transaksi, jumlah, keterangan, id_karyawan) VALUES ($id_barang, 'Keluar', $jumlah, '$keterangan', $id_karyawan)";
            if (!mysqli_query($koneksi, $query_transaksi)) {
                throw new Exception("Gagal mencatat transaksi keluar: " . mysqli_error($koneksi));
            }
            $last_transaksi_id = mysqli_insert_id($koneksi); // Ambil ID transaksi yang baru saja dibuat

            // 2. Update stok barang
            $query_update_stok = "UPDATE barang SET stok = $new_stok WHERE id_barang = $id_barang";
            if (!mysqli_query($koneksi, $query_update_stok)) {
                throw new Exception("Gagal memperbarui stok barang: " . mysqli_error($koneksi));
            }

            // 3. Jika perkakas, catat di tabel peminjaman
            if ($kategori_barang == 'Perkakas') {
                $tanggal_kembali = isset($_POST['tanggal_kembali']) && !empty($_POST['tanggal_kembali']) ? "'" . mysqli_real_escape_string($koneksi, $_POST['tanggal_kembali']) . "'" : "NULL";
                $catatan_peminjaman = mysqli_real_escape_string($koneksi, $_POST['catatan_peminjaman']);

                $query_peminjaman = "INSERT INTO peminjaman (id_transaksi_keluar, id_barang, id_karyawan, tanggal_pinjam, tanggal_kembali, status_peminjaman, catatan)
                                     VALUES ($last_transaksi_id, $id_barang, $id_karyawan, NOW(), $tanggal_kembali, 'Dipinjam', '$catatan_peminjaman')";
                if (!mysqli_query($koneksi, $query_peminjaman)) {
                    throw new Exception("Gagal mencatat peminjaman perkakas: " . mysqli_error($koneksi));
                }
            }

            mysqli_commit($koneksi);
            $_SESSION['message'] = "Transaksi Barang Keluar untuk '$nama_barang' sejumlah $jumlah berhasil!";
            $_SESSION['message_type'] = "success";

        } catch (Exception $e) {
            mysqli_rollback($koneksi);
            $_SESSION['message'] = "Terjadi kesalahan: " . $e->getMessage();
            $_SESSION['message_type'] = "danger";
        }
    }
}

mysqli_close($koneksi);
header("Location: transaksi.php?jenis=" . $jenis_transaksi);
exit();
?>
12. File laporan_stok.php (Laporan Stok Barang)
PHP

<?php
include 'includes/koneksi.php';
include 'includes/header.php';

$filter_kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';

$where_clause = "";
if (!empty($filter_kategori)) {
    $where_clause = "WHERE kategori = '" . mysqli_real_escape_string($koneksi, $filter_kategori) . "'";
}

$query_stok = "SELECT * FROM barang $where_clause ORDER BY nama_barang ASC";
$result_stok = mysqli_query($koneksi, $query_stok);

?>

<h1 class="mb-4"><i class="fas fa-chart-bar"></i> Laporan Stok Barang</h1>

<div class="card mb-4">
    <div class="card-header">
        Filter Laporan
    </div>
    <div class="card-body">
        <form action="" method="GET" class="row g-3 align-items-end">
            <div class="col-md-4">
                <label for="filter_kategori" class="form-label">Filter Kategori:</label>
                <select class="form-select" id="filter_kategori" name="kategori">
                    <option value="">Semua Kategori</option>
                    <option value="Perkakas" <?php echo ($filter_kategori == 'Perkakas' ? 'selected' : ''); ?>>Perkakas</option>
                    <option value="Bahan" <?php echo ($filter_kategori == 'Bahan' ? 'selected' : ''); ?>>Bahan</option>
                </select>
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button>
            </div>
            <div class="col-md-auto">
                <a href="laporan_stok_excel.php?kategori=<?php echo urlencode($filter_kategori); ?>" class="btn btn-success"><i class="fas fa-file-excel"></i> Export Excel</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Detail Stok Barang
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok Saat Ini</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result_stok) > 0) {
                        while ($row = mysqli_fetch_assoc($result_stok)) {
                            echo "<tr>";
                            echo "<td>" . $row['id_barang'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_barang']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";
                            echo "<td>" . $row['stok'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>Tidak ada data stok yang ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
13. File laporan_stok_excel.php (Export Laporan Stok ke Excel)
CATATAN PENTING: Untuk export Excel, Anda akan membutuhkan library seperti PhpSpreadsheet. Cara termudah untuk menginstalnya adalah dengan Composer. Jika Anda belum familiar dengan Composer, ini adalah langkah selanjutnya yang perlu dipelajari.

Untuk saat ini, saya akan memberikan contoh kode yang membutuhkan PhpSpreadsheet. Jika Anda tidak ingin menginstalnya sekarang, Anda bisa melewati bagian ini dan fokus pada fungsi inti aplikasi terlebih dahulu.

Langkah Instalasi PhpSpreadsheet (menggunakan Composer):

Pastikan Composer terinstal di sistem Anda. Jika belum, unduh dari: https://getcomposer.org/download/
Buka Command Prompt/Terminal dan navigasi ke root folder proyek Anda (C:\xampp\htdocs\gudang_app).
Jalankan perintah ini:
Bash

composer require phpoffice/phpspreadsheet
Ini akan membuat folder vendor/ dan file composer.json, composer.lock.
Isi file laporan_stok_excel.php:

PHP

<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$filter_kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';

$where_clause = "";
if (!empty($filter_kategori)) {
    $where_clause = "WHERE kategori = '" . mysqli_real_escape_string($koneksi, $filter_kategori) . "'";
}

$query_stok = "SELECT id_barang, nama_barang, kategori, stok FROM barang $where_clause ORDER BY nama_barang ASC";
$result_stok = mysqli_query($koneksi, $query_stok);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Barang');
$sheet->setCellValue('B1', 'Nama Barang');
$sheet->setCellValue('C1', 'Kategori');
$sheet->setCellValue('D1', 'Stok Saat Ini');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_stok)) {
    $sheet->setCellValue('A' . $row_num, $row['id_barang']);
    $sheet->setCellValue('B' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('C' . $row_num, $row['kategori']);
    $sheet->setCellValue('D' . $row_num, $row['stok']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'D') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Stok_Barang_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>
14. File laporan_transaksi.php (Laporan Barang Masuk/Keluar)
PHP

<?php
include 'includes/koneksi.php';
include 'includes/header.php';

$filter_jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';
$filter_start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$filter_end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';

$where_clauses = [];
if (!empty($filter_jenis)) {
    $where_clauses[] = "t.jenis_transaksi = '" . mysqli_real_escape_string($koneksi, $filter_jenis) . "'";
}
if (!empty($filter_start_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) >= '" . mysqli_real_escape_string($koneksi, $filter_start_date) . "'";
}
if (!empty($filter_end_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) <= '" . mysqli_real_escape_string($koneksi, $filter_end_date) . "'";
}

$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_transaksi = "SELECT t.*, b.nama_barang, b.kategori, k.nama_karyawan 
                    FROM transaksi t 
                    JOIN barang b ON t.id_barang = b.id_barang
                    LEFT JOIN karyawan k ON t.id_karyawan = k.id_karyawan
                    $where_sql
                    ORDER BY t.tanggal_transaksi DESC";
$result_transaksi = mysqli_query($koneksi, $query_transaksi);

?>

<h1 class="mb-4"><i class="fas fa-history"></i> Laporan Transaksi Barang</h1>

<div class="card mb-4">
    <div class="card-header">
        Filter Laporan
    </div>
    <div class="card-body">
        <form action="" method="GET" class="row g-3 align-items-end">
            <div class="col-md-3">
                <label for="filter_jenis" class="form-label">Jenis Transaksi:</label>
                <select class="form-select" id="filter_jenis" name="jenis">
                    <option value="">Semua</option>
                    <option value="Masuk" <?php echo ($filter_jenis == 'Masuk' ? 'selected' : ''); ?>>Masuk</option>
                    <option value="Keluar" <?php echo ($filter_jenis == 'Keluar' ? 'selected' : ''); ?>>Keluar</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="start_date" class="form-label">Dari Tanggal:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo htmlspecialchars($filter_start_date); ?>">
            </div>
            <div class="col-md-3">
                <label for="end_date" class="form-label">Sampai Tanggal:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo htmlspecialchars($filter_end_date); ?>">
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button>
            </div>
            <div class="col-md-auto">
                <a href="laporan_transaksi_excel.php?jenis=<?php echo urlencode($filter_jenis); ?>&start_date=<?php echo urlencode($filter_start_date); ?>&end_date=<?php echo urlencode($filter_end_date); ?>" class="btn btn-success"><i class="fas fa-file-excel"></i> Export Excel</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Detail Transaksi Barang
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jenis Transaksi</th>
                        <th>Jumlah</th>
                        <th>Karyawan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result_transaksi) > 0) {
                        while ($row = mysqli_fetch_assoc($result_transaksi)) {
                            echo "<tr>";
                            echo "<td>" . $row['id_transaksi'] . "</td>";
                            echo "<td>" . date('d-m-Y H:i:s', strtotime($row['tanggal_transaksi'])) . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_barang']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";
                            echo "<td><span class='badge bg-" . ($row['jenis_transaksi'] == 'Masuk' ? 'success' : 'danger') . "'>" . htmlspecialchars($row['jenis_transaksi']) . "</span></td>";
                            echo "<td>" . $row['jumlah'] . "</td>";
                            echo "<td>" . ($row['nama_karyawan'] ? htmlspecialchars($row['nama_karyawan']) : '-') . "</td>";
                            echo "<td>" . htmlspecialchars($row['keterangan']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8' class='text-center'>Tidak ada data transaksi yang ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
15. File laporan_transaksi_excel.php (Export Laporan Transaksi ke Excel)
CATATAN: Ini juga membutuhkan PhpSpreadsheet (lihat instruksi di atas).

PHP

<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$filter_jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';
$filter_start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$filter_end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';

$where_clauses = [];
if (!empty($filter_jenis)) {
    $where_clauses[] = "t.jenis_transaksi = '" . mysqli_real_escape_string($koneksi, $filter_jenis) . "'";
}
if (!empty($filter_start_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) >= '" . mysqli_real_escape_string($koneksi, $filter_start_date) . "'";
}
if (!empty($filter_end_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) <= '" . mysqli_real_escape_string($koneksi, $filter_end_date) . "'";
}

$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_transaksi = "SELECT t.id_transaksi, t.tanggal_transaksi, t.jenis_transaksi, t.jumlah, t.keterangan, 
                    b.nama_barang, b.kategori, k.nama_karyawan 
                    FROM transaksi t 
                    JOIN barang b ON t.id_barang = b.id_barang
                    LEFT JOIN karyawan k ON t.id_karyawan = k.id_karyawan
                    $where_sql
                    ORDER BY t.tanggal_transaksi DESC";
$result_transaksi = mysqli_query($koneksi, $query_transaksi);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Transaksi');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Nama Barang');
$sheet->setCellValue('D1', 'Kategori');
$sheet->setCellValue('E1', 'Jenis Transaksi');
$sheet->setCellValue('F1', 'Jumlah');
$sheet->setCellValue('G1', 'Karyawan');
$sheet->setCellValue('H1', 'Keterangan');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_transaksi)) {
    $sheet->setCellValue('A' . $row_num, $row['id_transaksi']);
    $sheet->setCellValue('B' . $row_num, date('d-m-Y H:i:s', strtotime($row['tanggal_transaksi'])));
    $sheet->setCellValue('C' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('D' . $row_num, $row['kategori']);
    $sheet->setCellValue('E' . $row_num, $row['jenis_transaksi']);
    $sheet->setCellValue('F' . $row_num, $row['jumlah']);
    $sheet->setCellValue('G' . $row_num, $row['nama_karyawan'] ?: '-');
    $sheet->setCellValue('H' . $row_num, $row['keterangan']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'H') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Transaksi_Barang_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>
16. File laporan_peminjaman.php (Laporan Peminjaman Perkakas)
PHP

<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';

$filter_status = isset($_GET['status']) ? $_GET['status'] : '';

$where_clauses = [];
if (!empty($filter_status)) {
    $where_clauses[] = "p.status_peminjaman = '" . mysqli_real_escape_string($koneksi, $filter_status) . "'";
}

$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_peminjaman = "SELECT p.*, b.nama_barang, k.nama_karyawan
                     FROM peminjaman p
                     JOIN barang b ON p.id_barang = b.id_barang
                     JOIN karyawan k ON p.id_karyawan = k.id_karyawan
                     $where_sql
                     ORDER BY p.tanggal_pinjam DESC";
$result_peminjaman = mysqli_query($koneksi, $query_peminjaman);

?>

<h1 class="mb-4"><i class="fas fa-clipboard-list"></i> Laporan Peminjaman Perkakas</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        Filter Laporan
    </div>
    <div class="card-body">
        <form action="" method="GET" class="row g-3 align-items-end">
            <div class="col-md-4">
                <label for="filter_status" class="form-label">Status Peminjaman:</label>
                <select class="form-select" id="filter_status" name="status">
                    <option value="">Semua Status</option>
                    <option value="Dipinjam" <?php echo ($filter_status == 'Dipinjam' ? 'selected' : ''); ?>>Dipinjam</option>
                    <option value="Dikembalikan" <?php echo ($filter_status == 'Dikembalikan' ? 'selected' : ''); ?>>Dikembalikan</option>
                </select>
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button>
            </div>
            <div class="col-md-auto">
                <a href="laporan_peminjaman_excel.php?status=<?php echo urlencode($filter_status); ?>" class="btn btn-success"><i class="fas fa-file-excel"></i> Export Excel</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Detail Peminjaman Perkakas
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID Pinjam</th>
                        <th>Nama Barang</th>
                        <th>Karyawan Peminjam</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tgl Estimasi Kembali</th>
                        <th>Tgl Kembali Aktual</th>
                        <th>Status</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result_peminjaman) > 0) {
                        while ($row = mysqli_fetch_assoc($result_peminjaman)) {
                            echo "<tr>";
                            echo "<td>" . $row['id_peminjaman'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_barang']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_karyawan']) . "</td>";
                            echo "<td>" . date('d-m-Y', strtotime($row['tanggal_pinjam'])) . "</td>";
                            echo "<td>" . ($row['tanggal_kembali'] ? date('d-m-Y', strtotime($row['tanggal_kembali'])) : '-') . "</td>"; // Tanggal Estimasi Kembali
                            echo "<td>" . ($row['status_peminjaman'] == 'Dikembalikan' && $row['tanggal_kembali'] ? date('d-m-Y', strtotime($row['tanggal_kembali'])) : '-') . "</td>"; // Tanggal Kembali Aktual
                            echo "<td><span class='badge bg-" . ($row['status_peminjaman'] == 'Dipinjam' ? 'warning' : 'success') . "'>" . htmlspecialchars($row['status_peminjaman']) . "</span></td>";
                            echo "<td>" . htmlspecialchars($row['catatan']) . "</td>";
                            echo "<td>";
                            if ($row['status_peminjaman'] == 'Dipinjam') {
                                echo "<a href='proses_kembali_peminjaman.php?id=" . $row['id_peminjaman'] . "' class='btn btn-success btn-sm' onclick=\"return confirm('Yakin ingin menandai peminjaman ini sebagai Dikembalikan?');\"><i class='fas fa-check'></i> Dikembalikan</a>";
                            } else {
                                echo "-";
                            }
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9' class='text-center'>Tidak ada data peminjaman yang ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
17. File proses_kembali_peminjaman.php (Logika Pengembalian Perkakas)
PHP

<?php
session_start();
include 'includes/koneksi.php';

if (isset($_GET['id'])) {
    $id_peminjaman = (int)$_GET['id'];

    // Ambil detail peminjaman untuk mendapatkan id_barang dan jumlah barang yang dipinjam
    $query_peminjaman = mysqli_query($koneksi, "SELECT p.id_barang, t.jumlah FROM peminjaman p JOIN transaksi t ON p.id_transaksi_keluar = t.id_transaksi WHERE p.id_peminjaman = $id_peminjaman AND p.status_peminjaman = 'Dipinjam'");
    $data_peminjaman = mysqli_fetch_assoc($query_peminjaman);

    if ($data_peminjaman) {
        $id_barang = $data_peminjaman['id_barang'];
        $jumlah_dikembalikan = $data_peminjaman['jumlah'];

        // Mulai transaksi database
        mysqli_begin_transaction($koneksi);
        try {
            // 1. Update status peminjaman menjadi 'Dikembalikan' dan set tanggal_kembali aktual
            $query_update_peminjaman = "UPDATE peminjaman SET status_peminjaman = 'Dikembalikan', tanggal_kembali = NOW() WHERE id_peminjaman = $id_peminjaman";
            if (!mysqli_query($koneksi, $query_update_peminjaman)) {
                throw new Exception("Gagal memperbarui status peminjaman: " . mysqli_error($koneksi));
            }

            // 2. Tambahkan kembali stok barang ke master barang
            $query_update_stok = "UPDATE barang SET stok = stok + $jumlah_dikembalikan WHERE id_barang = $id_barang";
            if (!mysqli_query($koneksi, $query_update_stok)) {
                throw new Exception("Gagal mengembalikan stok barang: " . mysqli_error($koneksi));
            }

            mysqli_commit($koneksi);
            $_SESSION['message'] = "Peminjaman berhasil ditandai sebagai dikembalikan dan stok barang telah ditambahkan kembali!";
            $_SESSION['message_type'] = "success";

        } catch (Exception $e) {
            mysqli_rollback($koneksi);
            $_SESSION['message'] = "Terjadi kesalahan saat mengembalikan perkakas: " . $e->getMessage();
            $_SESSION['message_type'] = "danger";
        }

    } else {
        $_SESSION['message'] = "Data peminjaman tidak ditemukan atau sudah dikembalikan.";
        $_SESSION['message_type'] = "danger";
    }
} else {
    $_SESSION['message'] = "ID Peminjaman tidak valid.";
    $_SESSION['message_type'] = "danger";
}

mysqli_close($koneksi);
header("Location: laporan_peminjaman.php");
exit();
?>
18. File laporan_peminjaman_excel.php (Export Laporan Peminjaman ke Excel)
CATATAN: Ini juga membutuhkan PhpSpreadsheet.

PHP

<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$filter_status = isset($_GET['status']) ? $_GET['status'] : '';

$where_clauses = [];
if (!empty($filter_status)) {
    $where_clauses[] = "p.status_peminjaman = '" . mysqli_real_escape_string($koneksi, $filter_status) . "'";
}

$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_peminjaman = "SELECT p.id_peminjaman, p.tanggal_pinjam, p.tanggal_kembali, p.status_peminjaman, p.catatan,
                     b.nama_barang, k.nama_karyawan
                     FROM peminjaman p
                     JOIN barang b ON p.id_barang = b.id_barang
                     JOIN karyawan k ON p.id_karyawan = k.id_karyawan
                     $where_sql
                     ORDER BY p.tanggal_pinjam DESC";
$result_peminjaman = mysqli_query($koneksi, $query_peminjaman);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Peminjaman');
$sheet->setCellValue('B1', 'Nama Barang');
$sheet->setCellValue('C1', 'Karyawan Peminjam');
$sheet->setCellValue('D1', 'Tanggal Pinjam');
$sheet->setCellValue('E1', 'Tgl Estimasi/Aktual Kembali');
$sheet->setCellValue('F1', 'Status');
$sheet->setCellValue('G1', 'Catatan');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_peminjaman)) {
    $sheet->setCellValue('A' . $row_num, $row['id_peminjaman']);
    $sheet->setCellValue('B' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('C' . $row_num, $row['nama_karyawan']);
    $sheet->setCellValue('D' . $row_num, date('d-m-Y H:i:s', strtotime($row['tanggal_pinjam'])));
    $sheet->setCellValue('E' . $row_num, $row['tanggal_kembali'] ? date('d-m-Y H:i:s', strtotime($row['tanggal_kembali'])) : '-');
    $sheet->setCellValue('F' . $row_num, $row['status_peminjaman']);
    $sheet->setCellValue('G' . $row_num, $row['catatan']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'G') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Peminjaman_Perkakas_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>
19. File css/style.css (CSS Kustom, Opsional)
Anda bisa menambahkan gaya kustom di sini jika ingin mengubah tampilan dasar Bootstrap.

CSS

/* Contoh CSS kustom */
body {
    background-color: #f8f9fa;
}

.card-header {
    font-weight: bold;
    background-color: #e9ecef;
}
20. File js/script.js (JavaScript Kustom, Opsional)
Untuk fungsionalitas JS kustom yang lebih kompleks di masa depan.

JavaScript

// Contoh JavaScript kustom
console.log("Aplikasi Gudang siap digunakan!");
Langkah Selanjutnya Setelah Membuat File:
Simpan Semua File: Pastikan semua file disimpan dengan nama dan di lokasi folder yang benar seperti yang diinstruksikan.
Mulai XAMPP: Pastikan Apache dan MySQL berjalan di XAMPP Control Panel.
Akses Aplikasi: Buka browser Anda dan kunjungi http://localhost/gudang_app/.
Uji Coba:
Coba tambahkan beberapa karyawan di "Master Karyawan".
Coba tambahkan beberapa barang (Perkakas dan Bahan) di "Master Barang".
Lakukan transaksi "Barang Masuk" untuk menambah stok.
Lakukan transaksi "Barang Keluar" (perhatikan fitur peminjaman untuk perkakas).
Lihat laporan-laporan yang tersedia.
Coba fitur "Dikembalikan" di laporan peminjaman.
Instalasi PhpSpreadsheet (opsional tapi disarankan): Jika Anda ingin fitur export Excel bekerja, Anda harus menginstal Composer dan menjalankan perintah composer require phpoffice/phpspreadsheet di folder gudang_app.
Kode di atas menyediakan fondasi yang sangat kuat untuk aplikasi Anda. Anda bisa mengembangkannya lebih lanjut, misalnya dengan:

Validasi form yang lebih ketat di sisi klien (JavaScript).
Sistem notifikasi/alert yang lebih interaktif.
Paginasi untuk tabel yang datanya banyak.
Fungsi pencarian di setiap halaman daftar.
Sistem otentikasi (login/logout) yang lebih lengkap.
Selamat mencoba! Jika ada bagian yang kurang jelas atau Anda menemui error, jangan ragu untuk bertanya.


Sumber





Aplikasinya berjalan dengan lancar. Berikutnya saya ingin ada fitur Pencarian untuk menginput Barang, transaksi dan Karyawan

WORKED
===================================================================================================================================
Hebat! Senang sekali dengar aplikasi Anda sudah berjalan lancar. Itu kemajuan yang luar biasa.

Menambahkan fitur pencarian adalah langkah penting untuk membuat aplikasi lebih mudah digunakan, terutama saat data semakin banyak. Mari kita tambahkan fungsionalitas pencarian untuk Master Barang, Master Karyawan, dan Laporan Transaksi. Untuk halaman transaksi.php (input barang masuk/keluar), kita akan menggunakan pendekatan dropdown yang lebih interaktif daripada pencarian langsung.

Implementasi Fitur Pencarian
Kita akan memodifikasi file PHP yang sudah ada untuk menambahkan kolom pencarian dan logika filter.

1. Modifikasi barang.php (Pencarian Master Barang)
Kita akan menambahkan sebuah input pencarian di atas tabel barang.

Lokasi Perubahan: Buka file gudang_app/barang.php.

Kode yang perlu ditambahkan/diubah:

PHP

<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id_barang = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$nama_barang = '';
$kategori = '';

// Variabel untuk pencarian
$search_keyword = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';
$where_clause = "";
if (!empty($search_keyword)) {
    $where_clause = "WHERE nama_barang LIKE '%$search_keyword%'";
}

if ($action == 'edit' && $id_barang > 0) {
    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = $id_barang");
    if ($data = mysqli_fetch_assoc($query)) {
        $nama_barang = $data['nama_barang'];
        $kategori = $data['kategori'];
    } else {
        echo "<div class='alert alert-danger'>Barang tidak ditemukan.</div>";
        $action = ''; // Reset action jika tidak ditemukan
    }
}
?>

<h1 class="mb-4"><i class="fas fa-box"></i> Master Barang</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        <?php echo ($action == 'edit' ? 'Edit' : 'Tambah') ?> Barang
    </div>
    <div class="card-body">
        <form action="proses_barang.php" method="POST">
            <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
            <input type="hidden" name="action" value="<?php echo ($action == 'edit' ? 'update' : 'add'); ?>">

            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo htmlspecialchars($nama_barang); ?>" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Perkakas" <?php echo ($kategori == 'Perkakas' ? 'selected' : ''); ?>>Perkakas</option>
                    <option value="Bahan" <?php echo ($kategori == 'Bahan' ? 'selected' : ''); ?>>Bahan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            <?php if ($action == 'edit'): ?>
                <a href="barang.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Batal Edit</a>
            <?php endif; ?>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Daftar Barang
    </div>
    <div class="card-body">
        <form action="" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari nama barang..." name="search" value="<?php echo htmlspecialchars($search_keyword); ?>">
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i> Cari</button>
                <?php if (!empty($search_keyword)): ?>
                    <a href="barang.php" class="btn btn-outline-danger"><i class="fas fa-times"></i> Reset</a>
                <?php endif; ?>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Gunakan $where_clause dalam query
                    $query_barang = mysqli_query($koneksi, "SELECT * FROM barang $where_clause ORDER BY nama_barang ASC");
                    if (mysqli_num_rows($query_barang) > 0) {
                        while ($data = mysqli_fetch_assoc($query_barang)) {
                            echo "<tr>";
                            echo "<td>" . $data['id_barang'] . "</td>";
                            echo "<td>" . htmlspecialchars($data['nama_barang']) . "</td>";
                            echo "<td>" . htmlspecialchars($data['kategori']) . "</td>";
                            echo "<td>" . $data['stok'] . "</td>";
                            echo "<td>";
                            echo "<a href='barang.php?action=edit&id=" . $data['id_barang'] . "&search=" . urlencode($search_keyword) . "' class='btn btn-warning btn-sm me-1'><i class='fas fa-edit'></i> Edit</a>";
                            echo "<a href='proses_barang.php?action=delete&id=" . $data['id_barang'] . "&search=" . urlencode($search_keyword) . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus barang ini? Stok juga akan dihapus.');\"><i class='fas fa-trash'></i> Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>Tidak ada data barang ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
Penjelasan Perubahan:

$search_keyword: Variabel baru untuk menampung input pencarian dari URL ($_GET['search']).
$where_clause: Kondisi WHERE ditambahkan ke query SQL hanya jika ada kata kunci pencarian.
Form Pencarian: Sebuah form kecil dengan input-group Bootstrap ditambahkan di atas tabel. name="search" penting agar nilai input bisa ditangkap oleh PHP.
Reset Button: Tombol "Reset" muncul jika ada kata kunci pencarian, untuk menghilangkan filter.
Link Edit/Delete: Parameter search juga ditambahkan ke URL edit/delete agar setelah operasi, pencarian tetap aktif.
2. Modifikasi karyawan.php (Pencarian Master Karyawan)
Sama seperti barang.php, kita akan menambahkan fungsionalitas pencarian untuk karyawan.

Lokasi Perubahan: Buka file gudang_app/karyawan.php.

Kode yang perlu ditambahkan/diubah:

PHP

<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id_karyawan = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$nama_karyawan = '';

// Variabel untuk pencarian
$search_keyword = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';
$where_clause = "";
if (!empty($search_keyword)) {
    $where_clause = "WHERE nama_karyawan LIKE '%$search_keyword%'";
}


if ($action == 'edit' && $id_karyawan > 0) {
    $query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan = $id_karyawan");
    if ($data = mysqli_fetch_assoc($query)) {
        $nama_karyawan = $data['nama_karyawan'];
    } else {
        echo "<div class='alert alert-danger'>Karyawan tidak ditemukan.</div>";
        $action = '';
    }
}
?>

<h1 class="mb-4"><i class="fas fa-users"></i> Master Karyawan</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        <?php echo ($action == 'edit' ? 'Edit' : 'Tambah') ?> Karyawan
    </div>
    <div class="card-body">
        <form action="proses_karyawan.php" method="POST">
            <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>">
            <input type="hidden" name="action" value="<?php echo ($action == 'edit' ? 'update' : 'add'); ?>">

            <div class="mb-3">
                <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?php echo htmlspecialchars($nama_karyawan); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            <?php if ($action == 'edit'): ?>
                <a href="karyawan.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Batal Edit</a>
            <?php endif; ?>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Daftar Karyawan
    </div>
    <div class="card-body">
        <form action="" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari nama karyawan..." name="search" value="<?php echo htmlspecialchars($search_keyword); ?>">
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i> Cari</button>
                <?php if (!empty($search_keyword)): ?>
                    <a href="karyawan.php" class="btn btn-outline-danger"><i class="fas fa-times"></i> Reset</a>
                <?php endif; ?>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Karyawan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Gunakan $where_clause dalam query
                    $query_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan $where_clause ORDER BY nama_karyawan ASC");
                    if (mysqli_num_rows($query_karyawan) > 0) {
                        while ($data = mysqli_fetch_assoc($query_karyawan)) {
                            echo "<tr>";
                            echo "<td>" . $data['id_karyawan'] . "</td>";
                            echo "<td>" . htmlspecialchars($data['nama_karyawan']) . "</td>";
                            echo "<td>";
                            echo "<a href='karyawan.php?action=edit&id=" . $data['id_karyawan'] . "&search=" . urlencode($search_keyword) . "' class='btn btn-warning btn-sm me-1'><i class='fas fa-edit'></i> Edit</a>";
                            echo "<a href='proses_karyawan.php?action=delete&id=" . $data['id_karyawan'] . "&search=" . urlencode($search_keyword) . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus karyawan ini? Peminjaman terkait juga akan dihapus.');\"><i class='fas fa-trash'></i> Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3' class='text-center'>Tidak ada data karyawan ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
Penjelasan Perubahan: Mirip dengan barang.php, disesuaikan untuk tabel karyawan.

3. Modifikasi laporan_transaksi.php (Pencarian Laporan Transaksi)
Untuk laporan transaksi, kita akan menambahkan kolom pencarian berdasarkan nama barang atau nama karyawan, selain filter yang sudah ada.

Lokasi Perubahan: Buka file gudang_app/laporan_transaksi.php.

Kode yang perlu ditambahkan/diubah:

PHP

<?php
include 'includes/koneksi.php';
include 'includes/header.php';

$filter_jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';
$filter_start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$filter_end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';
// Tambahkan filter pencarian
$search_keyword = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';


$where_clauses = [];
if (!empty($filter_jenis)) {
    $where_clauses[] = "t.jenis_transaksi = '" . mysqli_real_escape_string($koneksi, $filter_jenis) . "'";
}
if (!empty($filter_start_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) >= '" . mysqli_real_escape_string($koneksi, $filter_start_date) . "'";
}
if (!empty($filter_end_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) <= '" . mysqli_real_escape_string($koneksi, $filter_end_date) . "'";
}
// Tambahkan kondisi pencarian berdasarkan nama barang atau nama karyawan
if (!empty($search_keyword)) {
    $where_clauses[] = "(b.nama_barang LIKE '%$search_keyword%' OR k.nama_karyawan LIKE '%$search_keyword%')";
}


$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_transaksi = "SELECT t.*, b.nama_barang, b.kategori, k.nama_karyawan
                    FROM transaksi t
                    JOIN barang b ON t.id_barang = b.id_barang
                    LEFT JOIN karyawan k ON t.id_karyawan = k.id_karyawan
                    $where_sql
                    ORDER BY t.tanggal_transaksi DESC";
$result_transaksi = mysqli_query($koneksi, $query_transaksi);

?>

<h1 class="mb-4"><i class="fas fa-history"></i> Laporan Transaksi Barang</h1>

<div class="card mb-4">
    <div class="card-header">
        Filter Laporan
    </div>
    <div class="card-body">
        <form action="" method="GET" class="row g-3 align-items-end">
            <div class="col-md-3">
                <label for="filter_jenis" class="form-label">Jenis Transaksi:</label>
                <select class="form-select" id="filter_jenis" name="jenis">
                    <option value="">Semua</option>
                    <option value="Masuk" <?php echo ($filter_jenis == 'Masuk' ? 'selected' : ''); ?>>Masuk</option>
                    <option value="Keluar" <?php echo ($filter_jenis == 'Keluar' ? 'selected' : ''); ?>>Keluar</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="start_date" class="form-label">Dari Tanggal:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo htmlspecialchars($filter_start_date); ?>">
            </div>
            <div class="col-md-3">
                <label for="end_date" class="form-label">Sampai Tanggal:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo htmlspecialchars($filter_end_date); ?>">
            </div>
            <div class="col-md-3">
                <label for="search" class="form-label">Cari Barang/Karyawan:</label>
                <input type="text" class="form-control" id="search" name="search" placeholder="Nama Barang atau Karyawan" value="<?php echo htmlspecialchars($search_keyword); ?>">
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter & Cari</button>
            </div>
            <?php if (!empty($filter_jenis) || !empty($filter_start_date) || !empty($filter_end_date) || !empty($search_keyword)): ?>
            <div class="col-md-auto">
                <a href="laporan_transaksi.php" class="btn btn-outline-danger"><i class="fas fa-times"></i> Reset Filter</a>
            </div>
            <?php endif; ?>
            <div class="col-md-auto">
                <?php
                // Bangun parameter URL untuk export Excel
                $excel_params = http_build_query([
                    'jenis' => $filter_jenis,
                    'start_date' => $filter_start_date,
                    'end_date' => $filter_end_date,
                    'search' => $search_keyword
                ]);
                ?>
                <a href="laporan_transaksi_excel.php?<?php echo $excel_params; ?>" class="btn btn-success"><i class="fas fa-file-excel"></i> Export Excel</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Detail Transaksi Barang
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jenis Transaksi</th>
                        <th>Jumlah</th>
                        <th>Karyawan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result_transaksi) > 0) {
                        while ($row = mysqli_fetch_assoc($result_transaksi)) {
                            echo "<tr>";
                            echo "<td>" . $row['id_transaksi'] . "</td>";
                            echo "<td>" . date('d-m-Y H:i:s', strtotime($row['tanggal_transaksi'])) . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_barang']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";
                            echo "<td><span class='badge bg-" . ($row['jenis_transaksi'] == 'Masuk' ? 'success' : 'danger') . "'>" . htmlspecialchars($row['jenis_transaksi']) . "</span></td>";
                            echo "<td>" . $row['jumlah'] . "</td>";
                            echo "<td>" . ($row['nama_karyawan'] ? htmlspecialchars($row['nama_karyawan']) : '-') . "</td>";
                            echo "<td>" . htmlspecialchars($row['keterangan']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8' class='text-center'>Tidak ada data transaksi yang ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
Penjelasan Perubahan:

$search_keyword: Variabel untuk pencarian nama barang atau nama karyawan.
Kondisi Pencarian di WHERE: (b.nama_barang LIKE '%$search_keyword%' OR k.nama_karyawan LIKE '%$search_keyword%') ditambahkan ke $where_clauses. Ini akan mencari kata kunci di kedua kolom.
Form Pencarian: Ditambahkan input text untuk pencarian di form filter.
http_build_query: Digunakan untuk membangun parameter URL saat export ke Excel agar filter dan pencarian tetap diterapkan di laporan Excel.
4. Modifikasi laporan_transaksi_excel.php (Pencarian Export Excel Transaksi)
Agar export Excel juga menerapkan pencarian yang sama, kita perlu memperbarui file ini.

Lokasi Perubahan: Buka file gudang_app/laporan_transaksi_excel.php.

Kode yang perlu ditambahkan/diubah:

PHP

<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$filter_jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';
$filter_start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$filter_end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';
// Tambahkan filter pencarian
$search_keyword = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';


$where_clauses = [];
if (!empty($filter_jenis)) {
    $where_clauses[] = "t.jenis_transaksi = '" . mysqli_real_escape_string($koneksi, $filter_jenis) . "'";
}
if (!empty($filter_start_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) >= '" . mysqli_real_escape_string($koneksi, $filter_start_date) . "'";
}
if (!empty($filter_end_date)) {
    $where_clauses[] = "DATE(t.tanggal_transaksi) <= '" . mysqli_real_escape_string($koneksi, $filter_end_date) . "'";
}
// Tambahkan kondisi pencarian berdasarkan nama barang atau nama karyawan
if (!empty($search_keyword)) {
    $where_clauses[] = "(b.nama_barang LIKE '%$search_keyword%' OR k.nama_karyawan LIKE '%$search_keyword%')";
}


$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_transaksi = "SELECT t.id_transaksi, t.tanggal_transaksi, t.jenis_transaksi, t.jumlah, t.keterangan,
                    b.nama_barang, b.kategori, k.nama_karyawan
                    FROM transaksi t
                    JOIN barang b ON t.id_barang = b.id_barang
                    LEFT JOIN karyawan k ON t.id_karyawan = k.id_karyawan
                    $where_sql
                    ORDER BY t.tanggal_transaksi DESC";
$result_transaksi = mysqli_query($koneksi, $query_transaksi);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Transaksi');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Nama Barang');
$sheet->setCellValue('D1', 'Kategori');
$sheet->setCellValue('E1', 'Jenis Transaksi');
$sheet->setCellValue('F1', 'Jumlah');
$sheet->setCellValue('G1', 'Karyawan');
$sheet->setCellValue('H1', 'Keterangan');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_transaksi)) {
    $sheet->setCellValue('A' . $row_num, $row['id_transaksi']);
    $sheet->setCellValue('B' . $row_num, date('d-m-Y H:i:s', strtotime($row['tanggal_transaksi'])));
    $sheet->setCellValue('C' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('D' . $row_num, $row['kategori']);
    $sheet->setCellValue('E' . $row_num, $row['jenis_transaksi']);
    $sheet->setCellValue('F' . $row_num, $row['jumlah']);
    $sheet->setCellValue('G' . $row_num, $row['nama_karyawan'] ?: '-');
    $sheet->setCellValue('H' . $row_num, $row['keterangan']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'H') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Transaksi_Barang_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>
5. laporan_peminjaman.php (Pencarian Laporan Peminjaman)
Tambahkan pencarian berdasarkan nama barang atau nama karyawan di laporan peminjaman.

Lokasi Perubahan: Buka file gudang_app/laporan_peminjaman.php.

Kode yang perlu ditambahkan/diubah:

PHP

<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';

$filter_status = isset($_GET['status']) ? $_GET['status'] : '';
// Tambahkan filter pencarian
$search_keyword = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';


$where_clauses = [];
if (!empty($filter_status)) {
    $where_clauses[] = "p.status_peminjaman = '" . mysqli_real_escape_string($koneksi, $filter_status) . "'";
}
// Tambahkan kondisi pencarian berdasarkan nama barang atau nama karyawan
if (!empty($search_keyword)) {
    $where_clauses[] = "(b.nama_barang LIKE '%$search_keyword%' OR k.nama_karyawan LIKE '%$search_keyword%')";
}


$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_peminjaman = "SELECT p.*, b.nama_barang, k.nama_karyawan
                     FROM peminjaman p
                     JOIN barang b ON p.id_barang = b.id_barang
                     JOIN karyawan k ON p.id_karyawan = k.id_karyawan
                     $where_sql
                     ORDER BY p.tanggal_pinjam DESC";
$result_peminjaman = mysqli_query($koneksi, $query_peminjaman);

?>

<h1 class="mb-4"><i class="fas fa-clipboard-list"></i> Laporan Peminjaman Perkakas</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        Filter Laporan
    </div>
    <div class="card-body">
        <form action="" method="GET" class="row g-3 align-items-end">
            <div class="col-md-3">
                <label for="filter_status" class="form-label">Status Peminjaman:</label>
                <select class="form-select" id="filter_status" name="status">
                    <option value="">Semua Status</option>
                    <option value="Dipinjam" <?php echo ($filter_status == 'Dipinjam' ? 'selected' : ''); ?>>Dipinjam</option>
                    <option value="Dikembalikan" <?php echo ($filter_status == 'Dikembalikan' ? 'selected' : ''); ?>>Dikembalikan</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="search" class="form-label">Cari Barang/Karyawan:</label>
                <input type="text" class="form-control" id="search" name="search" placeholder="Nama Barang atau Karyawan" value="<?php echo htmlspecialchars($search_keyword); ?>">
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter & Cari</button>
            </div>
            <?php if (!empty($filter_status) || !empty($search_keyword)): ?>
            <div class="col-md-auto">
                <a href="laporan_peminjaman.php" class="btn btn-outline-danger"><i class="fas fa-times"></i> Reset Filter</a>
            </div>
            <?php endif; ?>
            <div class="col-md-auto">
                <?php
                // Bangun parameter URL untuk export Excel
                $excel_params = http_build_query([
                    'status' => $filter_status,
                    'search' => $search_keyword
                ]);
                ?>
                <a href="laporan_peminjaman_excel.php?<?php echo $excel_params; ?>" class="btn btn-success"><i class="fas fa-file-excel"></i> Export Excel</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Detail Peminjaman Perkakas
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID Pinjam</th>
                        <th>Nama Barang</th>
                        <th>Karyawan Peminjam</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tgl Estimasi Kembali</th>
                        <th>Tgl Kembali Aktual</th>
                        <th>Status</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result_peminjaman) > 0) {
                        while ($row = mysqli_fetch_assoc($result_peminjaman)) {
                            echo "<tr>";
                            echo "<td>" . $row['id_peminjaman'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_barang']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_karyawan']) . "</td>";
                            echo "<td>" . date('d-m-Y', strtotime($row['tanggal_pinjam'])) . "</td>";
                            echo "<td>" . ($row['tanggal_kembali'] && $row['status_peminjaman'] == 'Dipinjam' ? date('d-m-Y', strtotime($row['tanggal_kembali'])) : '-') . "</td>"; // Tanggal Estimasi Kembali (jika masih dipinjam)
                            echo "<td>" . ($row['status_peminjaman'] == 'Dikembalikan' && $row['tanggal_kembali'] ? date('d-m-Y', strtotime($row['tanggal_kembali'])) : '-') . "</td>"; // Tanggal Kembali Aktual
                            echo "<td><span class='badge bg-" . ($row['status_peminjaman'] == 'Dipinjam' ? 'warning' : 'success') . "'>" . htmlspecialchars($row['status_peminjaman']) . "</span></td>";
                            echo "<td>" . htmlspecialchars($row['catatan']) . "</td>";
                            echo "<td>";
                            if ($row['status_peminjaman'] == 'Dipinjam') {
                                echo "<a href='proses_kembali_peminjaman.php?id=" . $row['id_peminjaman'] . "&search=" . urlencode($search_keyword) . "&status=" . urlencode($filter_status) . "' class='btn btn-success btn-sm' onclick=\"return confirm('Yakin ingin menandai peminjaman ini sebagai Dikembalikan?');\"><i class='fas fa-check'></i> Dikembalikan</a>";
                            } else {
                                echo "-";
                            }
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9' class='text-center'>Tidak ada data peminjaman yang ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
6. laporan_peminjaman_excel.php (Pencarian Export Excel Peminjaman)
CATATAN: Ini juga membutuhkan PhpSpreadsheet.

PHP

<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$filter_status = isset($_GET['status']) ? $_GET['status'] : '';
// Tambahkan filter pencarian
$search_keyword = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';


$where_clauses = [];
if (!empty($filter_status)) {
    $where_clauses[] = "p.status_peminjaman = '" . mysqli_real_escape_string($koneksi, $filter_status) . "'";
}
// Tambahkan kondisi pencarian berdasarkan nama barang atau nama karyawan
if (!empty($search_keyword)) {
    $where_clauses[] = "(b.nama_barang LIKE '%$search_keyword%' OR k.nama_karyawan LIKE '%$search_keyword%')";
}


$where_sql = '';
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$query_peminjaman = "SELECT p.id_peminjaman, p.tanggal_pinjam, p.tanggal_kembali, p.status_peminjaman, p.catatan,
                     b.nama_barang, k.nama_karyawan
                     FROM peminjaman p
                     JOIN barang b ON p.id_barang = b.id_barang
                     JOIN karyawan k ON p.id_karyawan = k.id_karyawan
                     $where_sql
                     ORDER BY p.tanggal_pinjam DESC";
$result_peminjaman = mysqli_query($koneksi, $query_peminjaman);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Peminjaman');
$sheet->setCellValue('B1', 'Nama Barang');
$sheet->setCellValue('C1', 'Karyawan Peminjam');
$sheet->setCellValue('D1', 'Tanggal Pinjam');
$sheet->setCellValue('E1', 'Tgl Estimasi/Aktual Kembali');
$sheet->setCellValue('F1', 'Status');
$sheet->setCellValue('G1', 'Catatan');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_peminjaman)) {
    $sheet->setCellValue('A' . $row_num, $row['id_peminjaman']);
    $sheet->setCellValue('B' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('C' . $row_num, $row['nama_karyawan']);
    $sheet->setCellValue('D' . $row_num, date('d-m-Y H:i:s', strtotime($row['tanggal_pinjam'])));
    $sheet->setCellValue('E' . $row_num, $row['tanggal_kembali'] ? date('d-m-Y H:i:s', strtotime($row['tanggal_kembali'])) : '-');
    $sheet->setCellValue('F' . $row_num, $row['status_peminjaman']);
    $sheet->setCellValue('G' . $row_num, $row['catatan']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'G') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Peminjaman_Perkakas_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>
7. Perbaikan pada proses_barang.php, proses_karyawan.php, dan proses_kembali_peminjaman.php
Agar setelah operasi CRUD (tambah, edit, hapus, kembali), aplikasi tetap mengarahkan kembali ke halaman dengan filter pencarian yang sama (jika ada), kita perlu sedikit memodifikasi bagian header("Location: ...").

Lokasi Perubahan: Buka gudang_app/proses_barang.php, gudang_app/proses_karyawan.php, gudang_app/proses_kembali_peminjaman.php.

Logika Perubahan (pada setiap file ini):

Cari baris header("Location: [nama_file].php"); dan ubah menjadi seperti ini:

PHP

// Contoh untuk proses_barang.php
$redirect_url = "barang.php";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $redirect_url .= "?search=" . urlencode($_GET['search']);
}
header("Location: " . $redirect_url);
exit();
Penerapan untuk Masing-masing File:

proses_barang.php:

PHP

// ... kode di atas ...
$redirect_url = "barang.php";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $redirect_url .= "?search=" . urlencode($_GET['search']);
}
header("Location: " . $redirect_url);
exit();
?>
proses_karyawan.php:

PHP

// ... kode di atas ...
$redirect_url = "karyawan.php";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $redirect_url .= "?search=" . urlencode($_GET['search']);
}
header("Location: " . $redirect_url);
exit();
?>
proses_kembali_peminjaman.php:

PHP

// ... kode di atas ...
$redirect_params = [];
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $redirect_params['search'] = $_GET['search'];
}
if (isset($_GET['status']) && !empty($_GET['status'])) {
    $redirect_params['status'] = $_GET['status'];
}
$redirect_url = "laporan_peminjaman.php";
if (!empty($redirect_params)) {
    $redirect_url .= "?" . http_build_query($redirect_params);
}
header("Location: " . $redirect_url);
exit();
?>
8. File transaksi.php (Perbaikan Dropdown Barang/Karyawan)
Untuk halaman transaksi, daripada search bar yang terpisah, kita akan menggunakan fitur pencarian bawaan pada dropdown (<select>) menggunakan library Select2 agar lebih interaktif saat memilih barang atau karyawan, terutama jika daftar mereka panjang.

Langkah Instalasi Select2:

Unduh Select2 CSS & JS: Kunjungi https://select2.org/download. Pilih "Download" untuk versi terbaru.
Ekstrak dan Letakkan File:
Dari folder dist/css hasil unduhan, salin select2.min.css ke gudang_app/css/.
Dari folder dist/js hasil unduhan, salin select2.min.js ke gudang_app/js/.
Modifikasi includes/header.php:

Tambahkan link CSS Select2 di bagian <head>:

PHP

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Gudang Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>
Modifikasi includes/footer.php:

Tambahkan script Select2 di bagian akhir <body> (setelah Bootstrap JS):

PHP

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eJzUHsJ7wIe0j" crossorigin="anonymous"></script>
<script src="js/select2.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
Modifikasi transaksi.php:

Ubah tag <select> untuk barang dan karyawan, lalu tambahkan inisialisasi Select2 di bagian JavaScript.

PHP

<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';

$jenis_transaksi = isset($_GET['jenis']) ? $_GET['jenis'] : '';

if (!in_array($jenis_transaksi, ['masuk', 'keluar'])) {
    echo "<div class='alert alert-danger'>Jenis transaksi tidak valid.</div>";
    include 'includes/footer.php';
    exit();
}

$barang_query = mysqli_query($koneksi, "SELECT id_barang, nama_barang, kategori, stok FROM barang ORDER BY nama_barang ASC");
$karyawan_query = mysqli_query($koneksi, "SELECT id_karyawan, nama_karyawan FROM karyawan ORDER BY nama_karyawan ASC");

?>

<h1 class="mb-4">
    <i class="fas fa-exchange-alt"></i> Transaksi Barang <?php echo ($jenis_transaksi == 'masuk' ? 'Masuk' : 'Keluar'); ?>
</h1>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-header">
        Form Transaksi
    </div>
    <div class="card-body">
        <form action="proses_transaksi.php" method="POST">
            <input type="hidden" name="jenis_transaksi" value="<?php echo $jenis_transaksi; ?>">

            <div class="mb-3">
                <label for="id_barang" class="form-label">Nama Barang</label>
                <select class="form-select" id="id_barang" name="id_barang" required>
                    <option value="">Pilih Barang</option>
                    <?php
                    while ($data_barang = mysqli_fetch_assoc($barang_query)) {
                        echo "<option value='" . $data_barang['id_barang'] . "' data-kategori='" . $data_barang['kategori'] . "' data-stok='" . $data_barang['stok'] . "'>" . htmlspecialchars($data_barang['nama_barang']) . " (Stok: " . $data_barang['stok'] . ")</option>";
                    }
                    ?>
                </select>
                <small class="form-text text-muted" id="stok_info"></small>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
            </div>

            <?php if ($jenis_transaksi == 'keluar'): ?>
            <div class="mb-3">
                <label for="id_karyawan" class="form-label">Karyawan yang Menggunakan</label>
                <select class="form-select" id="id_karyawan" name="id_karyawan" required>
                    <option value="">Pilih Karyawan</option>
                    <?php
                    while ($data_karyawan = mysqli_fetch_assoc($karyawan_query)) {
                        echo "<option value='" . $data_karyawan['id_karyawan'] . "'>" . htmlspecialchars($data_karyawan['nama_karyawan']) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div id="peminjaman_fields" style="display:none;">
                <h5 class="mt-4">Detail Peminjaman (Khusus Perkakas)</h5>
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Estimasi Kembali (Opsional)</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
                    <small class="form-text text-muted">Abaikan jika barang habis pakai.</small>
                </div>
                <div class="mb-3">
                    <label for="catatan_peminjaman" class="form-label">Catatan Peminjaman (Opsional)</label>
                    <textarea class="form-control" id="catatan_peminjaman" name="catatan_peminjaman" rows="2"></textarea>
                </div>
            </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan (Opsional)</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Proses Transaksi</button>
        </form>
    </div>
</div>

<script>
    // Inisialisasi Select2
    $(document).ready(function() {
        $('#id_barang').select2({
            placeholder: "Pilih Barang",
            allowClear: true,
            theme: "bootstrap-5" // Untuk integrasi dengan Bootstrap 5
        });
        $('#id_karyawan').select2({
            placeholder: "Pilih Karyawan",
            allowClear: true,
            theme: "bootstrap-5" // Untuk integrasi dengan Bootstrap 5
        });

        const barangSelect = document.getElementById('id_barang');
        const peminjamanFields = document.getElementById('peminjaman_fields');
        const jenisTransaksi = "<?php echo $jenis_transaksi; ?>";
        const jumlahInput = document.getElementById('jumlah');
        const stokInfo = document.getElementById('stok_info');

        function togglePeminjamanFields() {
            const selectedOption = barangSelect.options[barangSelect.selectedIndex];
            // Pastikan ada pilihan yang terpilih sebelum mengakses dataset
            if (!selectedOption || selectedOption.value === "") {
                peminjamanFields.style.display = 'none';
                stokInfo.textContent = '';
                jumlahInput.removeAttribute('max');
                jumlahInput.placeholder = '';
                return;
            }

            const kategori = selectedOption.dataset.kategori;
            const stokSaatIni = selectedOption.dataset.stok;

            if (jenisTransaksi === 'keluar') {
                if (kategori === 'Perkakas') {
                    peminjamanFields.style.display = 'block';
                } else {
                    peminjamanFields.style.display = 'none';
                }

                // Tampilkan stok saat ini untuk barang keluar
                stokInfo.textContent = `Stok tersedia: ${stokSaatIni}`;
                jumlahInput.max = stokSaatIni; // Atur max input jumlah sesuai stok
                jumlahInput.placeholder = `Maksimal ${stokSaatIni}`;
            } else {
                 // Untuk barang masuk, tidak ada limit jumlah
                stokInfo.textContent = ``; // Kosongkan info stok
                jumlahInput.removeAttribute('max');
                jumlahInput.placeholder = ``;
            }
        }

        // Gunakan event 'change' dari Select2
        $('#id_barang').on('change', togglePeminjamanFields);

        // Panggil saat halaman pertama kali dimuat
        togglePeminjamanFields();
    });
</script>

<?php
include 'includes/footer.php';
?>
Penjelasan Perubahan:

Select2 Integration:
File CSS dan JS Select2 ditambahkan di header.php dan footer.php.
$(document).ready(function() { ... }); digunakan untuk memastikan DOM siap sebelum inisialisasi Select2.
$('#id_barang').select2({...}); dan $('#id_karyawan').select2({...}); menginisialisasi Select2 pada dropdown yang relevan. theme: "bootstrap-5" penting agar tampilannya sesuai dengan Bootstrap 5.
Perubahan pada togglePeminjamanFields untuk mengakomodasi cara Select2 bekerja dan memastikan informasi stok tetap akurat.
Setelah semua perubahan ini diterapkan, Anda akan memiliki fungsionalitas pencarian yang jauh lebih baik di seluruh aplikasi Anda! Coba buka kembali aplikasi Anda di browser dan uji fitur pencarian dan dropdown baru.

Apakah ada pertanyaan lebih lanjut atau ada fitur lain yang ingin Anda tambahkan?