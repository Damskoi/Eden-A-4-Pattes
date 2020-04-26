<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<title>Chambre</title>
	<style type="text/css">

	[class="containe row"]{
		text-align: center;
	}


	section div[class="col-sm-4"]{
		
		padding: 20px;
		text-align: justify;
		top: 45%;
		border: 1px solid black;
	}

		
	</style>
</head>
<body>

	<div class="container-fluid">

		<?php
			include_once 'assets/inc/header.html';
		?>

		<div class="row">
			<fieldset class="col-sm-12 titre">
				<legend class="titre"><h1>Nos Chambres</h1></legend>

				<section class="containe row">
					<div class="col-sm-12" style="margin-bottom: 50px">
						<div class="row">
							<div class="col-sm-6"><img alt="" src="http://lorempixel.com/output/abstract-q-g-640-480-9.jpg" /></div>
							<div class="col-sm-4">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et justo fringilla, ullamcorper dolor vitae, pellentesque massa. Proin quis eros et neque consectetur facilisis sit amet nec tellus. Duis interdum viverra maximus. Suspendisse posuere, augue sit amet aliquet commodo, urna diam hendrerit dolor, eget consectetur felis ante id magna. Praesent.
							</div>
						</div>	
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et justo fringilla, ullamcorper dolor vitae, pellentesque massa. Proin quis eros et neque consectetur facilisis sit amet nec tellus. Duis interdum viverra maximus. Suspendisse posuere, augue sit amet aliquet commodo, urna diam hendrerit dolor, eget consectetur felis ante id magna. Praesent.
							</div>
							<div class="col-sm-6"><img alt="" src="http://lorempixel.com/output/abstract-q-g-640-480-9.jpg" /></div>
						</div>
					</div>
				</section>
				
			</fieldset>
		</div>

		<?php
			include_once 'assets/inc/footer.html';
		?>
	</div>

</body>
</html>