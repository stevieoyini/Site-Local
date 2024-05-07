
<?php
session_start();

// Vérification de la session utilisateur
if (!isset($_SESSION['email'])) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connexion.php");
    exit();
}

// Maintenant que l'utilisateur est connecté, von affiche le contenu de la page du projet
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Base Template Responsive 2 colonnes Full Width</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" lang="fr" content="DESCRIPTION DU SITE">
<meta name="author" content="AUTEUR">
<meta name="robots" content="index, follow">
<!-- ICONES -->
<link rel="favicon-icon" href="img/favicon.png">
<link rel="shortcut icon" href="img/favicon.ico">
<!-- CSS -->
<link rel="stylesheet" href="main.css">
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

<section >
<p>Bienvenue sur la page des recherches, <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?>!</p><br>
  <form id="searchForm">
    <label for="searchInput">Rechercher :</label>
    <input type="text" id="searchInput" name="searchInput" placeholder="Entrez le nom, numéro de téléphone, email ou profession">
    <button type="submit">Rechercher</button>
</form>

<!-- Conteneur pour afficher les résultats de la recherche -->
<div id="searchResults">
    <!-- Les résultats de la recherche seront affichés ici -->
</div>

<!-- Inclure ici les liens vers les fichiers JavaScript nécessaires -->
<script src="script.js"></script>
</section>

</body>
</html>