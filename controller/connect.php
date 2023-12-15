<?php

//Données permettant l'accès à la base de données tools :
$host ="bweoiwc1iny3wx3y4pel-mysql.services.clever-cloud.com";
$dbname="bweoiwc1iny3wx3y4pel";
$user="umapsgghcoyda4jm";
$password = "x6R2OtUgW4Onh1TAV6cG";

try{
	$db= new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;', $user,
		$password);
} catch (Exception $e){
	die('Error :'.$e->getMessage());
}
