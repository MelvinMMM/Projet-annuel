<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/PageJeu.css">
	
	<title>Page Jeu</title>
</head>
<body>

	<main>
		<?php include('includes/header.php');?>

		<div id="mySidenav" class="sidenav">
  			<a id="closeBtn" href="#" class="close">&times;</a>
 				<ul>
    				<li><a href="#">Jeu 1</a></li>
    				<li><a href="#">Jeu 2</a></li>
    				<li><a href="#">Jeu 3</a></li>
  				</ul>
		</div>

		<a href="#" id="openBtn">
  			<span class="burger-icon">
   			<span></span>
   			<span></span>
    		<span></span>
  			</span>
		</a>
		

				<div class="row">
					<div class="col-4"></div>
					<div class="col-4 text-center">
						<img class="w-75 h-75" src="Images/Astronomy Wallpaper.jpg"></img>
					</div>	
					<div class="col-4 text-left">
						<p>
							DESCRITPION DU JEU <br>
							NIVEAU POSSIBLE : 3
						</p>
					</div>	
				</div>	
				<div class="row">
					
				</div>	

				<div class="row">
					<div class="col-4 mx-auto text-center">
						<p>
							Tableau Des Scores<br>
							* Nom Du Joueur : Temps
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-4 mx-auto text-center">
						<p>Nom du jeu <br> JOUER </p> <br>
					</div>
				</div>

				<div class="row">
					<div class="col-4 mx-auto text-center">
						<p>
							COMMENTAIRE / NOTE
						</p>
					</div>	
				</div>	

		<?php include('includes/footer.php'); ?>


	</main>
	<script type="text/javascript" src="Js/menu.js"></script>
</body>
</html>




