<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas
// - On redirige vers index.php si la donnée "salutation" n'existe pas
if (!isset($_GET['nom']) || !isset($_GET['salutation'])) {
	header("location:index.php");
	exit;
}
// Récupération des données
$nom = $_GET['nom'];
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
		<link rel="stylesheet" href="css/lettre.css"/>
		<title>Lettre - Titre</title>
	</head>
	<body>
	<div class="interface">
		<?php include "includes/headerfooternav.inc.php"; ?>
			<div class="app">
				<form action="paragraphe.php" method="get">
					<h2>Choisissez le titre du destinataire</h2>
					<div>
						<label for="titre">Titre du destinataire : </label>
						<?php echo $selectTitre; // Affichage du menu déroulant ?>
					</div>
					<div>
						<input type="submit"/>
						<!-- Il manquait quelque chose ici -->
						<input type="hidden" name="nom" value="<?php echo $nom ?>" />
						<input type="hidden" name="salutation" value="<?php echo $salutation ?>" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
