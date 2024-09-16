<?php
session_start();  // Démarre la session

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");  // Redirige vers la page de connexion si non connecté
    exit;
}
?>
