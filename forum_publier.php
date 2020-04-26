<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
		<link rel="stylesheet" type="text/css" href="assets/css/forum.css">	
		<link rel="stylesheet" type="text/css" href="assets/pell/pell.min.css">	
		<title>Publier un sujet</title>
	</head>
	<body>

		<div class="container-fluid">
			<?php
			include_once 'assets/inc/header.html';
			?>

			<div class="container">
				<header class="row page-header">
					<h1>Publier un sujet</h1>
					<p><a href="index.html">Retour au Forum</a></p>
				</header>

				<div class="row" style="margin: auto;">
					<form class="well form-horizontal col-md-offset-1 col-md-10">
						<div class="row">
							<div class="form-group">
								<label for="titre" class="col-xs-2 control-label">Titre du sujet :</label>
								<div class="col-xs-10">
									<input type="text" id="titre" name="titre" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="corps" class="col-xs-2 control-label">sujet :</label>
								<div class="col-xs-10">
									<div id="corps" style="border: 1px solid black;"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="pull-right btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-sign"></span> Envoyer</button>
						</div>
					</form>
				</div>
			</div>

			<?php
			include_once 'assets/inc/footer.html';
			?>
			</div>



		<script src="assets/pell/pell.min.js"></script>
		<script>
			var editor = window.pell.init({
			element: document.getElementById('corps'),
			defaultParagraphSeparator: 'p',
			})
		</script>        

	</body>
</html>