<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body bgcolor="green">
	<?php
		$arr=array(1=>"abc",2=>"pqr",3=>"xyz");
		echo "<ul>";
		foreach($arr as $key=>$value)
		{
			echo "<li> $key: $value </li>";
		}
		echo "</ul>";
?>
</body>
</html>
