<?php
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
?>