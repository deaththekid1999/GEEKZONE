<?php

	class compte{
	
			
			private $solde_compte;
			private $num_compte;
			
						function __construct($num_compte,$solde_compte)
			{
				$this->num_compte=$num_compte;
				$this->solde_compte=$solde_compte;
			}
						public function getSolde_compte()
			{
			
				return $this->solde_compte;
			}
			public function getNum_compte()
			{
				return $this->num_compte;
			}
			public function setSolde_compte($solde_compte)
			{
				$this->solde_compte=$solde_compte;
			}
			public function setNum_compte($num_compte)
			{
				$this->num_compte=$num_compte;
			}
			
			
			public function depot($montant){
			
				  $this->solde_compte+=$montant;
			
			}
			
			public function retrait($montant1)
			{
				 $this->solde_compte-=$montant1;
			}
			

			public function afficher()
			{
				echo"Le solde du compte n*  ::  ".$this->getNum_compte()."est   ::".$this->getSolde_compte().'<br/>';
			}
			
			public function virer($montan2,$compte)
			{
				$this->solde_compte-=$montan2;
				$compte->solde_compte+=$montan2;
			
			}

			
	
	
	
	}


?>