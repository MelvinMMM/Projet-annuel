<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/styleconnexion.css">
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

            <div class="formconnexion">
                <div class="formconnexion_title">
                    <p>Pseudo :</p>
                    <p>Password :</p>
                </div>
                <form method="POST" action="verification.php">
                    <input class="mb-2 mt-2" type="email" name="email" placeholder="Your email" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>">
                    
                    <input type="password" name="mdp" placeholder="Your password">
                    
                </form>
            </div>
            <div class="secoco">
                <input class="w-50 mt-2" type="submit" value="Se connecter">
            </div>
            <div class="sign_in">
            <a href="inscription.php">Sign on</a>
            </div>
        </main>
        <?php include('includes/footer.php'); ?>
        </body>


</html>