<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<title>Inscription</title>
	<style type="text/css">
		legend[class="page"]{
			font-size: 2.1em;
		}
		legend[class="base"]{
			text-align: center;
			font-family: "Segoe Script";
		}

		span{
			color: red;
		}

		button{
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
						<legend class="page">Inscrivez-vous</legend>
						<p class="help-block"><span>*</span>Obligatoire</p>
						<fieldset class="base">
							<legend class="base">Vous</legend>
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>Nom<span>*</span></li>
										<li><input type="text" name="" placeholder="nom"></li>
										<li>Prenom<span>*</span></li>
										<li><input type="text" name="" placeholder="prenom"></li>
										<li>Adresse Email<span>*</span></li>
										<li><input type="text" name="" placeholder=""></li>
										<li>Code Postal<span>*</span></li>
										<li><input type="text" name="" placeholder="95400"></li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>N° de téléphone (fixe)</li>
										<li><input type="text" name="" placeholder="+336"></li>
										<li>N° de téléphone (port)</li>
										<li><input type="text" name="" placeholder="+331"></li>
										<li>Adresse Postal</li>
										<li><input type="text" name="" placeholder="5 rue de Mouret"></li>
									</ul>
								</div>
							</div>
						</fieldset>
						<fieldset class="base">
							<legend class="base">Votre compte</legend>
							<div class="checkbox">
								<p>
									Comment m'avez vous trouvé ? <span>*</span> <br>
									<label for=""> <input type="checkbox" name="">google</label>
									<label for=""> <input type="checkbox" name="">flyer</label>
									<label for=""> <input type="checkbox" name="">bouche à oreille</label>
								</p>							
							</div>
							
							<div class="form-group">
								<p>
									<label>Pseudo <span>*</span></label><br>
									<input type="text" name="" placeholder="Pseudo">
								</p>
								<p>
									<label>Mot de Passe <span>*</span></label><br>
									<input type="text" name="" placeholder="mot de passe">
									<i class="help-block">6 caractères minimum</i>
								</p>
								<p>
									<label>Confirmer le Mot de Passe <span>*</span></label><br>
									<input type="text" name="" placeholder="mot de passe">
									<i class="help-block">6 caractères minimum</i>
								</p>
							</div>

							<div class="checkbox">
								<label for="cdc" class="checkbox"><input type="checkbox" name="" value="" id="cdc">J'accepte les conditions générales de confidentialité <span>*</span></label>
								<label for="news" class="checkbox"><input type="checkbox" name="" value="" id="news">Je souhaîte recevoir des reductions et offres par mail <span>*</span></label>
							</div>
						</fieldset>
						<button class="btn btn-primary pull-right" type="submit">Valider l'inscription</button>
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