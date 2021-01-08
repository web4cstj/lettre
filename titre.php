<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas
// - On redirige vers index.php si la donnée "salutation" n'existe pas

// Récupération des données

// Création de l'affichage des 2 champs cachés

// Création de l'affichage du menu déroulant

?><!DOCTYPE html>
<html lang="fr">
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
						<!-- Champ select -->
					</div>
					<div>
						<input type="submit"/>
						<!-- 2 champs cachés -->
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
