<?php
include 'auth.php';  // Inclut la vérification de session
include 'config.php';

$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Bienvenue sur la page d'accueil</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Parcours</th><th>Filière</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['parcours'] . "</td>";
        echo "<td>" . $row['filiere'] . "</td>";
        echo "<td>
                <a href='read.php?id=" . $row['id'] . "'>Voir</a> |
                <a href='update.php?id=" . $row['id'] . "'>Modifier</a> |
                <a href='delete.php?id=" . $row['id'] . "'>Supprimer</a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun étudiant trouvé.";
}

$conn->close();
?>

<a href="create.php">Ajouter un nouvel étudiant</a>