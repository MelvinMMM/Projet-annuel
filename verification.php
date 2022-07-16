<?php

// 	function writeLine($success, $email){
//   $stream = fopen("log.txt", "a+");
//   $line = date(Y/m/d - H:i:s) ' - Tentative de connextion '. ($success ? 'reussite' : 'échouée') .' de ' . $email . "\r\n";
//   fputs($stream, $line);
//   fclose($stream);
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
    	header('location: connexion.php?message=Vous devez remplir les 2 champs.');
      header('location: connexion.php?email=Votre email est invalide.');
      exit;
    }

   if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      header('location: connexion.php?messageEmail invalide.');
      exit;
   }

    include('includes/db.php');


$q = 'SELECT id FROM joueurs WHERE email = :email AND mdp = :mdp';
$req = $bdd->prepare($q);
$req->execute([
      'email' => $_POST['email'],
      'mdp' => hash('sha512', $_POST['mdp'])
      ]);

$results = $req->fetchAll();
if(empty($results)){

  // function writeLine(false, $_POST['email']);

  header('location: connexion.php?message=Identifiants incorrects.&type=danger');
  exit;
}

$q = 'SELECT id FROM joueurs WHERE email = :email';
$req = $bdd->prepare($q);
$req->execute([
      'email' => $_POST['email']
      ]);

$results = $req->fetch(PDO::FETCH_ASSOC);

session_start();

$_SESSION['email'] = $_POST['email'];
$_SESSION['id'] = $results;
var_dump($_SESSION);


// function writeLine(true, $_POST['email']);

header('location: page_jeu.php?message=Content de vous revoir !&type=success');
exit;


?>