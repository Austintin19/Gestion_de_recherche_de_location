<?php
global $conn;
require('../Configs/config.php');

// Définition des variables et initialisation des messages d'erreur
$username = $prenom = $role = $date_inscription = $password = $confirmPassword = "";
$usernameErr = $prenomErr = $roleErr = $dateInscriptionErr = $passwordErr = $confirmPasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validation et traitement des données du formulaire

    if (empty($usernameErr) && empty($prenomErr) && empty($roleErr) && empty($dateInscriptionErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        // Hashage du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insertion des données dans la base de données
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, prenom, role, date_inscription, mot_de_passe) VALUES (:nom, :prenom, :role, :date_inscription, :mot_de_passe)");
        $stmt->bindParam(':nom', $username);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':date_inscription', $date_inscription);
        $stmt->bindParam(':mot_de_passe', $hashedPassword);

        $date_inscription = $_POST['date_inscription'];
        $role = $_POST['role'];
        $username = $_POST['username'];
        $prenom = $_POST['prenom'];

        if ($stmt->execute()) {
            // Redirection vers la page de connexion après l'inscription réussie
            header("Location: ../Connexion/connexion.php");
            exit();
        } else {
            echo "Erreur lors de l'inscription : " . $stmt->error;
        }
    }

    $conn = null; // Fermeture de la connexion
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Création de compte</title>
    <style>
        .error {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="../bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/bootstrap-3.4.1-dist/js/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-transparent" style="margin-top: -3vh; margin-bottom: -3vh">
                    <div class="card-header">
                        <h2 class="text-center text-light">Création de compte</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-group">
                                <label for="username" class="text-light">Nom </label>
                                <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>">
                                <span class="error"><?php echo $usernameErr; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="text-light">Prénom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $prenom; ?>" required>
                                <span class="error"><?php echo $prenomErr; ?></span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="prenom" class="text-light">Email</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $prenom; ?>" required>
                            <span class="error"><?php echo $prenomErr; ?></span>
                        </div>
                        <div class="form-group mb-4">
                            <label for="role" class="text-light">Rôle</label>
                            <select class="form-control" name="role" id="role">
                                <option value="locataire">Locataire</option>
                                <option value="proprietaire">Propriétaire</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="date_inscription" class="text-light">Date d'inscription</label>
                            <input type="date" class="form-control" name="date_inscription" id="date_inscription">
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-group">
                                <label for="password" class="text-light">Mot de passe</label>
                                <input type="password" class="form-control" name="password" id="password">
                                <span class="error"><?php echo $passwordErr; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword" class="text-light">Confirmer le mot de <passe></passe></label>
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                                <span class="error"><?php echo $confirmPasswordErr; ?></span>
                            </div>
                        </div>

                        <div class="form-group mb-4 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkboxAgree" required>
                                <label class="form-check-label text-light" for="checkboxAgree">
                                    J'accepte les <a href="../Condition.html" class="link-primary">Conditions Générales d'Utilisation </a>
                                </label>
                            </div>
                        </div>

                        <div class="text-center m-3">
                            <button type="submit" class="btn btn-primary">Valider &#8594;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
