<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On donne une valeur par défaut si la donnée "nom" n'existe pas

// - On donne une valeur par défaut si la donnée "salutation" n'existe pas

// - On donne une valeur par défaut si la donnée "titre" n'existe pas

// - On donne une valeur par défaut si la donnée "paragraphe" n'existe pas.

// Préparation de l'affichage des champs du formulaire
// - Champ de texte "nom"

// - Création de la datalist "noms"

// - Menu déroulant "salutation"

// - Menu déroulant "titre"

// - Boutons radio "paragraphe"

// Préparation de l'affichage final

?><!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Une lettre personnalisée</title>
		<link rel="stylesheet" href="css/lettre.css">
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="interface">
			<?php include "includes/headerfooternav.inc.php"; ?>
			<div class="app">
				<h2>Voici la lettre</h2>
				<!-- La lettre finale -->
				<form action="compil.php" method="get">
					<h2>Modifier la lettre</h2>
					<div>
						<label for="nom">Destinataire : </label>
						<!-- Le champ de texte -->
						<!-- Le datalist -->
					</div>
					<div>
						<label for="salutation">Salutation : </label>
						<!-- Le select salutation -->
					</div>
					<div>
						<label for="titre">Titre du destinataire : </label>
						<!-- Le select titre -->
					</div>
					<div>
						<label for="paragraphe">Paragraphe : </label>
						<!-- La série de boutons radio -->
					</div>
					<div>
						<input type="submit"/>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
