<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="yellow">
	<?php
		echo" Without Arg & return<br>";
		function Name1()
		{
			echo "Darshan<br>";
		}
		Name1();
		echo"----------------------------------------<br>";
		echo" With Arg & Without return<br>";
		function Name2($n)
		{
			echo "Darshan<br>";
		}
		Name2("Darshan");
		echo"----------------------------------------<br>";
		echo" Without Arg & with return<br>";
		function Name3()
		{
			return"Darshan<br>";
		}
		$a=Name3();
		echo $a;
		echo"----------------------------------------<br>";
		echo" With Arg & return<br>";
		function Name4($n)
		{
			return $n;
		}
		echo Name4("Darshan");
?>
</body>
</html>