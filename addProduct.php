<?php
require_once ('Views/header.php');
// Sur cette page, vous devez créer le formulaire pour la création des produits
?>

<form action="./controller/addProductController.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Outils</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prix TTC</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
  </div>

  <!-- Ajout du paramètre image (colonne supplémentaire dans la table avec l'accès pour chaque image) -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Accès à l'image</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>