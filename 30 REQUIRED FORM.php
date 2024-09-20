<form method="post" action="proses_form.php">
  Nama: <input type="text" name="nama" required>
  Email: <input type="email" name="email" required>
  <input type="submit" value="Kirim">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Cek jika field nama dan email telah terisi
  if (empty($_POST["nama"])) {
    echo "Nama harus diisi.";
  } else {
    $nama = $_POST["nama"];
    // Lanjutkan dengan proses $nama
  }

  if (empty($_POST["email"])) {
    echo "Email harus diisi.";
  } else {
    $email = $_POST["email"];
    // Lanjutkan dengan proses $email
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = sanitize_input($_POST["nama"]);
    $email = sanitize_input($_POST["email"]);
  
    // Fungsi untuk membersihkan input
    function sanitize_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    // Contoh validasi lebih lanjut
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
      echo "Hanya huruf dan spasi yang diperbolehkan pada nama.";
    }
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Format email tidak valid.";
    }
  }
  echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
  
?>
