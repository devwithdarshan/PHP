<?php
	$con=mysqli_connect("localhost","root","","Darshan_122");
	if($con){
		$name=$_POST['empName'];
		$Email=$_POST['empEmail'];
		$Phone=$_POST['empPhone'];
		$Query="INSERT INTO Employee(empName,empEmail,empPhone)
				VALUES('$name','$Email','$Phone');";
		$q=mysqli_query($con,$Query);
		if ($q) {
			echo '<script>
			alert("Record inserted");
			window.location.href="Display.php";</script>';
		}
		else{
			echo '<script>
			alert("Record not insert");
			window.location.href="3.php";</script>';
		}
	}

?>