<?php
function nama_bulan($bulan) {
	$nama_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	
}
// date('n') akan menghasilkan bulan sekarang dalam bentuk 1 digit, misal 3 untuk Januari
$bulan = nama_bulan(date('n')); // Hasil Maret 
echo $bulan . ' ' . date('Y'); // Hasil Maret 2016
echo "<hr>";
function report($bulan) {
	if ($bulan < 3) {
		$status = 'Report belum tersedia';
	} else {
		$status = 'Report sudah tersedia';
	}
	return $status;
}
echo report(2); // Hasil Report belum tersedia;
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";