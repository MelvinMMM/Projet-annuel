<?php
session_start();
?>
<!DOCTYPE html>
<html>

<?php
$title = 'Profil';

?>

<body>
    
    <?php
    include('includes/header.php');
    ?>
    <main>
        <h1> Mon compte </h1>
        <div class="profile-div">
            <h2>Mes infos</h2>

        <h3>Pseudo : <?php echo '<span>'.$_SESSION['pseudo']. '</span>' ?></h3>
        <h3>Email : <?php echo '<span>'.$_SESSION['email'].'</span>'?></h3>
        <h3>Image de profil : </h3>
            <?php echo '<img class="pfp" src="uploads/'. $_SESSION['image'].'">';?>
        </div>
</body>

</html>
