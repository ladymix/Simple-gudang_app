<?php
include 'includes/koneksi.php';

// Sertakan autoload dari Composer (WAJIB jika menggunakan PhpSpreadsheet)
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$filter_kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';

$where_clause = "";
if (!empty($filter_kategori)) {
    $where_clause = "WHERE kategori = '" . mysqli_real_escape_string($koneksi, $filter_kategori) . "'";
}

$query_stok = "SELECT id_barang, nama_barang, kategori, stok FROM barang $where_clause ORDER BY nama_barang ASC";
$result_stok = mysqli_query($koneksi, $query_stok);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header Kolom
$sheet->setCellValue('A1', 'ID Barang');
$sheet->setCellValue('B1', 'Nama Barang');
$sheet->setCellValue('C1', 'Kategori');
$sheet->setCellValue('D1', 'Stok Saat Ini');

// Isi data
$row_num = 2;
while ($row = mysqli_fetch_assoc($result_stok)) {
    $sheet->setCellValue('A' . $row_num, $row['id_barang']);
    $sheet->setCellValue('B' . $row_num, $row['nama_barang']);
    $sheet->setCellValue('C' . $row_num, $row['kategori']);
    $sheet->setCellValue('D' . $row_num, $row['stok']);
    $row_num++;
}

// Auto-size kolom
foreach (range('A', 'D') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Atur header untuk download file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Laporan_Stok_Barang_' . date('Ymd_His') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

mysqli_close($koneksi);
exit();
?>