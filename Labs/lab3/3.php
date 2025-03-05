<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Day</title>
</head>
<body>
	<h2>Find the day</h2>
	<form method="post">
		<label for="day">Enter A number</label>
		<input type="text" name="a" placeholder="Enter A" required><br>
		<label for="day">Enter B number</label>
		<input type="text" name="b" placeholder="Enter B" required><br>
		<label for="day">Enter Opernt number</label>
		<input type="text" name="c" placeholder="Ex  /,*,-,+" required>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$a= $_POST['a'];
			$b= $_POST['b'];
			$c= $_POST['c'];
			switch ($c) {
				case '+':
					echo " Addition is ". ($a+$b);
					break;
				case '-':
					echo "Sub is ". ($a-$b);
					break;
				case '*':
					echo "Sub is ". ($a*$b);
					break;
				case '/':
					echo "Sub is ". ($a/$b);
					break;					
				default:
					echo "Enter vaild Opernt";
					break;
			}

		}
	?>
</body>
</html>