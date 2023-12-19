<?php
//Ici créer le formulaire de mise à jour des produits

require_once ("./Views/header.php");
require_once ("./controller/connect.php");

$req=$db->prepare('SELECT * FROM tools WHERE id=?');
$req->execute(array($_GET["id"]));
$data= $req->fetchAll();

?>
<form action="./controller/updateProductController.php" method="post">


<input type="hidden" name="id" value=<?= $data[0]["id"]?> />

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Nom de l'outil</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value=<?=$data[0]["name"]?> >

</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Description</label>
  <input type="text" class="form-control" id="exampleInputPassword1" name="description" value=<?=$data[0]["description"]?> >
</div>


<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Prix TTC</label>
  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value=<?=$data[0]["price"]?> >
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Accès à l'image</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" value=<?=$data[0]["image"]?> >
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>


