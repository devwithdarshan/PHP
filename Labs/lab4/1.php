<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body bgcolor="green">
	<?php
		$a= array(10,20,30);
		echo "<h2> Using for loop</h2>";
		echo "<ul>";
		for ($i=0; $i < count($a) ; $i++) { 
			echo "<li> $a[$i] </li>";
		}
		echo "</ul>";
		echo "<h2> Using foreach loop</h2>";
		echo "<ul>";
		foreach ($a as $arry) {
			echo "<li> $arry </li>";
		}
		echo "</ul>";
	?>
</body>
</html>