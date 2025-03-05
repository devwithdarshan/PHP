<DOCTYPE html>
<html lang="en">
<head>
	<title>Display Data</title>
</head>
<body>
	<table border="3">
		<tr>
			<th>Accont No. </th>
			<th>Balance </th>
			<th>Branch </th>
		</tr>
		<tbody>
	<?php
		$con=mysqli_connect("localhost","root","","Darshan_122");
		
	if($con)
	{
		$query="SELECT * FROM Account;";
		$sql=mysqli_query($con,$query);
		while($a=mysqli_fetch_array($sql))
			{
				?>
				<tr>
					<td><?php echo $a['AccountNumber'];?></td>
					<td><?php echo $a['Balance'];?></td>
					<td><?php echo $a['Branch'];?></td>
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