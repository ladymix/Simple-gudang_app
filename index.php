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

<h1 class="mb-4">Dashboard</h1>

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