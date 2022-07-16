<?
include('includes/db.php');

$q = 'DELETE FROM joueurs WHERE id = '. $_GET['id'].'';
if ($bdd->query($q) === TRUE) {
  } else {
    header('location: users.php?message=Impossible de supprimer le joueur.&type=danger');
  }

header('location: users.php?message=Utilisateur a bien été supprimé.&type=success');
?>