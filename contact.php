<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<title>Contact</title>
	<style type="text/css">
		h1, h2{
			font-weight: bold;
			text-align: center;
			color:rgb(225,198,169);
			font-family: "Segoe Script";
		}

		h1{
			font-size: 3em;
		}

		form{
			border-radius: 1em;
			border: 1px solid #CCC;
		}

		label{
			text-align: right;
		}

		div[class="col-sm-10"]{
			text-align: center;
		}

		section[class="col-sm-6"]{
			margin-bottom: 30px;
		}
		
	</style>
</head>
<body>
	<div class="container-fluid">

		<?php
			include_once 'assets/inc/header.html';
		?>

		<div class="row">
			<h1>Contact</h1>
			<section class="col-sm-6">
				<div class="row">
					<div class="col-sm-10" style="text-align: left; padding-left: 100px">
						<p><img src="assets/images/mail.png" height="50px" width="50px"><span class="info">E-mail: hoteleden@gmail.com</span></p>
		    			<p><img src="assets/images/map.png" height="50px" width="50px"><span class="info">Adresse: 5 rue de Mouret, 95400 Ville</span></p>
		    			<p><img src="assets/images/phone.jpg" height="50px" width="50px"><span class="info">Nb de telephone:  0123456789</span></p>
					</div>
					<form class="col-sm-10">
						<div class="row">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nom :</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="col-sm-2 control-label">e-mail :</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="col-sm-2 control-label">Message :</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" placeholder="Votre message"></textarea>
									<p class="help-block"><i>Vous pouvez agrandir la fenêtre</i></p>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
			<div class="col-sm-1 hidden-xs">
				<img id="barre" src="assets/images/barre_de_separation.png">
			</div>
			<section class="col-sm-5">
				<aside class="row">
					<div class="col-sm-10">
						<img src="assets/images/horaires.png" height="50px" width="50px">
							<h2>Nos Horaire</h2>
						<p id="horaires">
							du mardi au samedi<br>12h-14h / 15h-19h<br>
	        			<br>le dimanche soir et<br>le lundi soir sur RDV
	        		</p>
					</div>
					<div class="col-sm-10" >
						<h2>Où nous trouver ?</h2>
		   				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.1857333193675!2d2.3762874154484592!3d48.91185350489518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c23ec87a051%3A0x2efaefd1a81994c2!2s17-1+Rue+Villebois+Mareuil%2C+93300+Aubervilliers!5e0!3m2!1sfr!2sfr!4v1545152697304" width="400" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</aside>
			</section>
		</div>

		<?php
			include_once 'assets/inc/footer.html';
		?>
	</div>

</body>
</html>