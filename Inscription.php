<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/styleinscription.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Inscription</title>
    </head>
    <body>
        <?php include('includes/header.php');?>
        <main>
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
                            <div class="col-3"><input type="button" name="women" value="women"></div>
                            <div class="col-3"><input type="button" name="mâle" value="male"></div>
                            <div class="col-3"></div>
                        </div>
                        <div class="row">                         
                            <div class="col-6"><p>Name :</p></div>
                            <div class="col-2"><input type="text" name="prenom" placeholder=""></div><div class="col-4"></div>
                        </div>

                        <input type="email" name="email" placeholder="Your email" >
                        <input type="password" name="mdp" placeholder="Your password">
                        <input type="submit" value="Se connecter">
                    </form>
                <div class="sign_in">
                <a href="connexion.html">Log in</a>
                </div>
            </div>
        </main>
        <?php include('includes/footer.php'); ?>
        </body>


</html>