<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time to GAME</title>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--   <script type="text/javascript" src="Js/page_acc.js"></script> -->
</head>
<body>
<!--  La barre de navigation -->  
    <?php include('includes/header.php');?>

<!-- La transition overlay qui recouvre l'image quand on scroll la page -->
     
    <div class="bg-overlay">
        <div class="intro-header" style="background-size: 100%;"></div>
    </div>
           
<div class="back"> <!-- la box arrière plan -->
    <div class="container">
        <div class="row mb-3"> <!-- mb= margin bottom, me=margin end, ms=margin start -->
            <div class="col-md-6 mt-5">
                <p>
                    <br>
                        <h1>A notre propos</h1>
                             <strong>M.K.A</strong> <em>(Our brand, Your entertainement)</em><br>
                                Crée par trois etudiants passionés<br>
                                par le developpement de jeux videos.<br>
                                Nous sommes votre source de divertissement.<br> Ce site de jeux 
                                vous présente trois jeux differents de niveaux. <br>Un Tchat à disposition commun ou privée 
                                <br>afin de partager vos experiences et un Bot  qui repondra à toutes vos questions.
                </p>
            </div>

            <div class="col-md-6 mt-5 mb-5 "> <!-- md= medium, la taille de l'écran -->
                <img  class="img-fluid" src="https://www.lsa-conso.fr/mediatheque/4/5/8/000220854_5.jpg" alt="image">
            </div>
        </div>
    </div>
</div>

<div class="vectoriel">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5 mb-5 ">
                <div id="rond"> </div>
            </div>
            <div class="col-md-4 mt-5 mb-5 ">
                <div id="triangle"> </div>
            </div>
            <div class="col-md-4 mt-5 mb-5 ">
                <div id="carre"></div>
            </div>
        </div>
    </div>
</div>

<div class="nosjeux">
    <h1>Nos Jeux</h1>
</div>

<div class="back2">
    <p>
        <br>
            Vous disposez de trois jeux de niveaux qui sont:  Snake, Ballz et Tic-Toc-Toe.<br>
            Il y a trois (3)niveaux de difficulté pour chaque jeux.<br>
            vous pouvez également avoir accès au prenium qui vous permettra de jouez d’autres niveaux.

    </p>
</div>


<div class="bouton">
    <a class="btn btn-success" href="page_jeu.php" role="button"><h3>Découvrez Nos <br>Jeux</h3></a>
</div>


<div class="back3">
    <h1>Découvrez le monde des jeux vidéos</h1>
</div>

<div class="lesimages">

    <img class="bande"src="https://static.hitek.fr/img/actualite/ill_m/454553930/maxresdefault-1-e1421245106141-933x445.jpg" alt="image">

   
    <img class="mario" src="https://jeu.video/wp-content/uploads/2017/09/source-nintendo-life.png" alt="image">
    <img class="overcook2"src="https://lageekbox.fr/wp-content/uploads/2018/08/1fc4e515-cadf-41eb-9553-ae50557c6a49.png" alt="image">

        <div class="row mb-3"> <!-- mb= margin bottom, me=margin end, ms=margin start -->
            <div class="col-md-12 ">

                <img class="collection"src="images/image.png">

                

            </div>
        </div>
</div>
       
<?php include('includes/footer.php');?>

</body>
</html>