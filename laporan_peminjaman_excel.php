<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

$query_peminjaman = "SELECT p.id_peminjaman, p.tanggal_pinjam, p.tanggal_kembali, p.status_peminjaman, p.catatan,
                     b.nama_barang, k.nama_karyawan
                     FROM peminjaman p
                     JOIN barang b ON p.id_barang = b.id_barang
                     JOIN karyawan k ON p.id_karyawan = k.id_karyawan
                     $where_sql
                     ORDER BY p.tanggal_pinjam DESC";
$result_peminjaman = mysqli_query($koneksi, $query_peminjaman);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Peminjaman');
$sheet->setCellValue('B1', 'Nama Barang');
$sheet->setCellValue('C1', 'Karyawan Peminjam');
$sheet->setCellValue('D1', 'Tanggal Pinjam');
$sheet->setCellValue('E1', 'Tgl Estimasi/Aktual Kembali');
$sheet->setCellValue('F1', 'Status');
$sheet->setCellValue('G1', 'Catatan');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_peminjaman)) {
    $sheet->setCellValue('A' . $row_num, $row['id_peminjaman']);
    $sheet->setCellValue('B' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('C' . $row_num, $row['nama_karyawan']);
    $sheet->setCellValue('D' . $row_num, date('d-m-Y H:i:s', strtotime($row['tanggal_pinjam'])));
    $sheet->setCellValue('E' . $row_num, $row['tanggal_kembali'] ? date('d-m-Y H:i:s', strtotime($row['tanggal_kembali'])) : '-');
    $sheet->setCellValue('F' . $row_num, $row['status_peminjaman']);
    $sheet->setCellValue('G' . $row_num, $row['catatan']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'G') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Peminjaman_Perkakas_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>