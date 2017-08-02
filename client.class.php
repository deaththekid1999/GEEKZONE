<?php
	 include_once 'compte.class.php';

	class client{


			 
			private $tab=array();
			private $nom;
			private $num_client;
			private $nb_compte;
			//private $compte;
		
		function __construct($nom,$num_client)
			{
				$this->nom=$nom;
				$this->num_client=$num_client;
				$this->nb_compte=0;
				$this->tab=new compte(0,0);
			//	$this->compte=new compte(0,0);
				
			}
			public function getNum_client()
			{
				return $this->num_client;
			
			}
			
			public function getNom()
			{
				return $this->nom;
			
			}
						public function getNb_compte()
			{
				return $this->nb_compte;
			
			}
			public function getTab()
			{
				return $this->tab;
			}

			public function getSolde_client()
			{
				return $this->compte->getSolde_compte();
			
			}
			public function setNum_client($num_client)
			{
				$this->num_client=$num_client;
			}
			public function setNom($nom)
			{
				$this->nom=$nom;
			}
						public function setNb_compte($nb_compte)
			{
				$this->nb_compte=$nb_compte;
			}
						public function setTab($tab)
			{
				$this->tab=$tab;
			}
			
			/*						public function setSolde_compte($solde_compte)
			{
				$this->solde_compte=$solde_compte;
			}*/
	       			public function afficher_solde_client()
			{
				echo"Le solde de votre compte est de  ::  ".$this->getSoldes_client();
			}
					public function getSoldes_client()
			{     $soldes=0;
                 foreach($this->tab as $key=>$compte)
				 {
					$soldes+=$compte->getSolde_compte();
				 
				 }
				 return $soldes;
			
			}

			
			public function ajout_compte($compte)
			{
				
				$this->nb_compte++;
				$this->tab[$this->nb_compte]=$compte;
			
			}
			

			
			
			
	
	
	}
	
	
	
	
?>