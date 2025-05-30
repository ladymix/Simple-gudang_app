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