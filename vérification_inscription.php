<?php 


if(isset($_POST['email']) && !empty($_POST['email'])){
	setcookie('email', $_POST['email'],time() + 24 * 3600);
}
if(
	!isset($_POST['email'])
	|| empty($_POST['email'])
	|| !isset($_POST['mdp'])
	|| empty($_POST['mdp'])
){
	header('location: inscription.php?message=vous devez remplir les 2 champs.&type=danger');
	exit; 
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
{
	header('location: inscription.php?message=Email invalide.&type=danger');
	exit;
}

if(strlen($_POST['mdp']) < 6 || strlen($_POST['mdp']) > 12){
	header('location: inscription.php?message=Le message doit comporter entre 6 et 12 caracteres.&type=danger');
	exit;

}
include('includes/db.php');


$q = 'SELECT id FROM users WHERE email = :email';
$req = $bdd->prepare($q);
$req->execute(['email' => $_POST['email']]);


$results = $req->fetchall();

if(!empty($results)){
	header('location: inscription.php?message=Adresse email déjà utilisée.&type=danger');
	exit;
}

 
if($_FILES['image'] ['error'] != 4){ 

	
	$acceptable = [
		'image/gif ',
		'image/png',
		'image/jpeg'
	];

	if(!in_array($_FILES['image']['type'], $acceptable)){
	header('location: inscription.php?message=Fichier de type incorrect.&type=danger');
}

$maxSize = 2 * 1024 * 1024; 


	if($_FILES['image']['size'] > $maxSize){
	header('location: inscription.php?message=Fichier trop lourd 2Mo max.&type=danger');
}


$chemin = 'uptloads';

	if(!file_exists($chemin)){	
	mkdir($chemin);
}

 $filename = $_FILES['image']['name'];
 $destination = $chemin . '/' . $filename;


$array = explode('.', $filename); 
$extension = end($array); 



$filename = 'image' . time() . '.' . $extension;

$destination = $chemin . '/' . $filename;



 move_uploaded_file($_FILES['image']['tmp_name'], $destination);

}


$q = 'INSERT INTO users (email, password) VALUES (:email, :mdp)';
$req = $bdd->prepare($q);
$succes = $req->execute([
						'mdp' => hash('sha512',$_POST['mdp']),
						'email' => $_POST['email'],
						'image' => isset($filename) ? $filename : ''
						]);


if (!$succes){
	header('location: inscription.php?message=Erreur lors de l enregistrement.&type=danger');
}


header('location: index.php?message=Compte crée avec succès !&type=success');
exit;

?>
