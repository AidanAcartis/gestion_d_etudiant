<?php
// Inclure le fichier de configuration
include 'config.php';

// Tester la connexion à la base de données
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}

// Fermer la connexion après le test
$conn->close();
?>
