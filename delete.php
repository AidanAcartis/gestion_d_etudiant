<?php
include 'auth.php';  // Inclut la vérification de session
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM etudiants WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Étudiant supprimé avec succès.";
    header("Location: accueil.php");
} else {
    echo "Erreur de suppression : " . $conn->error;
}

$conn->close();
?>