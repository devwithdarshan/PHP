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
		<label for="day">Enter a Letter </label>
		<input type="text" name="l" placeholder="Enter a Letter">
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
		$v = array("a","e","i","o","u");
		if(isset($_POST['submit'])){
			$l = $_POST['l'];
		if($l == $v)
			echo "It's Vowel Letter";
		}
		else{
			echo "It's Consonants Letter";
		}
	?>
</body>
</html>