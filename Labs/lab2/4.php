<?php
	$a = 1;
	$b = 3;
	$c = 5;
	if ($a>$b && a>c) 
		{
			echo "$a"," is Greatest Number";
		}	
	elseif($a<$b && $c<$b)
	 	{
	 		echo "$b"," is Greatest Number";
		}
	elseif($a==$b)
	 	{
	 		echo "$a "," $b"," Both are same";
		}
	elseif($a==$c)
	 	{
	 		echo "$a "," $c"," Both are same";
		}
	elseif($c==$b)
	 	{
	 		echo "$c "," $b"," Both are same";
		}		
	else{
			echo "$c"," is Greatest Number ";
		}
?>