<?php
	
	$tab=array('QUENUM'=>array('prenom'=>'cadet' , 'ville'=>'cotonou' , 'age'=>18) , 'BASSIDI'=>array('prenom'=>'rodi' , 'ville'=>'tokyo' , 'age'=>21) );
    
	foreach( $tab as $key=> $valeur1)
	{
	
		echo 'NOM  :'.$key.'<br/>';
		
		foreach($valeur1 as $key1=>$prenom)
		{
			echo $key1." :".$prenom."<br/>"; 

		
		}
	
	}

?>