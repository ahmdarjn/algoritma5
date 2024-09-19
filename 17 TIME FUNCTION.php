<?php
$sekarang = time();
echo $sekarang;
echo "<hr>";
echo date('Y-m-d H:i:s');
echo "<hr>";
date_default_timezone_set('Asia/Jakarta');
echo date('Y-m-d H:i:s');
echo "<hr>";
$tomorrow = strtotime("tomorrow");
echo date('Y-m-d', $tomorrow);
$nextWeek = strtotime("+1 week");
echo date('Y-m-d', $nextWeek);
echo "<hr>";
$date = new DateTime();
$date->add(new DateInterval('P10D')); // menambahkan 10 hari
echo $date->format('Y-m-d');
echo "<hr>";
if (checkdate(02, 29, 2023)) {
    echo "Tanggal valid!";
  } else {
    echo "Tanggal tidak valid!";
    echo "<hr>";
  }
  echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
?>
