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
	<title>Chat Miauleur</title>
	<style type="text/css">
		
	</style>
</head>
<body>

	<?php
		require_once 'assets/inc/header.html';
		//require_once 'inc.html';
	?>

	<div class="container">
		<div class="row page-header">
			<h1 style="text-align: center;"> Chat Miauleur</h1>
		</div>
		

		<div class="row">
			<div class="col-md-12">
				<!-- Bandeau fil d'ariane -->
				<ul class="breadcrumb">
				  <li ><a href="#">Accueil</a></li>
				  <li ><a href="#">Forum</a></li>
				  <li class="active">Chat Miauleur</li>
				</ul>
				<!-- Fin Bandeau fil d'ariane -->
			</div>
			<div class="col-md-offset-1 col-md-11 hidden-sm hie">
				<p>26 réponses - 3 pages</p>
			</div>
			 <div class="col-md-offset-1 col-md-5" style="margin-top: 10px; margin-bottom: 10px">
	        	<a href="#"><button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus"></span> Créer un Sujet</button></a>
	        </div>
	        <div class="col-md-offset-1 col-md-5" style="margin-top: 10px; margin-bottom: 10px">
	        	<a href="#comment">
	        		<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-comment"></span> Commenter</button>
	        	</a>
	        </div>
		</div>


        <!-- Listing des sujets -->
		<section class="row">
			<div class="col-md-9">
				<div class="row col-md-12">
					<div class="media">
						<div class="media-left"><a href="#"><img class="media-object img_avatar img-thumbnail" src="assets/images/avatar.jpg" alt="avatar"></a></div>
						<div class="media-body">
							<h3 class="media-heading"><a href="#">Anonymous</a> <small class="pull-right"><i>il y'a 10h</i></small></h3>
							<p style="margin-bottom:25px">
								Ce Forum est consacrée à nos amis félins. Animal domestique mais qui a gardé son instinct de fauve, le chat nous fascine depuis des siècles. Ce forum parle de tous les sujets qui ont trait au chat : comportement, alimentation, santé, psychologie, éducation, races de chats, exposition ou concours félins… <br>
								Alors, que vous souhaitiez partager des photos de votre tigre de salon ou simplement faire découvrir ou commenter la dernière vidéo de chat à la mode, vous êtes au bon endroit sur le forum des chats.
							</p>
									<!--			COMMENTAIRE			-->
						<ul class="media-list">
							<li class="media">
								<div class="media-left"><a href="#"><img class="media-object img_avatar img-thumbnail" src="assets/images/avatar.jpg" alt="avatar"></a></div>
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Toto</a> <small class="pull-right"><i>il y'a 5h41</i></small></h4>
									<p>Trop genial le forum les gars <br>
										bien joué
									</p>
								</div>
							</li>
							<li class="media ">
								<div class="media-left"><a href="#"><img class="media-object img_avatar img-thumbnail" src="assets/images/avatar.jpg" alt="avatar"></a></div>
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Tati</a> <small class="pull-right"><i>il y'a 4hh26</i></small></h4>
									<p>Trop genial le forum les gars <br>
										bien joué
									</p>
								</div>
							</li>
							<li class="media ">
								<div class="media-left"><a href="#"><img class="media-object img_avatar img-thumbnail" src="assets/images/avatar.jpg" alt="avatar"></a></div>
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Lola</a> <small class="pull-right"><i>il y'a 3h54</i></small></h4>
									<p>Trop genial le forum les gars <br>
										bien joué
									</p>
								</div>
							</li>
							<li class="media ">
								<div class="media-left"><a href="#"><img class="media-object img_avatar img-thumbnail" src="assets/images/avatar.jpg" alt="avatar"></a></div>
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Toto</a> <small class="pull-right"><i>il y'a 2h19</i></small></h4>
									<p>Trop genial le forum les gars <br>
										bien joué
									</p>
								</div>
							</li>			
						</ul>
						</div>
						
					</div>
				</div>
				 <div class="row">
		            <form class="well col-xs-12">
		                <legend>Commenter</legend>
		                <label for="comment">Votre message :</label>
		                <textarea id="comment" name="comment" class="form-control" rows="4"></textarea>
		                <p class="help-block">Vous pouvez agrandir la fenêtre</p>
		                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-sign"></span> Envoyer</button>
		            </form>
		        </div>
			</div>


			<!-- Aside -->
			<div class="col-md-3">
				<aside class="row">
					<div class="col-md-12 panel panel-primary" style="padding: 10px;">
						<div class="panel-heading">
							<h1 class="panel-title"> <span class="glyphicon glyphicon-plus-sign"></span> CRÉER UN COMPTE</h1>
						</div>
						<div class="panel-body flex-aside">
							<button class="btn btn-primary">Créer un compte sur Eden</button>
							<span style="display: inline-block; text-align: center;">ou</span>
							<button class="btn btn-primary">Se Connecter</button>
						</div>
					</div>
				</aside>
				<aside class="row">
					<div class="col-md-12 panel panel-primary" style="padding: 10px;">
						<div class="panel-heading">
							<h1 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> AUTEUR DU SUJET</h1>
						</div>
						<div class="panel-body">
							<div class="media">
								<a class="media-left" href=""><img class="media-object img_avatar img-thumbnail" src="assets/images/avatar.jpg" alt="avatar"></a>
								<div class="media-body">
									<strong class="media-heading"><a href="#">Anonymous</a></strong>
									<p>Derniere Connexion: hier</p>
								</div>
							</div>
						</div>
					</div>
				</aside>
				<aside class="row">
					<div class="col-md-12 panel panel-primary" style="padding: 10px;">
						<div class="panel-heading">
							<h1 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> PARTICPANTS</h1>
						</div>
						<div class="panel-body">
							<ul class="list-group">
								<a class="list-group-item" href="#"> Toto <span class="badge">4 réactions</span></a>
								<a class="list-group-item" href="#"> Tati <span class="badge">3 réactions</span></a>
								<a class="list-group-item" href="#"> Lola <span class="badge">2 réactions</span></a>
						
							</ul>
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
			</div>
		</div>
		<!-- fin pagination -->
	</div>

	<?php
		require_once 'assets/inc/footer.html';
	?>

</body>
</html>