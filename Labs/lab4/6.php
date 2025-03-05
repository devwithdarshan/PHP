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
		<label for="day">Enter NUmber (sepret by ,)</label>
		<input type="text" name="no" placeholder="Enter  Number " required>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$No= $_POST['no'];
			$a= array_map('intval',explode(',',$No));
			$sum=0;
			foreach($a as $n){
				if($n%3==0 || $n%5==0){
					$sum+=$n;
					}
				}
			echo "Sum is $sum";
			}
	?>
</body>
</html>