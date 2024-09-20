<html>
<body>
	<form method="POST" action="?action=edit">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="hidden" name="action" value="insert">
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	if ($_POST)
	{
		echo '<pre>'; 
		print_r($_GET);
		print_r($_POST);
		print_r($_REQUEST);
        echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
	}
	?>
</body>
</html>
