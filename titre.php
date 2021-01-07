<?php
include "donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers nom.php si la donnée "nom" n'existe pas
if (!isset($_GET['nom'])) {
	header("location:nom.php");
	exit;
}
$nom = $_GET['nom'];

// On redirige vers salutation.php si la donnée "salutation" n'existe pas
if (!isset($_GET['salutation'])) {
	header("location:salutation.php?nom=".$nom."");
	exit;
}
$salutation = $_GET['salutation'];

// Préparation de l'affichage du menu déroulant
$selectTitre = '<select name="titre" id="titre">';
foreach($titres as $indice=>$mot) {
	$selectTitre .= '<option value="'.$indice.'">'.$mot.'</option>';
}
$selectTitre .= '</select>';
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="lettre.css"/>
		<title>Lettre - Titre</title>
	</head>
	<body>
		<h1>Choisissez le titre du destinataire</h1>
		<form action="paragraphe.php" method="get">
			<div>
				<label for="titre">Titre du destinataire : </label>
				<?php echo $selectTitre; // Affichage du menu déroulant ?>
				<input type="submit"/>
        		<!-- Il manquait quelque chose ici -->
				<input type="hidden" name="nom" value="<?php echo $nom ?>" />
				<input type="hidden" name="salutation" value="<?php echo $salutation ?>" />
			</div>
		</form>
	</body>
</html>
