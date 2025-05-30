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