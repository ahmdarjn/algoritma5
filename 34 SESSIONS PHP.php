<?php
// Memulai sesi
session_start();

// Menyimpan data ke sesi
$_SESSION["namaPengguna"] = "Budi";
// Mengakses data dari sesi
echo 'Selamat Datang, ' . $_SESSION["namaPengguna"] . '!';
// Menghapus variabel "namaPengguna" dari sesi
unset($_SESSION["namaPengguna"]);

// Menghancurkan seluruh sesi
session_destroy();
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
?>
