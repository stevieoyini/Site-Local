<?php
session_start();

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
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Recherche de l'utilisateur dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE email='$email'";
$resultat = $connexion->query($sql);

if ($resultat->num_rows > 0) {
    $utilisateur = $resultat->fetch_assoc();
    if (password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
        echo "Connexion réussie ! Bienvenue, " . $utilisateur['prenom'] . " " . $utilisateur['nom'] . "!";
          // Redirection vers la page projet
          header("Location: projets.php");
          exit();
      } else {
          echo "Mot de passe incorrect.";
      }
  } else {
      echo "Utilisateur non trouvé.";
  }
  
  // Fermeture de la connexion
  $connexion->close();
  ?>
?>
