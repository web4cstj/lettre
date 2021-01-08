<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas

// Récupération de la donnée

// Création de l'affichage du champ invisible "nom"

// Création de l'affichage du menu déroulant

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
					</div>
					<div>
						<input type="submit"/>
						<!-- Champ caché -->
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
