<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body bgcolor="green">
	<?php
		$e=0;
		$o=0;
		$a= array(10,20,30,40,11,22,333,55);
		foreach ($a as $arry) {
			if($arry%2==0){
				$e++;
			}
			else{
				$o++;
			}
		}
		echo"Odd Number is $o <br>";
		echo"Even Number is $e";
	?>
</body>
</html>