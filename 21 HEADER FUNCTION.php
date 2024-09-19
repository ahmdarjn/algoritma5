
<?php
header("Location:http://localhost/AHMAD%20ARJUN/algoritma%205/07%20Return%20value%20lebih%20dari%20satu%20nilai.php ");
exit; // Selalu panggil exit setelah header location untuk menghentikan eksekusi skrip
echo "<hr>";
header("Content-Type: application/pdf");
// Kode untuk mengirimkan file PDF
echo "<hr>";
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
header("HTTP/1.1 404 Not Found"); // Mengirimkan status error 404

// Mengatur cookie melalui header
header("Set-Cookie: nama=nilai; expires=Wed, 17 Aug 2022 13:00:00 GMT; path=/");

?>
