<?php
	$n="hello";
	$v="hi";
	setcookie($n,$v,time()+60);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie</title>
</head>
<body>
	<?php
		if(!isset($_COOKIE[$n])){
			echo "COOKIE name $n is set successfully";
		}
		else{
			echo "Cookie  $n is updated!<br>";
			echo "Value is :- ".$_COOKIE["$n"];
		}
	?>
</body>
</html>