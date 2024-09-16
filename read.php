<?php
include 'auth.php';  // Inclut la vérification de session
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les détails de l'étudiant en fonction de l'ID
    $sql = "SELECT * FROM etudiants WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Détails de l'étudiant</h2>";
        echo "<p><strong>Prénom :</strong> " . $row['prenom'] . "</p>";
        echo "<p><strong>Nom :</strong> " . $row['nom'] . "</p>";
        echo "<p><strong>Date de naissance :</strong> " . $row['date_naissance'] . "</p>";
        echo "<p><strong>Email :</strong> " . $row['email'] . "</p>";
        echo "<p><strong>Téléphone :</strong> " . $row['telephone'] . "</p>";
        echo "<p><strong>Parcours :</strong> " . $row['parcours'] . "</p>";
        echo "<p><strong>Filière :</strong> " . $row['filiere'] . "</p>";
        echo "<p><strong>Année d'étude :</strong> " . $row['annee_etude'] . "</p>";
        echo "<p><strong>Moyenne générale :</strong> " . $row['moyenne'] . "</p>";
        echo "<p><strong>Créé le :</strong> " . $row['created_at'] . "</p>";
    } else {
        echo "Aucun étudiant trouvé avec cet ID.";
    }
} else {
    echo "ID d'étudiant non fourni.";
}

$conn->close();
?>
