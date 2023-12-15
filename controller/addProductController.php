<?php
require_once ('connect.php');
// dans cette page créer les actions pour la création de produit

//var_dump ($_POST); pour vérifier que le nouvel outils entré dans le formulaire a bien été pris encompte et stocké dans $_POST =OK

//Récupération des données entrées et création du nouveau produit en retournant dans Index.php
$req=$db->prepare('INSERT INTO tools (name, description, price)
VALUES (:name, :description, :price)');

$req->execute(array( 
    "name"=>htmlspecialchars($_POST['name']),
    "description"=>htmlspecialchars($_POST['description']),
    "price"=>htmlspecialchars(intval($_POST['price']))
));

header('Location:../index.php');