<form action="handle-post.php" method="post">
<label for="name">Nama:</label>
<input type="text" id="name" name="name">

<label for="email">Email:</label>
<input type="email" id="email" name="email">

<input type="submit" value="Kirim">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil data dari field formulir
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Menampilkan data yang dikirimkan
  echo "Nama: " . $name . "<br>";
  echo "Email: " . $email;
} else {
  // Jika formulir tidak dikirim dengan metode POST
  echo "Metode pengiriman formulir tidak valid.";
  echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
}
?>
