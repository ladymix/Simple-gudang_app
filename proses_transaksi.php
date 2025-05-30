<?php
session_start();
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jenis_transaksi = mysqli_real_escape_string($koneksi, $_POST['jenis_transaksi']);
    $id_barang = (int)$_POST['id_barang'];
    $jumlah = (int)$_POST['jumlah'];
    $keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);
    $id_karyawan = isset($_POST['id_karyawan']) ? (int)$_POST['id_karyawan'] : NULL;

    // Ambil data barang untuk mengetahui kategori dan stok saat ini
    $barang_data_query = mysqli_query($koneksi, "SELECT nama_barang, kategori, stok FROM barang WHERE id_barang = $id_barang");
    $barang_data = mysqli_fetch_assoc($barang_data_query);

    if (!$barang_data) {
        $_SESSION['message'] = "Barang tidak ditemukan.";
        $_SESSION['message_type'] = "danger";
        header("Location: transaksi.php?jenis=" . $jenis_transaksi);
        exit();
    }

    $nama_barang = $barang_data['nama_barang'];
    $kategori_barang = $barang_data['kategori'];
    $stok_saat_ini = $barang_data['stok'];

    if ($jenis_transaksi == 'masuk') {
        $new_stok = $stok_saat_ini + $jumlah;

        // Mulai transaksi database
        mysqli_begin_transaction($koneksi);
        try {
            // 1. Catat transaksi
            $query_transaksi = "INSERT INTO transaksi (id_barang, jenis_transaksi, jumlah, keterangan) VALUES ($id_barang, 'Masuk', $jumlah, '$keterangan')";
            if (!mysqli_query($koneksi, $query_transaksi)) {
                throw new Exception("Gagal mencatat transaksi masuk: " . mysqli_error($koneksi));
            }

            // 2. Update stok barang
            $query_update_stok = "UPDATE barang SET stok = $new_stok WHERE id_barang = $id_barang";
            if (!mysqli_query($koneksi, $query_update_stok)) {
                throw new Exception("Gagal memperbarui stok barang: " . mysqli_error($koneksi));
            }

            mysqli_commit($koneksi);
            $_SESSION['message'] = "Transaksi Barang Masuk untuk '$nama_barang' sejumlah $jumlah berhasil!";
            $_SESSION['message_type'] = "success";

        } catch (Exception $e) {
            mysqli_rollback($koneksi);
            $_SESSION['message'] = "Terjadi kesalahan: " . $e->getMessage();
            $_SESSION['message_type'] = "danger";
        }

    } elseif ($jenis_transaksi == 'keluar') {
        if ($jumlah > $stok_saat_ini) {
            $_SESSION['message'] = "Jumlah keluar ($jumlah) melebihi stok tersedia ($stok_saat_ini) untuk barang '$nama_barang'.";
            $_SESSION['message_type'] = "warning";
            header("Location: transaksi.php?jenis=" . $jenis_transaksi);
            exit();
        }

        if ($id_karyawan === NULL) {
            $_SESSION['message'] = "Karyawan harus dipilih untuk transaksi barang keluar.";
            $_SESSION['message_type'] = "warning";
            header("Location: transaksi.php?jenis=" . $jenis_transaksi);
            exit();
        }

        $new_stok = $stok_saat_ini - $jumlah;

        // Mulai transaksi database
        mysqli_begin_transaction($koneksi);
        try {
            // 1. Catat transaksi keluar
            $query_transaksi = "INSERT INTO transaksi (id_barang, jenis_transaksi, jumlah, keterangan, id_karyawan) VALUES ($id_barang, 'Keluar', $jumlah, '$keterangan', $id_karyawan)";
            if (!mysqli_query($koneksi, $query_transaksi)) {
                throw new Exception("Gagal mencatat transaksi keluar: " . mysqli_error($koneksi));
            }
            $last_transaksi_id = mysqli_insert_id($koneksi); // Ambil ID transaksi yang baru saja dibuat

            // 2. Update stok barang
            $query_update_stok = "UPDATE barang SET stok = $new_stok WHERE id_barang = $id_barang";
            if (!mysqli_query($koneksi, $query_update_stok)) {
                throw new Exception("Gagal memperbarui stok barang: " . mysqli_error($koneksi));
            }

            // 3. Jika perkakas, catat di tabel peminjaman
            if ($kategori_barang == 'Perkakas') {
                $tanggal_kembali = isset($_POST['tanggal_kembali']) && !empty($_POST['tanggal_kembali']) ? "'" . mysqli_real_escape_string($koneksi, $_POST['tanggal_kembali']) . "'" : "NULL";
                $catatan_peminjaman = mysqli_real_escape_string($koneksi, $_POST['catatan_peminjaman']);

                $query_peminjaman = "INSERT INTO peminjaman (id_transaksi_keluar, id_barang, id_karyawan, tanggal_pinjam, tanggal_kembali, status_peminjaman, catatan)
                                     VALUES ($last_transaksi_id, $id_barang, $id_karyawan, NOW(), $tanggal_kembali, 'Dipinjam', '$catatan_peminjaman')";
                if (!mysqli_query($koneksi, $query_peminjaman)) {
                    throw new Exception("Gagal mencatat peminjaman perkakas: " . mysqli_error($koneksi));
                }
            }

            mysqli_commit($koneksi);
            $_SESSION['message'] = "Transaksi Barang Keluar untuk '$nama_barang' sejumlah $jumlah berhasil!";
            $_SESSION['message_type'] = "success";

        } catch (Exception $e) {
            mysqli_rollback($koneksi);
            $_SESSION['message'] = "Terjadi kesalahan: " . $e->getMessage();
            $_SESSION['message_type'] = "danger";
        }
    }
}

mysqli_close($koneksi);
header("Location: transaksi.php?jenis=" . $jenis_transaksi);
exit();
?>