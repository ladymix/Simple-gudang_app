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