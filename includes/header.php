<header>
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <h1 class="text-center">M.K.A</h1>

        <nav class="navbar navbar-expand-lg navbar-light justify-content-around">

          <?php $class = $title = 'Accueil' ? 'active' : ''; ?>
              <a class="nav-link <?= $class ?>" href="index.php">Accueil</a>

            <?php 
            if(!isset($_SESSION['email']) || !$_SESSION['connect']){
                $class = $title == 'Inscription' ? 'active' : '';
                echo '<a class="nav-link ' . $class . '" href="inscription.php">Inscription</a>';

                $class = $title == 'Connexion' ? 'active' : '';
                echo '<a class="nav-link ' . $class . '" href="connexion.php">Connexion</a>';
                $class = $title == 'Profil' ? 'active' : '';

            }else if ($_SESSION['connect']){
                $class = $title == 'Jeux' ? 'active' : '';
                echo '<a class="nav-link ' . $class . '" href="page_jeu.php">jeux</a>';
                echo '<a class="nav-link ' . $class . '" href="profile.php">Mon profil</a>';
                $class = $title == 'Deconnexion' ? 'active' : '';
                echo '<a class="nav-link" href="deconnexion.php">Déconnexion</a>';
            }
            ?>

        </nav>

</header>
