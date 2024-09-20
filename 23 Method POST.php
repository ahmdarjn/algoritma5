<html lang="en">
 
<head>
    <title>Method POST</title>
</head>
 
<body>
    <form action="" method="POST">
        <input type="text" name="nama"><br />
        <input type="number" name="umur"><br />
        <input type="submit" name="submit" value="Sumbit">
    </form>
 
    <?php
    if ($_POST) {
        echo "Nama:arjun " . $_POST["nama"];
        echo "<br/>";
        echo "Umur:16 thn " . $_POST["umur"];
        
    }
    ?>
</body>
 
</html>
