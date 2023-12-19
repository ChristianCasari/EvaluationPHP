<?php
// dans cette page on gere l'action avec la base de donnée

require_once ('connect.php');

/*var_dump ($_POST);  Vérifcation récupération des données : OK : Le formulaire fonctionne !
array(5) { ["id"]=> string(2) "10" ["name"]=> string(4) "Pack" ["description"]=> string(3) "18V" ["price"]=> string(3) "320" ["image"]=> string(43) "./img/products/milwaukee-pack-6-outils.webp" }*/


/* problème avec : $req=$db->prepare('UPDATE tools SET name=?, description=?, price=?, image=? WHERE id=?');
Tentative avec la ligne ci-dessous et cela fonctionne : */

$req=$db->prepare('UPDATE tools SET name=:name, description=:description, price=:price, image=:image WHERE id=:id');


$req->execute(array( 
    "id"=>htmlspecialchars($_POST['id']),
    "name"=>htmlspecialchars($_POST['name']),
    "description"=>htmlspecialchars($_POST['description']),
    "price"=>htmlspecialchars($_POST['price']),
    "image"=>htmlspecialchars($_POST['image'])

));

header('Location:../index.php');

/* Super tout fonctionne : ouf !
*/