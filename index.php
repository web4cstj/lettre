<?php
// Rien à faire ici
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Une lettre personnalisée</title>
	<link rel="stylesheet" href="css/lettre.css"/>
</head>

<body>
	<div class="interface">
		<?php include "includes/headerfooternav.inc.php"; ?>
		<div class="app">
			<!-- Faire le formulaire ici -->
			<form action="salutation.php" method="get">
				<h2>Donnez le nom du destinataire</h2>
				<div>
					<label for="nom">Destinataire : </label>
					<input type="text" name="nom" id="nom" />
				</div>
				<div>
					<input type="submit" />
				</div>
			</form>
		</div>
	</div>
</body>

</html>
