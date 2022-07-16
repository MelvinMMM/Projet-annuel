<?
include('includes/db.php');
$q = 'SELECT * FROM joueurs WHERE id = '. $_GET['id'].'';
$req = $bdd->query($q);
$results = $req->fetchAll(PDO::FETCH_ASSOC); // Récuperer tous les résultats dans un tableau
// var_dump($results);

foreach ($results as $admin) {

$q = 'SELECT id_joueur FROM admin WHERE email = :email';
$req = $bdd->prepare($q);
$req->execute([
      'email' => $admin['email']
      ]);

$result = $req->fetchAll();
if(!empty($result)){

  header('location: users.php?message=Utilisateur est déjà admin.&type=danger');
  exit;
}




$q = 'INSERT INTO admin (id_joueur, email, pseudo, mdp) VALUES (:id_joueur, :email, :pseudo, :mdp)';
$req = $bdd->prepare($q);
$succes = $req->execute([
						'id_joueur' => $admin['id'],
						'email' => $admin['email'],
                        'pseudo' => $admin['pseudo'],
                        'mdp' => $admin['mdp']
						]);


if (!$succes){
	header('location: users.php?message=Impossible de bannir le joueur.&type=danger');
}
}
?>