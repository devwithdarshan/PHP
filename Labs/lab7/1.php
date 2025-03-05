<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registration</title>
</head>
<body>
	<form method="get">
		<label> Name:- </label>
	    <input type ='text' name="name" placeholder="Name"><br>
	    <label> Email:-</label>
	    <input type ='text' name="email" placeholder="Email"><br>
	    <label> Mobile:- </label>
	    <input type ='Mobile' name="Mobile" placeholder="Mobile"><br> 
	    <input type ='submit' value='Register' name="submit">   
    </form>
    <?php
	   if(isset($_GET['submit'])){
	      $n = $_GET['name'];
	      $e = $_GET['email'];
	      $g = $_GET['Mobile'];
	      $e=[];
	      if(!preg_match("/^[a-zA-Z]{2,20}$/",$n)){
	      	$e[]="Invaild Name";
	      }
	      if(!preg_match("/^[\w\-\.]+@([\w\-]+\.)+[a-zA-Z]{2,7}$/",$e)){
	      	$e[]="Invaild Email";
	      }
	      if(!preg_match("/^\d{10}$/",$g)){
	      	$e[]="Invaild Mobile Number";
	      }
	      if(empty($e)){
	      	echo "Valid Data";
	      }
	      else{
	      	foreach ($e as $i) {
	      		echo "<h3 style='color:Red'>$e</h3><br>";
	      	}
	      }
   }
?>
</body>
</html>