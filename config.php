<?php
session_start();  // Démarre la session

$servername = "localhost";
$username = "jennie";
$password = "Str0ng!P@ssw0rd2024";
$dbname = "etudiants";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérification si l'utilisateur est connecté
// Assurez-vous que la page "login.php" est exclue de cette vérification
if (!isset($_SESSION['admin_logged_in']) && basename($_SERVER['PHP_SELF']) != 'index.php') {
    header("Location: index.php");
    exit;
}
?>
