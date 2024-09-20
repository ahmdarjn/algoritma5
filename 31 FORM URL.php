<form action="search.php" method="get">
  Cari: <input type="text" name="query">
  <input type="submit" value="Search">
</form>
<?php
if(isset($_GET['query'])) {
  $searchTerm = $_GET['query'];
  // Proses searchTerm untuk menampilkan hasil pencarian
  if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Proses username dan password untuk autentikasi
    $param = 'buah & sayur';
echo '<a href="market.php?category='. urlencode($param) .'">Link</a>';

  }
  
}
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
