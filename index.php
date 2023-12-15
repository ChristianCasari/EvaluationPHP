<?php
require_once('Views/header.php');
//liaison aevc le fichier connect.php où se trouent les éléments nécessaire à la connexion avec la table tools
include './controller/connect.php';

$req= $db->prepare('SELECT * FROM tools');
$req->execute(array());
$data = $req->fetchAll();
// var_dump($data); Pour vérifier le bon accès et la récupérartion de la base de données tools = OK.
?>


<div id="description">
	<h1>Perceuse visseuse</h1>
	<p>
		Vous envisagez de percer, visser ou encore forer des pierres dures ou du béton ? Découvrez ci-dessous notre sélection de perceuses visseuses adaptées à tous vos besoins.
	</p>
	<p>
		Polyvalent, la <b>perceuse visseuse</b> est conçue pour percer des trous et visser rapidement et efficacement lorsque vous monter des étagères, assembler des meubles ou réaliser des projets de rénovation.<br/>
		La <b>perceuse visseuse d’angle</b> est conçue pour une utilisation dans les endroits difficiles d’accès, offrant précision et confort dans des environnements étroits.
	</p>
	<p>
		Pour vos travaux de perçage dans les charpentes en bois et en métal, la <b>perceuse de charpente</b> est l'outil idéal pour percer des diamètres plus importants.<br/>
		La <b>perceuse à percussion</b> permet de percer dans divers matériaux tels que le bois, le métal et même la brique, idéale tous vos travaux de perçage exigeants.
	</p>
	<p class="more"><a>Voir plus</a> ></p>
	<a href="./addProduct.php" class="btn btn-primary">Créer un produit</a><br/>
</div>
<div class="d-flex flex-row ">
<?php foreach ($data as $k=>$v):
?>
<div class="card ms-2" style="width: 18rem;">
	<img src="" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title"><?= $v['name']?></h5>
		<p class="card-text"><?= $v['description']?></p>
		<p> Prix TTC : <?=$v['price']?> €</p>
		<a href="#" class="btn btn-primary">Ajouter au panier</a>

	<!-- ajout d'un bouton pour supprimer un outils : -->
	<!-- Ce bouton renvoi la demande de suppression au fichier deleteProductController.php qui va réaliser la suppression : -->
		<a href="./controller/deleteProductController.php?id=<?= $v['id'] ?>" class="btn btn-danger">Supprimer l'outil</a>

	<!-- ajout d'un bouton pour modifier un outils : -->
	<!-- Ce bouton renvoi la demande de modification au fichier updateProduct.php qui va présenter le formulaire : -->
		<a href="updateProduct.php?id=<?= $v['id'] ?>" class="btn btn-primary">Mettre à jour l'outil</a>

	</div>
</div>

<?php endforeach; ?>
</div>