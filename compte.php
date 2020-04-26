<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<title>Mon Compte</title>
	<style type="text/css">
		img[src^="assets/images/ico"]{
			width: 170px;
			height: 170px;
			margin-top: 30px;
			margin-bottom: 0px;			
		}

		div[class="col-sm-6"]{
			text-align: center;
		}

		div[class="col-sm-6"] a:hover{
			background-color: rgba(232, 206, 175, 0.5)
		}

		a{
			display: inline-block;
			width: 250px;
			height: 250px;
		}

		a > h3{
			color: black;
			font-weight: bold;
			font-family: "Segoe Script";
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
				<div class="col-xs-12">
					<fieldset class="page">
						<legend class="page"><img src="assets/images/ico/pp.png" id="ico"></legend>	
						<div class="container">
							<div class="row" style="border: 2px solid black">
								<div class="col-sm-6"><a href=""><img src="assets/images/ico/compte.png"><br><h3>Mon Compte</h3></a></div>
								<div class="col-sm-6"><a href=""><img src="assets/images/ico/chat_compte.png"><br><h3>Mes Chats</h3></a></div>
								<div class="col-sm-6"><a href=""><img src="assets/images/ico/gift.png"><br><h3>Mes Points</h3></a></div>
								<div class="col-sm-6"><a href=""><img src="assets/images/ico/forum.png"><br><h3>Forum</h3></a></div>
								<div class="col-sm-6"><a href=""><img src="assets/images/ico/room.png"><br><h3>Mes Réservations</h3></a></div>
								<div class="col-sm-6"><a href=""><img src="assets/images/ico/bill.png"><br><h3>Mes Factures</h3></a></div>

							</div>
						</div>
					</fieldset>
				</div>
			</div>
		</div>

		<?php
			include_once 'assets/inc/footer.html';
		?>
	</div>

</body>
</html>