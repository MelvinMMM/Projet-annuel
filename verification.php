<?php
	
	if(isset($_POST['email']) && !empty($_POST['email'])){
    	setcookie('email', $_POST['email'], time() + 24 * 3600);
    }

    if (
    	!isset($_POST['email'])
    	|| empty($_POST['email'])
    	|| !isset($_POST['mdp'])
    	|| empty($_POST['mdp'])
    ) {
    	header('location: connexion.php?message=Vous devez remplir les 2 champs.');
      header('location: connexion.php?email=Votre email est invalide.');
      exit;
    }

   if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      header('location: connexion.php?messageEmail invalide.');
      exit;
   }

   header('location: page_jeu.php');
   exit;
?>
