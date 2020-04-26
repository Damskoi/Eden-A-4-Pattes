<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<title>Connexion</title>
	<style type="text/css">
		form {
			margin: auto;
			text-align: center;
			font-family: "Segoe Script";
		}

		[class*="btn"]{
			margin-top: 0px;
			background-color: rgb(225,198,169);
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<?php
			include_once 'assets/inc/header.html';
		?>

		<div class="container">
			<div class="row">
				<form class="col-sm-offset-3 col-sm-6">
				<fieldset class="page">
					<legend class="page"><h2> Espace Personnel </h2></legend> 
					<div class="form-group">
						<label for="pseudo">Votre Pseudo</label><br>
						<input type="text" name="pseudo" id="pseudo" placeholder="pseudo" autofocus>
					</div>
					<div class="form-group">
						<label for="mdp">Votre Mot de Passe</label><br>
						<input type="text" name="mdp" id="mdp" placeholder="mot de passe" autofocus><br>
						<a href="">Mot de passe oublié ?</a>
					</div>
					<button class="btn btn-primary">Connexion</button>

					<fieldset class="titre" style="margin-top: 40px">
						<legend class="titre">Nouveau chez nous ?</legend>
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Créer votre compte</button>
						</div>
					</fieldset>
				</fieldset>
			</form>
			</div>
		</div>

		<?php
			include_once 'assets/inc/footer.html';
		?>
	</div>

</body>
</html>