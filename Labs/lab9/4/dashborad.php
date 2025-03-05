<?php
	session_start();
	if(!isset($_SESSION['name'])){
		header("location:Login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome!</title>
</head>
<body>
<h2 style="font: lighter; color: green;"> Welcome <?php echo ($_SESSION['name']) ?></h2>
<button><a href="Logout.php">Logout</a></button>
</body>
</html>