<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas
// - On redirige vers index.php si la donnée "salutation" n'existe pas
// - On redirige vers index.php si la donnée "titre" n'existe pas
// - On redirige vers index.php si la donnée "paragraphe" n'existe pas

// Récupération des données

// Création de l'affichage final

?><!DOCTYPE html>
<html lang="fr">
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
				<!-- La lettre finale -->
			</div>
		</div>
	</body>
</html>
