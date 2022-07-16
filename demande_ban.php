<?php 
session_start(); 
if(!isset($_SESSION['code'])){
	header('location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html class="h-100">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Users</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--   <script type="text/javascript" src="Js/page_acc.js"></script> -->
	</head>
	<body class="h-100 bg-dark">
		<?php include('includes/header_ad.php'); ?>

		<main>
			
			<div class="container">
<?php 
	include('includes/db.php');
	$q = 'SELECT id, email, nom, prenom, pseudo FROM joueurs WHERE id = '. $_GET['id'].'';
	$req = $bdd->query($q);
	$results = $req->fetchAll(PDO::FETCH_ASSOC); // Récuperer tous les résultats dans un tableau
	// var_dump($results);
?>
<h1 class="text-center text-light mt-3 mb-3"> Voulez-vous vraiment le bannir ?</h1>
    <table class="table table-dark table-striped">
				  <thead>
				    <tr>
				      <th>Pseudo</th>
				      <th>Email</th>
				      <th>Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	foreach ($results as $joueurs) {
				  		echo '<tr>';
				  		echo '<td>' . $joueurs['nom'].' '. $joueurs['prenom'] . '</td>';
				  		echo '<td>' . $joueurs['email'] . '</td>';
						echo '<td>';
                        echo '<a class="btn btn-sm btn-danger me-2" href="verif_ban.php?id=' . $joueurs['id'] . '"> Oui ! </a>';
						echo '<a class="btn btn-sm btn-secondary me-2" href="users.php"> Non ! </a>';
						echo '</td>';
				  		echo '</tr>';
				  	}
				  	?>
				  </tbody>
				</table>
