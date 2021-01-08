<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas
// - On redirige vers index.php si la donnée "salutation" n'existe pas
// - On redirige vers index.php si la donnée "titre" n'existe pas
// - On redirige vers index.php si la donnée "paragraphe" n'existe pas
if (!isset($_GET['nom']) || !isset($_GET['salutation']) || !isset($_GET['titre']) || !isset($_GET['paragraphe'])) {
	header("location:index.php");
	exit;
}

// Récupération des données
$nom = $_GET['nom'];
$salutation = intval($_GET['salutation']);
$titre = $_GET['titre'];
$paragraphe = intval($_GET['paragraphe']);

// Création de l'affichage final
$lettre = '';
$lettre .= '<div class="lettre">';
$lettre .= '<p>'.$salutations[$salutation].' '.$titres[$titre].' '.$nom.',</p>';
$lettre .= '<p>'.$paragraphes[$paragraphe].'</p>';
$lettre .= '</div>';

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
				<?php echo $lettre; // Affichage de la lettre ?>
			</div>
		</div>
	</body>
</html>
