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
        <main style="margin-top:10%;height: 50%;">
            <div class="container">
                <div class="row">
                   <div class="col-12"><h1 class="text-center">Inscription</h1></div>
                </div>
                <?php
                    if (isset($_GET['message']) && !empty($_GET['message'])) {
                    echo '<h3>' . htmlspecialchars($_GET['message']) . '</h3>';
                    }

                ?>

                    <form method="POST" action="verification.php">

                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-3">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Femelle</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Mâle</label>
                                </div>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" name="nom" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prenom</label>
                        <input type="text" class="form-control" name="prenom" aria-describedby="emailHelp">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp">
                      </div>
                      <div class="form-group mb-2">
                        <label for="exampleInputPassword1">Confirmez le mot de passe</label>
                        <input type="password" class="form-control" name="conf_mdp">
                      </div>


                      <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                <div class="sign_in">
                <a href="connexion.php">Log in</a>
                </div>
            </div>
        </main>
        <?php include('includes/footer.php'); ?>
    </body>
</html>