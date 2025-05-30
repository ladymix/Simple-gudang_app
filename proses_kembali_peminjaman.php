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