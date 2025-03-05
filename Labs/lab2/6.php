<?php
	$a = 70;
	if ($a=>70) 
		{
			echo "$a"," Distinction";
		}	
	elseif($a<70 and $a=>60)
	 	{
	 		echo "$a"," is First Class";
		}
	elseif($a<60 and $a=>50)
	 	{
	 		echo "$a"," is Second Class";
		}
	elseif($a<50 and $a=>40)
	 	{
	 		echo "$a"," is Pass Class";
		}		
	else{
			echo "$a"," Fail ";
		}
?>