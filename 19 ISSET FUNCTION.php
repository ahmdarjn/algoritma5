<?php
$var = "Halo, dunia!";

if (isset($var)) {
    echo "Variabel 'var' telah di-set.";
} else {
    echo "Variabel 'var' belum di-set.";
}
echo "<hr>";
$var1 = "PHP";
$var2 = "isset";

if (isset($var1, $var2)) {
    echo "Kedua variabel telah di-set.";
} else {
    echo "Salah satu atau kedua variabel belum di-set.";
}
echo "<hr>";
$array = array("nama" => "John", "umur" => 25);

if (isset($array["nama"])) {
    echo "Kunci 'nama' ada di array.";
} else {
    echo "Kunci 'nama' tidak ada di array.";
}

if (isset($array["alamat"])) {
    echo "Kunci 'alamat' ada di array.";
} else {
    echo "Kunci 'alamat' tidak ada di array.";
}
echo "<hr>";
$var3 = NULL;

if (isset($var3)) {
    echo "Variabel 'var3' telah di-set.";
} else {
    echo "Variabel 'var3' belum di-set atau `NULL`.";
}
echo "<hr>";
$var4 = "";

if (isset($var4) && !empty($var4)) {
    echo "Variabel 'var4' di-set dan tidak kosong.";
} else {
    echo "Variabel 'var4' kosong atau belum di-set.";
}
echo "<hr>";
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
?>