<?php
ob_start();
include "connect.php";
//var_dump ($_GET['id']); Vérification ok c'est bien les éléments de l'outil à effacer

// récupère les élements de l'outil à effacer et l'efface de la base de donnée
$req=$db->prepare('DELETE FROM tools WHERE id=?');
$req->execute(array($_GET['id']));

ob_end_flush(); 
header('Location: ../index.php');

// bien supprimé de la base de donnée : vérifié sous PHPMyAdmin