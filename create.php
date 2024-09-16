<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $parcours = $_POST['parcours'];
    $filiere = $_POST['filiere'];
    $annee_etude = $_POST['annee_etude'];
    $moyenne = $_POST['moyenne'];

    $sql = "INSERT INTO etudiants (prenom, nom, date_naissance, email, telephone, parcours, filiere, annee_etude, moyenne) 
            VALUES ('$prenom', '$nom', '$date_naissance', '$email', '$telephone', '$parcours', '$filiere', '$annee_etude', '$moyenne')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Étudiant ajouté avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form action="create.php" method="POST">
    Prénom: <input type="text" name="prenom" required><br>
    Nom: <input type="text" name="nom" required><br>
    Date de naissance: <input type="date" name="date_naissance" required><br>
    E-mail: <input type="email" name="email" required><br>
    Téléphone: <input type="text" name="telephone" required><br>
    Parcours: 
    <select name="parcours" required>
        <option value="Science">Science</option>
        <option value="Lettres">Lettres</option>
        <option value="Informatique">Informatique</option>
        <option value="Médecine">Médecine</option>
    </select><br>
    Filière: <input type="text" name="filiere" required><br>
    Année d'étude: <input type="number" name="annee_etude" min="1" max="5" required><br>
    Moyenne générale: <input type="number" step="0.01" name="moyenne" required><br>
    <input type="submit" name="submit" value="Ajouter">
</form>