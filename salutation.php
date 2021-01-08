<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas
if (!isset($_GET['nom'])) {
	header("location:index.php");
	exit;
}
// Récupération de la donnée
$nom = $_GET['nom'];

// Création de l'affichage du champ invisible "nom"
$inputNom = '<input type="hidden" name="nom" value="'.$nom.'" />';

// Création de l'affichage du menu déroulant
$selectSalutation = '<select name="salutation" id="salutation">';
foreach($salutations as $indice=>$mot) {
	$selectSalutation .= '<option value="'.$indice.'">'.$mot.'</option>';
}
$selectSalutation .= '</select>';
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/lettre.css"/>
		<title>Lettre - Salutation</title>
	</head>
	<body>
		<div class="interface">
			<?php include "includes/headerfooternav.inc.php"; ?>
			<div class="app">
				<form action="titre.php" method="get">
					<h2>Choisissez une formule de salutation</h2>
					<div>
						<label for="salutation">Salutation : </label>
						<!-- Champ select -->
						<?php echo $selectSalutation // Affichage du menu déroulant ?>
					</div>
					<div>
						<input type="submit"/>
						<!-- Champ caché -->
						<?php echo $inputNom ?>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
