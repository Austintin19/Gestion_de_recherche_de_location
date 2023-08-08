<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
    $birthdate = isset($_POST["birthdate"]) ? $_POST["birthdate"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $mot_de_passe = isset($_POST["mot_de_passe"]) ? $_POST["mot_de_passe"] : "";
    $confirm_mot_de_passe = isset($_POST["mot_de_passe_confirm"]) ? $_POST["mot_de_passe_confirm"] : "";
    $image = isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : "";

    // Vérifier si les mots de passe correspondent
    if ($mot_de_passe !== $confirm_mot_de_passe) {
        echo "Les mots de passe ne correspondent pas.";
        exit();
    }

    // Connexion à la base de données
    $dsn = 'mysql:dbname=gestion_epreuves;host=localhost';
    $username = 'root';
    $password = '';
    
    try {
        $connection = new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Vérifier si l'email existe déjà dans la table utilisateurs
        $query = "SELECT COUNT(*) FROM utilisateurs WHERE email = ?";
        $stmt = $connection->prepare($query);
        $stmt->execute([$email]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            echo "Cet email est déjà utilisé.";
            exit();
        }
        // Requête préparée pour insertion
        $query = "INSERT INTO utilisateurs (nom, prenom, Birth, email, mot_de_passe, Image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($query);

        // Hashage du mot de passe
        $hashedPassword = hash('sha256', $mot_de_passe);

        $stmt->execute([$nom, $prenom, $birthdate, $email,$hashedPassword, $image]);

        echo 'Inscription réussie!<br>';
        echo '<a href="connexion.html"> Connexion </a>';
    } catch (PDOException $e) {
        echo "Erreur lors de l'inscription: " . $e->getMessage();
        require('inscription.html');
    }
}
?>