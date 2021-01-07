<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On redirige vers index.php si la donnée "nom" n'existe pas
// - On redirige vers index.php si la donnée "salutation" n'existe pas
// - On redirige vers index.php si la donnée "titre" n'existe pas
if (!isset($_GET['nom']) || !isset($_GET['salutation']) || !isset($_GET['titre'])) {
	header("location:index.php");
	exit;
}

// Récupération des données
$nom = $_GET['nom'];
$salutation = $_GET['salutation'];
$titre = $_GET['titre'];

// Préparation de la liste de boutons radio
$radioParagraphe = '<div>';
foreach($paragraphes as $indice=>$txtParagraphe) {
	$radioParagraphe .= '<p><label>';
	if ($indice === 0) {
		$radioParagraphe .= '<input name="paragraphe" type="radio" value="'.$indice.'" checked="checked" /> ';
	} else {
		$radioParagraphe .= '<input name="paragraphe" type="radio" value="'.$indice.'" /> ';
	}
	$radioParagraphe .= substr($txtParagraphe, 0, 100).'...';
	$radioParagraphe .= '</label></p>';
}
$radioParagraphe .= '</div>';

?><!DOCTYPE html>
<html>
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
						<?php echo $radioParagraphe; // Affichage de la liste de boutons de radio ?>
					</div>
					<div>
						<input type="submit"/>
						<!-- Il manquait quelque chose ici -->
						<input type="hidden" name="nom" value="<?php echo $nom ?>" />
						<input type="hidden" name="salutation" value="<?php echo $salutation ?>" />
						<input type="hidden" name="titre" value="<?php echo $titre ?>" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
