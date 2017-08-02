<?php

namespace config;
use \PDO;
class parameters{
		$db= new PDO('mysql:host=localhost ; dbname=etudes','root','');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		return $db;
}

$db=new parameters();
$liste=$db->connect()->query("select ");
//query(); permet de faire des requetes daffichage
//exec(); permet de faire des requetes de modification des db