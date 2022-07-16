<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style_admin.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Administrateur</title>
</head>
	<body class=" bg-dark bg-gradient-dark text-white">
		<div class="w-50 position-absolute top-50 start-50 translate-middle">
			<h1 class="text-center">Connexion</h1>
			<?php
                if (isset($_GET['message']) && !empty($_GET['message'])) {
                echo '<h3 style="font-size: 15px; color: #6b298c;" class="text-center">' . htmlspecialchars($_GET['message']) . '</h3>';
                }

            ?>
			<form method="POST" action="verif_ad.php">
			  <div class="mb-3">
			    <label class="form-label">Email</label>
			    <input type="email" class="form-control" name="email">
			  </div>
			  <div class="mb-3">
			    <label class="form-label">Mot de passe</label>
			    <input type="password" class="form-control"name="mdp">
			  </div>
			  <button type="submit" class="btn btn-primary">Se connecter</button>
			</form>

		</div>
	</body>
</html>