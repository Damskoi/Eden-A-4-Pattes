<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<title>Acceuil V2</title>
	<style type="text/css">
		body{
			background-color: rgba(225,198,169,0.1);
		}

		.slideshow {
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

		#cadre_reservation {
			margin-top: -27.4%;
			margin-left: 69%;
			padding-right: 3%;
			padding-left: 3%;
			background-color: white;
			border: 3px solid rgb(225,198,169);
			position: absolute;
			
		} 

		#cadre_reservation div{
			margin-top: -18%;
			width: 260px;

		}

		#commentaire, #pub{
			height: 150px;
			margin-top: 20px;
			text-align: center;
			background-color: white;
			border: 1px solid rgb(225,198,169);
		}

		#pub{
			
			margin-top: 50px;
		}

		#VisiteVideo{
			padding: 30px;
		}

		.texte{
			text-align: left; 
			font-family: 'Segoe Script';
			font-size: 1.2em;
			padding-left: 20px;
			padding-top: 50px
		}

		legend[class="base"]{
			font-size: 1em;
		}




	</style>	
</head>
<body>
	<div class="container-fluid">

		<?php
			include_once 'assets/inc/header.html';
		?>

		<div class="row">
			<section id="cadre_image">
				<div class="slideshow">
					<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
					<script type="text/javascript">
					   $(function(){
					      setInterval(function(){
					         $(".slideshow ul").animate({marginLeft:-350},800,function(){
					            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
					         })
					      }, 3500);
					   });
					</script>
					<ul>
			             <li><img src="assets/images/large.jpg" alt="" width="300" height="300" /></li>
			             <li><img src="assets/images/large1.jpg" alt="" width="300" height="300" /></li>
			             <li><img src="assets/images/large2.jpg" alt="" width="300" height="300" /></li>
			             <li><img src="assets/images/large3.jpg" alt="" width="300" height="300" /></li>
			             <li><img src="assets/images/large4.jpg" alt="" width="300" height="300" /></li>
			             <li><img src="assets/images/large2.jpg" alt="" width="300" height="300" /></li>            
			    	</ul>
				</div>
			</section>
			<!-- Pour réserver -->
			<section >
				<fieldset class="page" id="cadre_reservation">
					<legend class="page">Pour reserver</legend>
					<div>
						<form action="reservation.html" method="get" >
							<fieldset class="base">
								<legend class="base">Date de départ</legend>
								<input type="Date" name="">
							</fieldset>

							<fieldset class="base">
								<legend class="base">Date d'arrivée</legend>
								<input type="Date" name="">
							</fieldset>

							<fieldset class="base">
								<legend class="base">Nombre de chats</legend>
								<select>
									<option> 1 </option>
									<option> 2 </option>
									<option> 3 </option>
									<option> 4 </option>
								</select>
							</fieldset>
							<button id="boutonReserver" class="btn btn-primary pull-right" style="background-color: rgb(225,198,169)"><span id="reserver">Je reserve</span></button>			
						</form>
					</div>
				</fieldset>
			</section>
		</div>



		<div class="row" style="padding-top: 10px;">
			<div class="col-md-9">
				<div class="row">
					<aside class="col-md-offset-2 col-md-8" id="commentaire">
						<p>	Bienvenue dans notre hôtel pour chat. Pour assurer confort, tranquilité et soins a votre petite bête.<br>
						Venez visiter notre hôtel pour en savoir plus sur nous.<br>
						Bonne visite à vous!</p>
					</aside>

					<section class="" style="text-align: center; margin: 20px; padding: 20px">
						<div class="col-md-offset-2 col-md-10" id="VisiteVideo">
							<figure style="border:  5px solid rgb(225,198,169); background-color: white">
								<h1 style="font-weight: bold;">Video visite</h1>
				    			<video src="video.ogv" width="640" height="480"></video>
				    			<figcaption></figcaption>
							</figure>
						</div>
						<div class="col-md-offset-3 col-md-5">
							<div class="texte">
								<p>Notre hôtel est composé de <br> <B>x chambre</B> où les chats peuvent s'amuser,<br> dormir et surtout découvrir cette environnement.<br> <br>Un environnement <B>hors du commun</B> <br>où chaque recoins sera une enigme pour eux.<br><br>De plus, il y a, à leurs disposition<br>  <B>une salle de jeu </B>pour encore plus <br> de découverte et d'amusement.<br><br> Biensûr on le sait, qu'ils ne veulent <br>pas seulement s'amuser mais aussi <B>dormir </B>!<br> <br>Pour cela les chambres sont équipées de litiére<br> de haute gamme pour <B>un confort maximum.</B>
							 </p>
							</div>
						</div>
					</section>
			</div>
				</div>

			<aside class="col-md-3">
				<!-- espace pub -->
				<div id="pub">
					<p>espace pub</p>
				</div>
			<aside>
		</div>	
		
		<?php
			include_once 'assets/inc/header.html';
		?>


	</div>
		

</body>
</html>