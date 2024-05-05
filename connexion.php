<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Base Template Responsive 2 colonnes Full Width</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" lang="fr" content="DESCRIPTION DU SITE" />
        <meta name="author" content="AUTEUR" />
        <meta name="robots" content="index, follow" />
        <!-- ICONES -->
        <link rel="favicon-icon" href="img/favicon.png" />
        <link rel="shortcut icon" href="img/favicon.ico" />
        <!-- CSS -->
        <link rel="stylesheet" href="main.css" />
        <!-- JS -->
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      </head>
<body>
    <header>
        <div>
          <div class="header-logo">
            <img
              id="logo-principal"
              src="./Images/Arrows-Logo.png"
              alt="Logo du site"
            />
          </div>
  
          <div class="header-droite">
            <img src="./Images/utilisateur.png" id="imgage-inscription" />
            <a class="lien" href="inscription.php">Inscription</a
            >&nbsp;|&nbsp;&nbsp;
            <a class="lien" href="connexion.php">Connexion</a>
          </div>
  
          <div class="clear"></div>
        </div>
      </header>
  
      <nav>
        <div class="container">
          <ul>
            <li><a href="index.php" class="lien-menu">Accueil</a></li>
            <li><a href="projets.php" class="lien-menu">Projets</a></li>
            <li><a href="" class="lien-menu">Planning</a></li>
          </ul>
        </div>
      </nav>

      <div>
        <form action="#" method="post" class="formulaire-Connexion">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="email" required />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" placeholder="mot de passe" required >
            </div>
            <div>
                <a class="btn">Se connecter</a>
            </div>
            <a href="MotDePasseOublie.php" class="Mot-DePasse-Oublie">Mot de passe oublié ?</a>
        </form>
</body>
</html>