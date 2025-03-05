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
		<label for="day">Enter a day number between 1 to 7</label>
		<input type="text" name="day" placeholder="Enter Day Number">
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$day= $_POST['day'];
			switch ($day) {
				case 1:
					echo $day." is Monday";
					break;
				case 2:
					echo $day." is Tuesday";
					break;
				case 3:
					echo $day." is Wednesday";
					break;
				case 4:
					echo $day." is Thursday";
					break;	
				case 5:
					echo $day." is Friday";
					break;
				case 6:
					echo $day." is Saturday";
					break;
				case 7:
					echo $day." is Sunday";
					break;				
				default:
					echo "Enter vaild number between 1 to 7. Not vaild $day";
					break;
			}

		}
	?>
</body>
</html>