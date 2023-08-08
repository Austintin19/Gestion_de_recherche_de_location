<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $mot_de_passe = isset($_POST["mot_de_passe"]) ? $_POST["mot_de_passe"] : "";

    try {
        // Connexion à la base de données
        $dsn = 'mysql:dbname=gestion_epreuves;host=localhost';
        $username = 'root';
        $password = '';
        $connection = new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête préparée pour la vérification des informations de connexion
        $stmt = $connection->prepare("SELECT * FROM utilisateurs WHERE email = :email AND mot_de_passe = :mot_de_passe");
        $mail = $email;
        $stmt->bindParam(":email", $mail);
        $stmt->bindParam(":mot_de_passe", $passwordHash);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->execute()) {
            // L'utilisateur est connecté avec succès, tu peux rediriger vers une page sécurisée
            header('Location: acceuil.php?' . http_build_query(['m' => $email, 'image' => $user['Image']]));
            exit;
        } else {
            // Les informations de connexion sont incorrectes
            echo "Email ou mot de passe incorrect";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
}
?>
