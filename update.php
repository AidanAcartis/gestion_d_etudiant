<?php
include 'auth.php';  // Inclut la vérification de session
include 'config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $parcours = $_POST['parcours'];
    $filiere = $_POST['filiere'];
    $annee_etude = $_POST['annee_etude'];
    $moyenne = $_POST['moyenne'];

    $sql = "UPDATE etudiants SET prenom='$prenom', nom='$nom', date_naissance='$date_naissance', email='$email', telephone='$telephone', parcours='$parcours', filiere='$filiere', annee_etude='$annee_etude', moyenne='$moyenne' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Étudiant mis à jour avec succès.";
    } else {
        echo "Erreur de mise à jour : " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM etudiants WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Prénom: <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>" required><br>
    Nom: <input type="text" name="nom" value="<?php echo $row['nom']; ?>" required><br>
    Date de naissance: <input type="date" name="date_naissance" value="<?php echo $row['date_naissance']; ?>" required><br>
    E-mail: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    Téléphone: <input type="text" name="telephone" value="<?php echo $row['telephone']; ?>" required><br>
    Parcours: 
    <select name="parcours" required>
        <option value="Science" <?php if($row['parcours'] == 'Science') echo 'selected'; ?>>Science</option>
        <option value="Lettres" <?php if($row['parcours'] == 'Lettres') echo 'selected'; ?>>Lettres</option>
        <option value="Informatique" <?php if($row['parcours'] == 'Informatique') echo 'selected'; ?>>Informatique</option>
        <option value="Médecine" <?php if($row['parcours'] == 'Médecine') echo 'selected'; ?>>Médecine</option>
    </select><br>
    Filière: <input type="text" name="filiere" value="<?php echo $row['filiere']; ?>" required><br>
    Année d'étude: <input type="number" name="annee_etude" value="<?php echo $row['annee_etude']; ?>" min="1" max="5" required><br>
    Moyenne générale: <input type="number" step="0.01" name="moyenne" value="<?php echo $row['moyenne']; ?>" required><br>
    <input type="submit" name="update" value="Mettre à jour">
</form>
