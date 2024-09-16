<?php
session_start();
include 'config.php';

// Vérifier si le formulaire a été soumis
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ici, vous pouvez utiliser des informations de connexion codées en dur ou les récupérer depuis une base de données
    // Exemple d'informations d'identification en dur :
    $admin_username = 'admin';
    $admin_password = 'password123';

    // Vérification des informations d'identification
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = false;  // Met à jour la session pour indiquer que l'admin est connecté
        header("Location: accueil.php");  // Redirige vers la page d'accueil
        exit;
    } else {
        $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion Administrateur</title>
</head>
<body>
    <h2>Connexion Administrateur</h2>
    <?php if (isset($error_message)) { echo "<p style='color:red;'>$error_message</p>"; } ?>

    <form action="index.php" method="POST">
        Nom d'utilisateur: <input type="text" name="username" required><br>
        Mot de passe: <input type="password" name="password" required><br>
        <input type="submit" name="login" value="Se connecter">
    </form>
</body>
</html>
