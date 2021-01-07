<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues en POST
// - On redirige vers nom.php si la donnée "nom" n'existe pas.
//   On n'a pas à vérifier d'autres données, car on est en post.
if (!isset($_POST['nom'])) {
	header("location:nom.php");
	exit;
}
$nom = $_POST['nom'];
$salutation = $_POST['salutation'];
$titre = $_POST['titre'];
$paragraphe = $_POST['paragraphe'];

// Préparation de l'affichage final
$lettre = '<p>'.$salutations[$salutation].' '.$titres[$titre].' '.$nom.',</p>';
$lettre .= '<p>'.$paragraphes[$paragraphe].'</p>';

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/lettre.css"/>
		<title>Lettre - Final</title>
	</head>
	<body>
	<div class="interface">
		<?php include "includes/headerfooternav.inc.php"; ?>
			<div class="app">
				<h1>Voici la lettre :</h1>
				<div class="lettre"><?php echo $lettre; // Affichage de la liste de boutons de radio ?></div>
			</div>
		</div>
	</body>
</html>
