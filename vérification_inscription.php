<?php 
/* La table s'appelle Joueurs
et les colonnes sont écritent
à la ligne 74
*/

if(isset($_POST['email']) && !empty($_POST['email'])){
	setcookie('email', $_POST['email'],time() + 24 * 3600);
}
if(
	!isset($_POST['email'])
	|| empty($_POST['email'])
	|| !isset($_POST['mdp'])
	|| empty($_POST['mdp'])
	|| !isset($_POST['nom'])
	|| empty($_POST['nom'])
	|| !isset($_POST['prenom'])
	|| empty($_POST['prenom'])
	|| !isset($_POST['pseudo'])
	|| empty($_POST['pseudo'])
){
	header('location: inscription.php?message=vous devez remplir les 5 champs.&type=danger');
	exit; 
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
{
	header('location: inscription.php?message=Email invalide.&type=danger');
	exit;
}

include('includes/db.php');


$q = 'SELECT id FROM joueurs WHERE email = :email';
$req = $bdd->prepare($q);
$req->execute(['email' => $_POST['email']]);


$results = $req->fetchall();

if(!empty($results)){
	header('location: inscription.php?message=Adresse email déjà utilisée.&type=danger');
	exit;
}

$q = 'SELECT id FROM joueurs WHERE pseudo = :pseudo';
$req = $bdd->prepare($q);
$req->execute(['pseudo' => $_POST['pseudo']]);


$results = $req->fetchall();

if(!empty($results)){
	header('location: inscription.php?message=Pseudo déjà utilisée.&type=danger');
	exit;
}

$test = $_POST['mdp'];
$pattern = "/^[^0-9][A-Z][a-z]|[0-9]/";

$res = preg_match($pattern, $test);


if(strlen($_POST['mdp']) < 8 || $res == 0){
	header('location: inscription.php?message=Le message doit comporter entre 8 caracteres, 1 Maj, 1 Min et 1 Chiffre.&type=danger');
	exit;
}

$q = 'INSERT INTO joueurs (email, nom, prenom, pseudo, mdp, sexe) VALUES (:email, :nom, :prenom, :pseudo, :mdp, :sexe)';
$req = $bdd->prepare($q);
$succes = $req->execute([
						'mdp' => hash('sha512',$_POST['mdp']),
						'email' => $_POST['email'],
						'nom' => $_POST['nom'],
						'prenom' => $_POST['prenom'],
						'pseudo' => $_POST['pseudo'],
						'sexe' => $_POST['sexe']
						]);


if (!$succes){
	header('location: inscription.php?message=Erreur lors de l enregistrement.&type=danger');
}


header('location: accueil.php?message=Compte crée avec succès !&type=success');
exit;

?>
/************ Il faut renommer la page d'accueil en index ************/
