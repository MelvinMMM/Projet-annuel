<?php

// function writeLine($success, $email){
// 	$stream = fopen("log_admin.txt", "a+");
// 	$line = date(Y/m/d - H:i:s) ' - Tentative de connextion '. ($success ? 'reussite' : 'échouée') .' de ' . $email . "\r\n";
// 	fputs($stream, $line);
// 	fclose($stream);
// }


	if(isset($_POST['email']) && !empty($_POST['email'])){
    	setcookie('email', $_POST['email'], time() + 24 * 3600);
    }

    if (
    	!isset($_POST['email'])
    	|| empty($_POST['email'])
    	|| !isset($_POST['mdp'])
    	|| empty($_POST['mdp'])
    ) {
    	header('location: con_admin.php?message=Vous devez remplir les 2 champs.');
      
      exit;
    }

   if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    header('location: con_admin.php?email=Votre email est invalide.');
      exit;
   }


    include('includes/db.php');


$q = 'SELECT id FROM admin WHERE email = :email AND mdp = :mdp';
$req = $bdd->prepare($q);
$req->execute([
      'email' => $_POST['email'],
      'mdp' => $_POST['mdp'] //hash('sha512', $_POST['mdp'])
      ]);

$results = $req->fetchAll();
if(empty($results)){

  // writeLine(false, $_POST['email']);

  header('location: con_admin.php?message=Identifiants incorrects.&type=danger');
  exit;
}

session_start();

$_SESSION['email'] = $_POST['email'];
$_SESSION['code'] = 1236;

// writeLine(true, $_POST['email']);


header('location: page_jeu.php?message=Bienvenue admin !&type=success');
exit;

?>