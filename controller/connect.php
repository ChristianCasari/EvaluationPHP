<?php
$host ="bcck185fw1xcsjy8wphm-mysql.services.clever-cloud.com";
$dbname="bcck185fw1xcsjy8wphm";
$user="u7jwbvgbvdebupxh";
$password = "i9pugnLdN4dNltu0KVlQ";

try{
	$db= new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;', $user,
		$password);
} catch (Exception $e){
	die('Error :'.$e->getMessage());
}
