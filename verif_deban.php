<?

include('includes/db.php');
$q = 'SELECT * FROM ban WHERE id_joueur = '. $_GET['id'].'';
$req = $bdd->query($q);
$results = $req->fetchAll(PDO::FETCH_ASSOC); // Récuperer tous les résultats dans un tableau
// var_dump($results);

foreach ($results as $ban) {

$q = 'SELECT id FROM joueurs WHERE email = :email';
$req = $bdd->prepare($q);
$req->execute([
      'email' => $ban['email']
      ]);

$result = $req->fetchAll();
if(!empty($result)){

  // function writeLine(false, $_POST['email']);

  header('location: users.php?message=Utilisateur est déjà déban.&type=danger');
  exit;
}



$q = 'INSERT INTO joueurs (id, email, nom, prenom, pseudo, mdp, sexe) VALUES (:id, :email, :nom, :prenom, :pseudo, :mdp, :sexe)';
$req = $bdd->prepare($q);
$succes = $req->execute([
						'id' => $ban['id_joueur'],
						'email' => $ban['email'],
						'nom' => $ban['nom_joueur'],
						'prenom' => $ban['prenom_joueur'],
                        'pseudo' => $ban['pseudo'],
                        'mdp' => $ban['mdp'],
                        'sexe' => $ban['sexe']
						]);


if (!$succes){
	header('location: users.php?message=Impossible de debannir le joueur.&type=danger');
}

$q = 'DELETE FROM ban WHERE id_joueur = '. $ban['id_joueur'].'';
if ($bdd->query($q) === TRUE) {
  } else {
    header('location: users.php?message=Impossible de debannir le joueur.&type=danger');
  }
  
}

header('location: users.php?message=Utilisateur nest plus banni.&type=success');
?>