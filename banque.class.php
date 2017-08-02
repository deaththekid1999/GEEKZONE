<?php
		include_once 'client.class.php';
		include_once 'compte.class.php';
		private $tab_client=array();
		private $nb_client;
		
		function __construct()
		{
			$this->tab_client=new client("QUENUM",001);
			$this->nb_client=0;
		
		}
		function ajout_client($client)
		{
			$this->nb_client++;
			$this->tab_client[$this->nb_client]=$client;
		
		}
		function bilan_client($client)//$client c'est la case du tableau qui corespond au client rechercher
		{
			echo "Client n¤ ::". $client->getNum_client()."\n"."NOM : ". $this->getNom()."\n";
			foreach($client->tab as $key=>$valeur)
			{
				$valeur->afficher();
			}
			echo "solde total :: ".$client->getSoldes_client()."\n";
		}
		
		function afficher_bilan()
		{
			foreach($this->tab_client as $key=>$valeur)
			{
				$valeur->bilan_client();
			}
		
		}


?>