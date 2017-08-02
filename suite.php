
<?php
		function tirage()
		{
		$trouver1=0;
			$trouver2=0;
			$trouver3=0;

		 while($trouver1==0 || $trouver2==0 || $trouver3==0){		
		 $trouver1=0;
			$trouver2=0;
			$trouver3=0;
					$tab=array(0,0,0);
					$i=0;
					while($i<=2)
					{
						$tab[$i]=rand(0,10000);
						$i++;
					}
					if(($tab[0]%2)==0)
					{
						$trouver1=1;
					}
					
					if(($tab[1]%2)!=0)
					{
						$trouver2=1;
					}
					
					if(($tab[2]%2)!=0)
					{
						$trouver3=1;
					}
					
					
			
			}
			echo" bon triplet ".$tab[0]." ".$tab[1]." ".$tab[2];
		
		
		}
		tirage();
?>
