<?php
include "includes/donnees.inc.php";
// Vérification et récupération des données attendues
// - On donne une valeur par défaut si la donnée "nom" n'existe pas
$nom = "";
if (isset($_GET['nom'])) {
	$nom = $_GET['nom'];
}
// - On donne une valeur par défaut si la donnée "salutation" n'existe pas
$salutation = "0";
if (isset($_GET['salutation'])) {
	$salutation = $_GET['salutation'];
}
// - On donne une valeur par défaut si la donnée "titre" n'existe pas
$titre='M.';
if (isset($_GET['titre'])) {
	$titre = $_GET['titre'];
}
// - On donne une valeur par défaut si la donnée "paragraphe" n'existe pas.
$paragraphe = "0";
if (isset($_GET['paragraphe'])) {
	$paragraphe = $_GET['paragraphe'];
}

// Préparation de l'affichage des champs du formulaire
// - Champ de texte "nom"
$inputNom = '<input type="text" name="nom" id="nom" value="'.$nom.'" />';

// - Menu déroulant "salutation"
$selectSalutation = '<select name="salutation" id="salutation">';
foreach($salutations as $indice=>$mot) {
	if ($indice == $salutation) $selectSalutation .= '<option value="'.$indice.'" selected="selected">'.$mot.'</option>';
	else $selectSalutation .= '<option value="'.$indice.'">'.$mot.'</option>';
}
$selectSalutation .= '</select>';

// - Menu déroulant "titre"
$selectTitre = '<select name="titre" id="titre">';
foreach($titres as $indice=>$mot) {
	$selected = '';
	if ($indice==$titre) $selected = ' selected="selected"';
	$selectTitre .= '<option value="'.$indice.'"'.$selected.'>'.$mot.'</option>';
}
$selectTitre .= '</select>';

// - Boutons radio "paragraphe"
$radioParagraphe = '<div>';
foreach($paragraphes as $indice=>$txtParagraphe) {
	$checked = ($indice==$titre) ? ' checked="checked"' : '';
	$radioParagraphe .= '<p><label>';
	$radioParagraphe .= '<input name="paragraphe" type="radio" value="'.$indice.'"'.$checked.' /> ';
	$radioParagraphe .= substr($txtParagraphe, 0, 100).'...';
	$radioParagraphe .= '</label></p>';
}
$radioParagraphe .= '</div>';

// Préparation de l'affichage final
$lettre = '<p>'.$salutations[$salutation].' '.$titres[$titre].' '.$nom.',</p>';
$lettre .= '<p>'.$paragraphes[$paragraphe].'</p>';
$lettre = '<div>'.$lettre.'</div>';
?><!DOCTYPE html>
<html>
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
				<div class="lettre">
					<?php echo $lettre; // Affichage de la liste de boutons de radio ?>
				</div>
				<form action="compil.php" method="get">
					<h2>Modifier la lettre</h2>
					<div>
						<label for="nom">Destinataire : </label>
						<?php echo $inputNom // Affichage du champ de texte ?>
					</div>
					<div>
						<label for="salutation">Salutation : </label>
						<?php echo $selectSalutation // Affichage du menu déroulant ?>
					</div>
					<div>
						<label for="titre">Titre du destinataire : </label>
						<?php echo $selectTitre; // Affichage du menu déroulant ?>
					</div>
					<div>
						<label for="paragraphe">Paragraphe : </label>
						<?php echo $radioParagraphe; // Affichage de la liste de boutons de radio ?>
					</div>
					<div>
						<input type="submit"/>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
