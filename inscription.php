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
    <form action="#" method="post">
      <h2 class="Titre-Inscription">S'inscrire</h2>
      <div>
        <input type="text" name="nom" placeholder="Nom" required />
        <input type="text" name="prenom" placeholder="Prénom" required />
      </div>
      <div>
        <input type="email" name="email" placeholder="Email" required />
        <input type="tel" name="telephone" placeholder="Téléphone" required />
      </div>
      <div>
        <input
          type="text"
          name="profession"
          placeholder="Profession"
          required
        />
        <input
          type="password"
          name="motdepasse"
          placeholder="Mot de passe"
          required
        />
      </div>
      <button type="submit">s'inscrire</button>
      <p>
        Vos données personnelles ne sont utilisées qu'à des fins
        d'authentification et ne sont pas partagées avec des tiers
        <a href="EnSavoirPlus.php">(En savoir plus)</a>
      </p>
    </form>
  </body>
</html>
