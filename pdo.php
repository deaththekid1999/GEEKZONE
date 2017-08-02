<?php
function conect()
{
	$host="localhost";
	$db_name="db";
	$user="root";
	$pass="";
	$dsn="mysql:host=$host;dbname=$db_name";
	try{
	$link=new PDO($dsn,$user,$pass,array(PDO::ATTR_PERSISTENT=>true));
	}
	catch(PDOException $e)
	{
		echo 'echec de la conexion : '.$e->getMessage();
	}
}
?>