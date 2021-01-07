<?php
// Rien à faire ici
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Une lettre personnalisée</title>
	<link rel="stylesheet" href="lettre.css"/>
</head>

<body>
	<h1>Donnez le nom du destinataire</h1>
	<!-- Faire le formulaire ici -->
	<form action="salutation.php" method="get">
		<div>
			<label for="nom">Destinataire : </label>
			<input type="text" name="nom" id="nom" />
			<input type="submit" />
		</div>
	</form>
</body>

</html>
