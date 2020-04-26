<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/code.cs">
	<title>Tarif</title>
	<style type="text/css">
		.slideshow {
				background-color: white;
			   width: 100%;
			   height: 300px;
			   overflow: hidden;
			   border: 3px solid #F2F2F2;
			}

			.slideshow ul {
			   width: 300%;
			   height: 300px;
			   padding:0; margin:0;
			   list-style: none;
			}

			.slideshow li {
			   float: left;
			}

			th {
				text-align: center;
				font-family: "Segoe Script";
			}
			td img{
				width: 20px;
				height: 20px;
			}
	</style>
</head>
<body>
	<div class="container-fluid">

		<?php
			include_once 'assets/inc/header.html';
			
		?>

		<div class="row">
			<fieldset class="titre col-md-12">
				<legend class="titre"><h1>Nos Tarifs</h1></legend>
				<!-- Pour Tarif -->
				<section style="text-align: center;">
					<div class="tarif">	
						 <p><img src="assets/images/teteChat.png"><p>
					</div>
				</section>
			</fieldset>
		</div>
		<section class="row">
				<fieldset class="titre container-fluid" id="services">
					<legend class="titre">Nos Services inclus</legend>

					<div class="col-md-offset-1 col-md-10 table-responsive">
						<table class="table table-bordered condensed">
							<thead>
								<tr>
									<th><span>Assistance vétérinaire</span></th>
									<th><span>Salle de jeu</span></th>
									<th><span>Environnement</span></th>
									<th><span>bilan quotidien</span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="cadre">
										<ul class="list-unstyled">
											<li><span></span><img src="assets/images/puce.png"> Sur place 7j/7 et 365j/an </li>
											<li><span></span><img src="assets/images/puce.png"> nettoyage quotidien</li>
											<li><span></span><img src="assets/images/puce.png"> prendre soin des chats</li>
											<li><span></span><img src="assets/images/puce.png"> donner beaucoup d’attention</li>
											<li><span></span><img src="assets/images/puce.png"> de caresses</li>
										</ul>
									</td>
										
									<td class="cadre">
										<ul class="list-unstyled">
											<li><span></span><img src="assets/images/puce.png"> plusieurs heures par jour</li>
											<li><span></span><img src="assets/images/puce.png"> par petits groupes</li>
											<li><span></span><img src="assets/images/puce.png"> sous surveillance</li>
											<li><span></span><img src="assets/images/puce.png"> un espace de 15m2</li>
											<li><span></span><img src="assets/images/puce.png"> parfaitement aménagé</li>
										</ul>
									</td>
									<td class="cadre">
										<ul class="list-unstyled">
											<li><span></span><img src="assets/images/puce.png"> chambres chauffées et climatisées</li>
											<li><span></span><img src="assets/images/puce.png"> nourriture haut de gamme</li>
											<li><span></span><img src="assets/images/puce.png"> de l’herbe à chat à volonté</li>
											<li><span></span><img src="assets/images/puce.png"> de l’eau filtrée à volonté</li>
											<li><span></span><img src="assets/images/puce.png"> litière haute gamme</li>
										</ul>
									</td>
									<td class="cadre">
										<ul class="list-unstyled">
											<li><span></span><img src="assets/images/puce.png"> sur l'état général des animaux</li>
											<li><span></span><img src="assets/images/puce.png"> traitement</li>
										</ul>
									</td>
								</tr>
							</tbody>	
						</table>
					</div>	
				</fieldset>

		</section>

		<section class="row">
			<fieldset class="titre col-md-12">
				<legend class="titre">Nos Services supplémentaires</legend>
				<div class="slideshow">
					<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
					<script type="text/javascript">
						$(function()
						{
							setInterval(function()
							{
								$(".slideshow ul").animate({marginLeft:-350},800,function()
								{$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));})
						    }, 3500);
						});
					</script>
					<ul>
						<li><img src="assets/images/service_sup.png" alt="" width="300" height="300" /></li>
						<li><img src="assets/images/service_sup2.png" alt="" width="300" height="300" /></li>
						<li><img src="assets/images/service_sup3.png" alt="" width="300" height="300" /></li>
						<li><img src="assets/images/service_sup4.png" alt="" width="300" height="300" /></li>
						<li><img src="assets/images/service_sup5.png" alt="" width="300" height="300" /></li>
						<li><img src="assets/images/service_sup6.png" alt="" width="300" height="300" /></li>
						<li><img src="assets/images/service_sup7.png" alt="" width="300" height="300" /></li>           
					</ul>
				</div>
			</fieldset>
		</section>

		<?php
			include_once 'assets/inc/footer.html';
		?>
	</div>

</body>
</html>