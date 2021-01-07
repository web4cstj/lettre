<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers nom.php si la donnée "nom" n'existe pas

if (!isset($_GET['nom'])) {
	header("location:nom.php");
	exit;
}
$nom = $_GET['nom'];

// Préparation de l'affichage du menu déroulant
$selectSalutation = '<select name="salutation" id="salutation">';
foreach($salutations as $indice=>$mot) {
	$selectSalutation .= '<option value="'.$indice.'">'.$mot.'</option>';
}
$selectSalutation .= '</select>';
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/lettre.css"/>
		<title>Lettre - Salutation</title>
	</head>
	<body>
		<div class="interface">
			<?php include "includes/headerfooternav.inc.php"; ?>
			<div class="app">
				<h2>Choisissez une formule de salutation</h2>
				<form action="titre.php" method="get">
					<div>
						<label for="salutation">Salutation : </label>
						<?php echo $selectSalutation // Affichage du menu déroulant ?>
					</div>
					<div>
						<input type="submit"/>
						<!-- Il manquait quelque chose ici -->
						<input type="hidden" name="nom" value="<?php echo $nom ?>" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
