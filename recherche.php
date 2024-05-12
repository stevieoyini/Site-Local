<?php
session_start();

// Vérification de la session utilisateur
if (!isset($_SESSION['email'])) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connexion.php");
    exit();
}

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
    // Affichage des résultats de la recherche
    while ($utilisateur = $resultat->fetch_assoc()) {
        echo "<p>";
        echo "Nom: " . $utilisateur['nom'] . "<br>";
        echo "Prénom: " . $utilisateur['prenom'] . "<br>";
        echo "Profession: " . $utilisateur['profession'] . "<br>";
        echo "Email: " . $utilisateur['email'] . "<br>";
        echo "Téléphone: " . $utilisateur['telephone'] . "<br>";
        echo "</p>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Fermeture de la connexion
$connexion->close();
?>
