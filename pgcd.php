<?php

function pgcd($a , $b)
{



		if($a==$b)
		{
			return $a;
		
		}
		else if($a >$b)
		{
			pgcd($a , $a-$b);
		
		
		}
		else
		{
			pgcd($b , $b-$a);
		
		}

 }
	

 echo pgcd(12, 2);

?>