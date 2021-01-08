<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas
// - On redirige vers index.php si la donnée "salutation" n'existe pas
// - On redirige vers index.php si la donnée "titre" n'existe pas

// Récupération des données

// Création des champs cachés

// Création de la liste de boutons radio

?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/lettre.css"/>
		<title>Lettre - Paragraphe</title>
	</head>
	<body>
		<div class="interface">
			<?php include "includes/headerfooternav.inc.php"; ?>
			<div class="app">
				<form action="lettre.php" method="get">
					<h2>Choisissez le message</h2>
					<div>
						<label for="paragraphe">Paragraphe : </label>
						<!-- Série de boutons radio -->
					</div>
					<div>
						<input type="submit"/>
						<!-- 3 champs cachés -->
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
