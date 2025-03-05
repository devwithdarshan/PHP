<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>1.php</title>
</head>
<body>
	<?php
		function sum1($n){
			if($n == 0){
				return 0;
			}
			return $n+sum1($n-1);
		}
		$r=sum1(5);
		echo $r;
	?>
</body>
</html>