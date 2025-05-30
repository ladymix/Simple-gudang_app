<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Web - Google Fonts & Dark Mode</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* CSS Kustom untuk Font dan Dark Mode */

        /* Menerapkan font 'Inter' ke seluruh body */
        body {
            font-family: 'Inter', sans-serif;
            /* Transisi halus untuk perubahan warna saat dark mode diaktifkan/dinonaktifkan */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Warna default (light mode) */
            background-color: var(--bs-body-bg); /* Menggunakan variabel Bootstrap untuk latar belakang */
            color: var(--bs-body-color); /* Menggunakan variabel Bootstrap untuk warna teks */
        }

        /* Gaya untuk Dark Mode */
        /* Ketika kelas 'dark-mode' ditambahkan ke body, gaya ini akan diterapkan */
        body.dark-mode {
            background-color: #212529; /* Latar belakang gelap */
            color: #f8f9fa; /* Teks terang */
        }

        /* Menyesuaikan Navbar di Dark Mode */
        body.dark-mode .navbar {
            background-color: #343a40 !important; /* Latar belakang navbar gelap */
            border-bottom-color: #454d55 !important; /* Warna border bawah navbar */
        }

        body.dark-mode .navbar-brand,
        body.dark-mode .nav-link {
            color: #f8f9fa !important; /* Warna teks link navbar terang */
        }

        /* Menyesuaikan Card di Dark Mode */
        body.dark-mode .card {
            background-color: #343a40; /* Latar belakang card gelap */
            border-color: #454d55; /* Warna border card */
            color: #f8f9fa; /* Warna teks card terang */
        }

        /* Menyesuaikan Tombol di Dark Mode */
        body.dark-mode .btn-secondary {
            background-color: #6c757d; /* Warna tombol sekunder gelap */
            border-color: #6c757d;
            color: #f8f9fa;
        }

        body.dark-mode .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        /* Menyesuaikan Formulir Kontrol (Input) di Dark Mode */
        body.dark-mode .form-control {
            background-color: #495057;
            color: #f8f9fa;
            border-color: #6c757d;
        }

        body.dark-mode .form-control::placeholder { /* Untuk placeholder teks */
            color: #ced4da;
            opacity: 1; /* Firefox default opacity is lower */
        }

        /* Pastikan elemen lain yang Anda gunakan (misalnya tabel, alert, dll.) juga disesuaikan */
        /* dengan menambahkan kelas .dark-mode pada selektornya */
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Aplikasi Saya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Selamat Datang!</h1>
            <button id="darkModeToggle" class="btn btn-secondary rounded-md shadow-sm">
                <span class="d-none d-md-inline">Mode Gelap</span>
                <span class="d-inline d-md-none">Gelap</span>
            </button>
        </div>

        <p>Ini adalah contoh aplikasi web sederhana yang menunjukkan penggunaan Google Fonts dan fitur dark mode.</p>
        <p>Font yang digunakan di halaman ini adalah 'Inter' dari Google Fonts. Perhatikan bagaimana teks terlihat.</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body">
                        <h5 class="card-title">Judul Kartu</h5>
                        <p class="card-text">Ini adalah contoh konten di dalam kartu Bootstrap. Anda bisa melihat bagaimana kartu ini beradaptasi dengan mode terang dan gelap.</p>
                        <a href="#" class="btn btn-primary rounded-md">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Contoh</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control rounded-md" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email Anda">
                            <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>
                        </div>
                        <button type="submit" class="btn btn-success rounded-md">Kirim</button>
                    </div>
                </div>
            </div>
        </div>

        <p class="mt-5 text-center text-muted">Aplikasi ini dibuat dengan PHP, HTML, MySQL, dan Bootstrap.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // JavaScript untuk Toggle Dark Mode
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const body = document.body;

            // Fungsi untuk menerapkan atau menghapus dark mode
            function applyDarkMode(isEnabled) {
                if (isEnabled) {
                    body.classList.add('dark-mode');
                    darkModeToggle.textContent = 'Mode Terang'; // Ubah teks tombol
                } else {
                    body.classList.remove('dark-mode');
                    darkModeToggle.textContent = 'Mode Gelap'; // Ubah teks tombol
                }
            }

            // 1. Cek preferensi pengguna dari localStorage saat halaman dimuat
            // Ini akan memastikan dark mode tetap aktif jika pengguna sebelumnya mengaktifkannya
            const savedDarkModePreference = localStorage.getItem('darkMode');
            if (savedDarkModePreference === 'enabled') {
                applyDarkMode(true);
            } else {
                applyDarkMode(false); // Pastikan mode terang jika tidak ada preferensi atau 'disabled'
            }

            // 2. Tambahkan event listener ke tombol toggle
            darkModeToggle.addEventListener('click', function() {
                // Periksa apakah body saat ini memiliki kelas 'dark-mode'
                const isCurrentlyDarkMode = body.classList.contains('dark-mode');

                if (isCurrentlyDarkMode) {
                    applyDarkMode(false); // Nonaktifkan dark mode
                    localStorage.setItem('darkMode', 'disabled'); // Simpan preferensi ke localStorage
                } else {
                    applyDarkMode(true); // Aktifkan dark mode
                    localStorage.setItem('darkMode', 'enabled'); // Simpan preferensi ke localStorage
                }
            });
        });
    </script>
</body>
</html>