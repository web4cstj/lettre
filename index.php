<?php
include "includes/donnees.inc.php";
// Création du champ de texte

// Création de la datalist
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
					<!-- Datalist -->
				</div>
				<div>
					<input type="submit" />
				</div>
			</form>
		</div>
	</div>
</body>

</html>
