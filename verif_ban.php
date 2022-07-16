<?

include('includes/db.php');
$q = 'SELECT * FROM joueurs WHERE id = '. $_GET['id'].'';
$req = $bdd->query($q);
$results = $req->fetchAll(PDO::FETCH_ASSOC); // Récuperer tous les résultats dans un tableau
// var_dump($results);

foreach ($results as $ban) {

$q = 'SELECT id_joueur FROM ban WHERE email = :email';
$req = $bdd->prepare($q);
$req->execute([
      'email' => $ban['email']
      ]);

$result = $req->fetchAll();
if(!empty($result)){

  header('location: users.php?message=Utilisateur est déjà ban.&type=danger');
  exit;
}




$q = 'INSERT INTO ban (id_joueur, email, nom_joueur, prenom_joueur, pseudo, mdp, sexe) VALUES (:id_joueur, :email, :nom_joueur, :prenom_joueur, :pseudo, :mdp, :sexe)';
$req = $bdd->prepare($q);
$succes = $req->execute([
						'id_joueur' => $ban['id'],
						'email' => $ban['email'],
						'nom_joueur' => $ban['nom'],
						'prenom_joueur' => $ban['prenom'],
                        'pseudo' => $ban['pseudo'],
                        'mdp' => $ban['mdp'],
                        'sexe' => $ban['sexe'],
						]);


if (!$succes){
	header('location: users.php?message=Impossible de bannir le joueur.&type=danger');
}

$q = 'DELETE FROM joueurs WHERE id = '. $ban['id'].'';
if ($bdd->query($q) === TRUE) {
  } else {
    header('location: users.php?message=Impossible de bannir le joueur.&type=danger');
  }
  
}

header('location: users.php?message=Utilisateur a bien été banni.&type=success');
?>