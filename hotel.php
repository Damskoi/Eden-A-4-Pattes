<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<title>Hotel</title>
	<style type="text/css">
		body{
			background-color: rgba(225,198,169,0.1);
		}
		table{
			text-align: center;
		}
		th {
			text-align: center;
			font-family: "Segoe Script";
		}

		th span{
			color: rgb(225,198,169)
		}

		div [class="row col-md-12"]{
			font-family: "Segoe Script";
		}

		.slideshow {
			width: 100%;
			height: 200px;
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

		.txt{
			width: 75%;
			height: 100px;
			margin: auto;
			border: 2px solid black;
		}
		.txt p{
			text-align: center;
		}

		fieldset img{
			width: 300px;
			height: 300px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">

		<?php
			include_once 'assets/inc/header.html';
		?>

		<section class="row">
			<div class="slideshow col-md-12">
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
		            <li><img src="assets/images/large.jpg" alt="" width="300" height="250" /></li>
		             <li><img src="assets/images/large1.jpg" alt="" width="300" height="250" /></li>
		             <li><img src="assets/images/large2.jpg" alt="" width="300" height="250" /></li>
		             <li><img src="assets/images/large3.jpg" alt="" width="300" height="250" /></li>
		             <li><img src="assets/images/large4.jpg" alt="" width="300" height="250" /></li>
		             <li><img src="assets/images/large2.jpg" alt="" width="300" height="250" /></li>            
		       </ul>
			</div>
		</section>
		<section class="row">
			<fieldset class="titre col-md-12">
				<legend class="titre"><h2>Notre histoire</h2></legend>
				<div class="txt">
					<p>Ici texte<p>
				</div>
			</fieldset>
			<fieldset class="titre col-md-12">
				<legend class="titre"><h2>Notre équipe</h2></legend>
				<div class="txt">
					<p>photo de l'equipe<p>
				</div>
			</fieldset>

			<fieldset class="titre col-xs-12" style="text-align: center; background-color: white">
				<legend class="titre"><h2>Nos Valeurs</h2></legend>
				<div class="row">
					<div class="col-sm-4">
						<div class="row col-md-12"><h2>Qualité</h2></div>
						<div class="row col-md-12"><img src="assets/images/qualité.png" alt=""/></div>
					</div>
					<div class="col-sm-4">
						<div class="row col-md-12" style="color: rgb(225,198,169)"><h2>Proximité</h2></div>
						<div class="row col-md-12"><img src="assets/images/iconeProximite.png" alt=""/></div>
					</div>
					<div class="col-sm-4">
						<div class="row col-md-12"><h2>Confort</h2></div>
						<div class="row col-md-12"><img src="assets/images/iconeConfort.png" alt=""/></div>
					</div>
				</div>	
			</fieldset>
		</section>

		<?php
			include_once 'assets/inc/footer.html';
		?>
	</div>

</body>
</html>