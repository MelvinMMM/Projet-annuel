<?php session_start();
if(empty($_SESSION['email'])) {
    header('location: index.php');
    exit;
}
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil_connected</title>
    <link rel="stylesheet" href="CSS/profilee.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
<!--        
  <script src="JS/javaa.js"></script> -->
  </head>
<?php
$title = 'Mon Profil';

?>

<body>
    
    <?php
    include('includes/header.php');
    ?>
    <main>


    <div class="container">
      <div class="card">
        <div class="card-header">
          <div class="avatar">
            <div class="user-online-indicator"></div>
             <img src="uploads/default.jpg" alt="image">
          
 
          <div class="pseudo"><h3>Profil</h3></div>
          <div class="pseudo"><h3>Pseudo : <?php echo '<span>'.$_SESSION['pseudo']. '</span>' ?></h3></div>
          <div class="email"><h3>Email : <?php echo '<span>'.$_SESSION['email'].'</span>'?></h3></div>
        </div>
        <div class="bouton"><button type="submit"> <a href="edit_profil.php"> Modifier votre profile</a></div>
        


     
</main>
</body>

</html>


