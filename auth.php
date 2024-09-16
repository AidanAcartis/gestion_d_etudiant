<?php
session_start();  // Démarre la session
// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== false) {
    header("Location: index.php");  // Rediriger vers la page de connexion
    exit;
}
?>
