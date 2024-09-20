
<form method="post" action="sendmail.php">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    
    <label for="message">Pesan:</label>
    <textarea id="message" name="message"></textarea>
    
    <input type="submit" value="Kirim">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lanjutkan dengan mengolah data form
    $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if (empty($name) || empty($email) || empty($message)) {
    echo "Semua bidang harus diisi.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email tidak valid.";
    exit;
}
$to = 'tujuan@example.com'; // Ganti dengan alamat email tujuan
$subject = 'Pesan dari Website';
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Pesan terkirim dengan sukses.";
} else {
    echo "Pesan gagal dikirim.";
}
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

$message = "<html><body>";
$message .= "<p>Pesan:</p>";
$message .= "<p>" . nl2br(htmlspecialchars($message)) . "</p>";
$message .= "</body></html>";

// Fungsi mail() seperti contoh sebelumnya.

}
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
