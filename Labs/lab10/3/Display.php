<DOCTYPE html>
<html lang="en">
<head>
	<title>Display Data</title>
</head>
<body>
	<table border="3">
		<tr>
			<th>Employee ID </th>
			<th>Employee Name </th>
			<th>Employee Email</th>
			<th>Employee Phone</th>
			<th>Operations</th>
		</tr>
		<tbody>
	<?php
		$con=mysqli_connect("localhost","root","","Darshan_122");
		
	if($con)
	{
		$query="SELECT * FROM Employee;";
		$sql=mysqli_query($con,$query);
		while($a=mysqli_fetch_row($sql))
			{
				?>
				<tr>
					<td><?php echo $a[0];?></td>
					<td><?php echo $a[1];?></td>
					<td><?php echo $a[2];?></td>
					<td><?php echo $a[3];?></td>
					<td> <a href="Update.php?uid=<?php echo $a[0] ?> "><button>Update</button></a>
					<a href="delete.php?did=<?php echo $a[0] ?>"><button style="color: red;">Delete</button> </a></td>

				</tr>
				<?php
			}
				
	}
		else
		{
			echo "connection failed";
		}
	
?>

	</table>
		</tbody>
</body>
</html>