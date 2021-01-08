<?php
include "includes/donnees.inc.php";
// Création du champ de texte
$inputNom = '<input type="text" name="nom" id="nom" list="noms" />';

// Création de la datalist
$datalist = '';
$datalist .= '<datalist id="noms">';
foreach($nomsFictifs as $nom) {
	$datalist .= '<option value="'.$nom.'"></option>';
}
$datalist .= '</datalist>';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Une lettre personnalisée</title>
	<link rel="stylesheet" href="css/lettre.css"/>
</head>

<body>
	<div class="interface">
		<?php include "includes/headerfooternav.inc.php"; ?>
		<div class="app">
			<form action="salutation.php" method="get">
				<h2>Donnez le nom du destinataire</h2>
				<div>
					<label for="nom">Destinataire : </label>
					<!-- Champ de texte -->
					<?php echo $inputNom; ?>
					<!-- Datalist -->
					<?php echo $datalist; ?>	
				</div>
				<div>
					<input type="submit" />
				</div>
			</form>
		</div>
	</div>
</body>

</html>
