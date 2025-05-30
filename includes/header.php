<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasum Global ICBS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Inventory</a>
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