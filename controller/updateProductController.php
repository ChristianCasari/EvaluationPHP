<?php
// dans cette page on gere l'action avec la base de donnée

require_once ('connect.php');
/*var_dump ($_POST); // Vérifcation récupération des données : OK : Le formulaire fonctionne !
array(4) { ["id"]=> string(1) "1" ["name"]=> string(8) "Visseuse" ["description"]=> string(6) "Moteur" ["price"]=> string(3) "360" }*/



$req=$db->prepare('UPDATE tools SET name=?, description=?, price=? WHERE id=?');


$req->execute(array( 
    "id"=>htmlspecialchars(($_POST['id'])),
    "name"=>htmlspecialchars(($_POST['name'])),
    "description"=>htmlspecialchars(($_POST['description'])),
    "price"=>htmlspecialchars(($_POST['price']))
));

header('Location:../index.php');