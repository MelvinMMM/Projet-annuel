<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/inscription.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Inscription</title>
    </head>
    <body>
        <?php include('includes/header.php');?>
        <main style="margin-top:5%;height: 50%;">
            <div class="container">
                <div class="row">
                   <div class="col-12"><h1 class="text-center">Inscription</h1></div>
                </div>
                <?php
                    if (isset($_GET['message']) && !empty($_GET['message'])) {
                    echo '<h3 style="font-size: 15px; color: red;" class="text-center">' . htmlspecialchars($_GET['message']) . '</h3>';
                    }

                ?>

                    <form method="POST" action="vérification_inscription.php">

                        <div class="row">
                                <div class="col-6 form-check">
                                    <input class="form-check-input" type="radio" name="sexe" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">Femelle</label>
                                    </div>
                                    <div class="col-6 form-check">
                                    <input class="form-check-input" type="radio" name="sexe" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">Mâle</label>
                                    </div>
                        </div>
                    <div class="form-group w-75 me-5 ms-5">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control " name="nom" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group w-75 me-5 ms-5">
                        <label for="exampleInputEmail1">Prenom</label>
                        <input type="text" class="form-control" name="prenom" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group w-75 me-5 ms-5">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group w-75 me-5 ms-5">
                        <label for="exampleInputEmail1">Pseudo</label>
                        <input type="text" class="form-control" name="pseudo" aria-describedby="emailHelp">
                    </div>
                     
                      <div class="form-group w-75 me-5 ms-5">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp">
                      </div>
                      <button type="submit" style="background-color: #14FFFA"; class="btn mt-3">S'inscrire</button>

                    </form>

                <div class="sign_in"><p>Si vous avez un compte, appuyez sur</p>
                <a href="connexion.php"> connectez-vous</a>
                </div>
            </div>
        </main>
        <?php include('includes/footer.php'); ?>
    </body>
</html>
