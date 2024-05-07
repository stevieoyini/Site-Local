

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
  </body>
</html><br>
<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "private_crm";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$profession = $_POST['profession'];
$mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

// Insertion des données dans la base de données
$sql = "INSERT INTO utilisateurs (nom, prenom, email, telephone, profession, mot_de_passe) VALUES ('$nom', '$prenom', '$email', '$telephone', '$profession', '$mot_de_passe')";

if ($connexion->query($sql) === TRUE) {
    echo "	&nbsp; Inscription réussie ! connectez-vous à l'aide de votre e-mail et mot de passe";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}

// Fermeture de la connexion
$connexion->close();
?>
