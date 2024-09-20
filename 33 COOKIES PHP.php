<?php
// Membuat cookie yang berlaku selama satu jam
setcookie("user", "Ahmad arjun trisula", time() + (3600), "/");
if(isset($_COOKIE["user"])) {
    echo "Selamat datang " . $_COOKIE["user"];
} else {
    echo "Selamat datang, tamu!";
}
// Mengatur expiry time ke satu jam yang lalu
setcookie("user", "", time() - 3600);

echo "<p><strong><i>By :Ahmad arjun trisula</strong>";