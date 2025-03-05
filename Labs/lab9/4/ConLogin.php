<?php
	session_start();
	$n="Darshan";
	$p="123456";
	if (isset($_POST['submit'])) {
		$u=$_POST['name'];
		$pa=$_POST['Password'];
		if ($n==$u && $p==$pa)
		{
			$_SESSION['name'] = $u;
			header("Location: dashborad.php");
			exit();
		}
		else{
			echo "Invalid Username & Password";
		}
	}
	else{
		header("location: Login.php");
		exit();
	}

?>