<?php
// dans cette page on gere l'action avec la base de donnée

require_once ('connect.php');
// var_dump ($_POST); Vérifcation récupération des données : OK

$req=$db->prepare('UPDATE tools SET name=?, description=?, price=? WHERE id=?');


$req->execute(array( 
    "name"=>htmlspecialchars($_POST['name']),
    "description"=>htmlspecialchars($_POST['description']),
    "price"=>htmlspecialchars($_POST['price']),
    "id"=>htmlspecialchars($_POST['id'])
    
));

header('Location: ../index.php');