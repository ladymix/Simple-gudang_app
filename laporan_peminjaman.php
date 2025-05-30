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