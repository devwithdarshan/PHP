<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body bgcolor="green">
	<?php
		$a= array(
		array(1,2,3),
		array(4,5,6),
		array(7,8,9));
		echo "<h2> Multidimation array</h2>";
		echo "<ul>";
		foreach ($a as $arry) {
			foreach($arry as $a1){
				echo "<li> $a1 </li>";
			}
		}
		echo "</ul>";
	?>
</body>
</html>
