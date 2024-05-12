<?php
session_start();

// Vérification de la session utilisateur
if (!isset($_SESSION['email'])) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connexion.php");
    exit();
}

// Initialisation d'une variable pour stocker les résultats de la recherche
$searchResults = "";

// Vérification si le formulaire de recherche a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Récupération de la valeur de recherche depuis le formulaire
    $searchInput = $_POST['searchInput'];

    // Requête SQL pour rechercher les utilisateurs correspondant à la recherche
    $sql = "SELECT * FROM utilisateurs WHERE 
            nom LIKE '%$searchInput%' OR 
            prenom LIKE '%$searchInput%' OR 
            profession LIKE '%$searchInput%' OR 
            email LIKE '%$searchInput%' OR 
            telephone LIKE '%$searchInput%'";

    $resultat = $connexion->query($sql);

    if ($resultat->num_rows > 0) {
        // Construction de la variable contenant les résultats de la recherche
        while ($utilisateur = $resultat->fetch_assoc()) {
            $searchResults .= "<p>";
            $searchResults .= "Nom: " . $utilisateur['nom'] . "<br>";
            $searchResults .= "Prénom: " . $utilisateur['prenom'] . "<br>";
            $searchResults .= "Profession: " . $utilisateur['profession'] . "<br>";
            $searchResults .= "Email: " . $utilisateur['email'] . "<br>";
            $searchResults .= "Téléphone: " . $utilisateur['telephone'] . "<br>";
            $searchResults .= "</p>";
        }
    } else {
        $searchResults = "Aucun résultat trouvé.";
    }

    // Fermeture de la connexion
    $connexion->close();
}
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="searchInput">Rechercher :</label>
        <input type="text" id="searchInput" name="searchInput" placeholder="Entrez le nom, profession, ou numéro de tél">
        <button type="submit">Rechercher</button>
    </form>
 <!-- Affichage des résultats de la recherche -->
 <div id="searchResults">
        <?php
        // Affichage des résultats de la recherche
        echo $searchResults;
        ?>
    </div>

<!-- Inclure ici les liens vers les fichiers JavaScript nécessaires -->
<script src="script.js"></script>
</section>

</body>
</html>