<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

$query_transaksi = "SELECT t.id_transaksi, t.tanggal_transaksi, t.jenis_transaksi, t.jumlah, t.keterangan,
                    b.nama_barang, b.kategori, k.nama_karyawan
                    FROM transaksi t
                    JOIN barang b ON t.id_barang = b.id_barang
                    LEFT JOIN karyawan k ON t.id_karyawan = k.id_karyawan
                    $where_sql
                    ORDER BY t.tanggal_transaksi DESC";
$result_transaksi = mysqli_query($koneksi, $query_transaksi);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Transaksi');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Nama Barang');
$sheet->setCellValue('D1', 'Kategori');
$sheet->setCellValue('E1', 'Jenis Transaksi');
$sheet->setCellValue('F1', 'Jumlah');
$sheet->setCellValue('G1', 'Karyawan');
$sheet->setCellValue('H1', 'Keterangan');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_transaksi)) {
    $sheet->setCellValue('A' . $row_num, $row['id_transaksi']);
    $sheet->setCellValue('B' . $row_num, date('d-m-Y H:i:s', strtotime($row['tanggal_transaksi'])));
    $sheet->setCellValue('C' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('D' . $row_num, $row['kategori']);
    $sheet->setCellValue('E' . $row_num, $row['jenis_transaksi']);
    $sheet->setCellValue('F' . $row_num, $row['jumlah']);
    $sheet->setCellValue('G' . $row_num, $row['nama_karyawan'] ?: '-');
    $sheet->setCellValue('H' . $row_num, $row['keterangan']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'H') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Transaksi_Barang_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>