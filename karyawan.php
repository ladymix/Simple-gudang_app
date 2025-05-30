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