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