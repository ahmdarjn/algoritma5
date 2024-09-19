<?php
echo date("Y-m-d H:i:s");  // output contoh: 2023-03-15 14:00:00
echo "<hr>";
echo date("l, d-m-Y"); // output contoh: Rabu, 15-03-2023
echo "<hr>";
date_default_timezone_set('Asia/Jakarta');
echo date("Y-m-d H:i:s"); // output akan sesuai dengan zona waktu Jakarta
echo "<hr>";
echo date("Y-m-d", strtotime("+1 week")); // menambahkan satu minggu dari tanggal saat ini
echo "<hr>";
var_dump(checkdate(2, 29, 2021)); // output: bool(false) karena tahun 2021 bukan tahun kabisat
echo "<hr>";
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";