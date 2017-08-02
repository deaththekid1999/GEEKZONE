<?php
include_once 'compte.class.php';
include_once 'client.class.php';
		$compte=new compte(255,1000);
		$compte->afficher();
		$compte->depot(25);
		$compte->afficher();
		$compte->retrait(45);
		$compte->afficher();
		$compte1=new compte(200,10000);
		$compte->virer(1000,$compte1);
		$compte->afficher();
		$compte1->afficher();
		$client=new client("QUENUM",001);
		$client->afficher_solde_client();
		$client->ajout_compte($compte);
		$client->afficher_solde_client();
		


?>