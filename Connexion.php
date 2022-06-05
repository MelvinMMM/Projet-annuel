<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/stylecon.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Connexion</title>
    </head>
    <body>
        <?php include('includes/header.php');?>

        <main>
            
            <div class="connexion">
               <h1>Connexion</h1>
            </div>
            <?php
                if (isset($_GET['message']) && !empty($_GET['message'])) {
                    echo '<h3>' . htmlspecialchars($_GET['message']) . '</h3>';
                }

            ?>
                <form method="POST" action="verification.php">
                    <div class="form-group w-35 me-5 ms-5">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>">
                    </div>
                    
                    <div class="form-group w-35 me-5 ms-5">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp">
                      </div>

                      <button type="submit" style="background-color: #14FFFA;" class="btn mt-3">Se connecter</button>

                    </form>
                    
            </div>

            <div class="sign_in"><p>Appuyez</p>
            <a href="inscription.php">ici</a>
            <p>pour vous s'inscrire</p>
            </div>
        </main>
        <?php include('includes/footer.php'); ?>
        </body>


</html>
