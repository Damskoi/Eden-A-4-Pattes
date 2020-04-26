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
	<title>Forum</title>
</head>
<body>

	<div class="container-fluid">
		<?php
			include_once 'assets/inc/header.html';
		?>

		<div class="container">
			<div class="row page-header">
				<h1> Bienvenue sur le Forum </h1>
			</div>
			

			<div class="row">
				<div class="col-md-12">
					<!-- Bandeau fil d'ariane -->
					<ul class="breadcrumb">
					  <li ><a href="#">Accueil</a></li>
					  <li class="active">Forum</li>
					</ul>
					<!-- Fin Bandeau fil d'ariane -->
				</div>
				<div class="col-md-offset-1 col-md-11 hidden-xs">
					<p>26 sujets - 3 pages</p>
				</div>
			
				<blockquote class="col-md-12">
		            Ce Forum est consacrée à nos amis félins. Animal domestique mais qui a gardé son instinct de fauve, le chat nous fascine depuis des siècles. Ce forum parle de tous les sujets qui ont trait au chat : comportement, alimentation, santé, psychologie, éducation, races de chats, exposition ou concours félins… Alors, que vous souhaitiez partager des photos de votre tigre de salon ou simplement faire découvrir ou commenter la dernière vidéo de chat à la mode, vous êtes au bon endroit sur le forum des chats.<br>
		            <small class="pull-right">Forum Eden</small><br>
		        </blockquote>

		        <div class="col-md-12" style="margin-bottom: 20px">
		        	<a href="publier.html"><button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus"></span> Créer un Sujet</button></a>
		        </div>
			</div>

	        

	        <!-- Listing des sujets -->
			<section class="row">
				<div class="col-md-9">
					<div class="row entete" style=" margin-bottom: 20px">
						<div class="col-sm-7 col-xs-12">Sujets</div>
						<div class="col-sm-2 hidden-xs">Réponses</div>
						<div class="col-sm-3 hidden-xs">Mises à jour</div>
					</div>
					<div class="row sujet" style="border-radius: 10px;">
						<div class="col-sm-7 col-xs-12 flex">
							<div class="avatar"> <a href="#" target="_blank"> <img src="assets/images/avatar.jpg" alt="avatar" class="img_avatar thumbnail" /> </a> </div>
							<div class="content">
								<h5> <a href="Forum/suj=chat_miauleur" target="_blank"> Chat Miauleur </a> </h5>
								<div class="details">
									<p>Crée par <span class="label label-primary"><a href="profil.html"> Anonymous</a></span> il y'a 5 heures.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-2 hidden-xs" >
							<p style="text-align: center; margin: 15px"><span class="badge text-info">6 réactions</span></p>
						</div>	
						<div class="col-sm-3 hidden-xs">
							<ul class="list-unstyled">
								<li> dernier Message par<br/>
									<span class="label label-default"><a href="#"> Anonymous </a></span>
									</li>
								<li> Il y'a 12 minutes </li>
							</ul>
						</div>
					</div>
					<div class="row sujet" style="border-radius: 10px;">
						<div class="col-sm-7 col-xs-12 flex">
							<div class="avatar"> <a href="#" target="_blank"> <img src="assets/images/avatar.jpg" alt="avatar" class="img_avatar thumbnail" /> </a> </div>
							<div class="content">
								<h5> <a href="Forum/suj=chat_miauleur" target="_blank"> Chat Miauleur </a> </h5>
								<div class="details">
									<p>Crée par <span class="label label-primary"><a href="profil.html"> Anonymous</a></span> il y'a 5 heures.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-2 hidden-xs" >
							<p style="text-align: center; margin: 15px"><span class="badge text-info">6 réactions</span></p>
						</div>	
						<div class="col-sm-3 hidden-xs">
							<ul class="list-unstyled">
								<li> dernier Message par<br/>
									<span class="label label-default"><a href="#"> Anonymous </a></span>
									</li>
								<li> Il y'a 12 minutes </li>
							</ul>
						</div>
					</div>
				</div>


				<!-- Aside -->
				<div class="col-md-3">
					<aside class="row">
						<div class="col-md-12 panel panel-primary" style="padding: 10px;">
							<div class="panel-heading">
								<h1 class="panel-title"> <span class="glyphicon glyphicon glyphicon-plus-sign"></span> CRÉER UN COMPTE</h1>
							</div>
							<div class="panel-body">
								<button class="btn btn-primary">Créer un compte sur Eden</button>
							</div>
						</div>
					</aside>
					<aside class="row">
						<div class="col-md-12 panel panel-primary" style="padding: 10px;">
							<div class="panel-heading">
								<h1 class="panel-title"><span class="glyphicon glyphicon-search"></span> RECHERCHER UN SUJET</h1>
							</div>
							<div class="panel-body">
								<form class="form-inline pull-right">
								    <div class="input-group"> 
								        <input type="text" style="width: 150px;" class="input-sm form-control" placeholder="Recherche">
								        <span class="input-group-btn">
								            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
								        </span>
								    </div>
								</form>
							</div>
						</div>
					</aside>
				</div>
			</section>
			<!-- Fin Aside -->


			<!--		pagination 		 -->
			<div class="row">
				<div class="col-md-3 col-md-push-4">
					<ul class="pagination">
					    <li><a href="#">&laquo;</a></li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">&raquo;</a></li>
					</ul>
				<div>
			</div>
			<!-- fin pagination -->
		</div>

		<?php
			include_once 'assets/inc/footer.html';
		?>
	</div>


</body>
</html>