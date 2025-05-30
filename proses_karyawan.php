<?php
session_start();
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $id_karyawan = isset($_POST['id_karyawan']) ? (int)$_POST['id_karyawan'] : 0;
    $nama_karyawan = mysqli_real_escape_string($koneksi, $_POST['nama_karyawan']);

    if ($action == 'add') {
        // Cek duplikasi nama karyawan
        $check_query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nama_karyawan = '$nama_karyawan'");
        if (mysqli_num_rows($check_query) > 0) {
            $_SESSION['message'] = "Nama karyawan sudah ada.";
            $_SESSION['message_type'] = "danger";
        } else {
            $query = "INSERT INTO karyawan (nama_karyawan) VALUES ('$nama_karyawan')";
            if (mysqli_query($koneksi, $query)) {
                $_SESSION['message'] = "Karyawan berhasil ditambahkan!";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
                $_SESSION['message_type'] = "danger";
            }
        }
    } elseif ($action == 'update') {
        $query = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan' WHERE id_karyawan = $id_karyawan";
        if (mysqli_query($koneksi, $query)) {
            $_SESSION['message'] = "Karyawan berhasil diperbarui!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
            $_SESSION['message_type'] = "danger";
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id_karyawan = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Hapus peminjaman terkait karyawan ini
    $query_del_peminjaman = "DELETE FROM peminjaman WHERE id_karyawan = $id_karyawan";
    mysqli_query($koneksi, $query_del_peminjaman);

    // Hapus transaksi terkait karyawan ini (jika ada id_karyawan di tabel transaksi)
    $query_del_transaksi = "DELETE FROM transaksi WHERE id_karyawan = $id_karyawan";
    mysqli_query($koneksi, $query_del_transaksi);


    $query = "DELETE FROM karyawan WHERE id_karyawan = $id_karyawan";
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['message'] = "Karyawan berhasil dihapus!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error menghapus karyawan: " . mysqli_error($koneksi);
        $_SESSION['message_type'] = "danger";
    }
}

mysqli_close($koneksi);
// ... kode di atas ...
$redirect_url = "karyawan.php";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $redirect_url .= "?search=" . urlencode($_GET['search']);
}
header("Location: " . $redirect_url);
exit();
?>