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
			$a=20;
			$b=20;
			echo 'Add '.($a+$b).'<br>';
			echo 'Sub  '.($a-$b).'<br>';
			echo 'Div  '.($a/$b).'<br>';
			echo 'Mult '.($a*$b).'<br>';
		}
		Name1();
		echo"----------------------------------------<br>";
		echo" With Arg & Without return<br>";
		function Name2($a,$b)
		{
			echo 'Add '.($a+$b).'<br>';
			echo 'Sub  '.($a-$b).'<br>';
			echo 'Div  '.($a/$b).'<br>';
			echo 'Mult '.($a*$b).'<br>';
		}
		Name2(20,20);
		echo"----------------------------------------<br>";
		echo" Without Arg & with return<br>";
		function Name3()
		{	
			$a=10;
			$b=10;
			return[
				'Add '=>($a+$b),
				'Sub  '=>($a-$b),
				'Div  '=>($a/$b),
				'Mult '=>($a*$b),
			];
		}
		$a=Name3();
		foreach ($a as $key => $value) {
			echo "$key : $value <br>";
		}
		echo"----------------------------------------<br>";
		echo" With Arg & return<br>";
		function Name4($a,$b)
		{	
			
			return[
				'Add '=>($a+$b),
				'Sub  '=>($a-$b),
				'Div  '=>($a/$b),
				'Mult '=>($a*$b),
			];
		}
		$a=Name4(10,10);
		foreach ($a as $key => $value) {
			echo "$key : $value <br>";
		}
?>
</body>
</html>