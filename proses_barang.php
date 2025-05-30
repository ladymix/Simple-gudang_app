<?php
session_start(); // Mulai session untuk pesan notifikasi
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $id_barang = isset($_POST['id_barang']) ? (int)$_POST['id_barang'] : 0;
    $nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);

    if ($action == 'add') {
        // Cek duplikasi nama barang
        $check_query = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang = '$nama_barang'");
        if (mysqli_num_rows($check_query) > 0) {
            $_SESSION['message'] = "Nama barang sudah ada.";
            $_SESSION['message_type'] = "danger";
        } else {
            $query = "INSERT INTO barang (nama_barang, kategori, stok) VALUES ('$nama_barang', '$kategori', 0)";
            if (mysqli_query($koneksi, $query)) {
                $_SESSION['message'] = "Barang berhasil ditambahkan!";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
                $_SESSION['message_type'] = "danger";
            }
        }
    } elseif ($action == 'update') {
        $query = "UPDATE barang SET nama_barang = '$nama_barang', kategori = '$kategori' WHERE id_barang = $id_barang";
        if (mysqli_query($koneksi, $query)) {
            $_SESSION['message'] = "Barang berhasil diperbarui!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
            $_SESSION['message_type'] = "danger";
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id_barang = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Hapus transaksi terkait (penting untuk integrity referential)
    // Atau bisa juga atur foreign key di DB menjadi ON DELETE CASCADE
    // Untuk sederhana, kita hapus manual transaksi & peminjaman yang terkait.
    // NOTE: Ini bisa rumit jika data transaksi sudah banyak. Untuk aplikasi sederhana, ini cukup.
    // Jika ada peminjaman terkait, hapus dulu
    $query_del_peminjaman = "DELETE FROM peminjaman WHERE id_barang = $id_barang";
    mysqli_query($koneksi, $query_del_peminjaman);

    // Hapus transaksi terkait
    $query_del_transaksi = "DELETE FROM transaksi WHERE id_barang = $id_barang";
    mysqli_query($koneksi, $query_del_transaksi);

    // Baru hapus barang
    $query = "DELETE FROM barang WHERE id_barang = $id_barang";
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['message'] = "Barang berhasil dihapus!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error menghapus barang: " . mysqli_error($koneksi);
        $_SESSION['message_type'] = "danger";
    }
}

mysqli_close($koneksi);
// ... kode di atas ...
$redirect_url = "barang.php";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $redirect_url .= "?search=" . urlencode($_GET['search']);
}
header("Location: " . $redirect_url);
exit();
?>