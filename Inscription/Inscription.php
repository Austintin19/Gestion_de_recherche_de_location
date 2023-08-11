<?php
require("../Configs/config.php");
// Définir les variables pour la validation
$usernameErr = $passwordErr = $confirmPasswordErr = $prenomErr="";
$username = $password = $confirmPassword = $prenom = "";

// Fonction pour nettoyer les données entrées
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valider le nom d'utilisateur
    if (empty($_POST["username"])) {
        $usernameErr = "Le nom d'utilisateur est requis.";
    } else {
        $username = test_input($_POST["username"]);
        // Vérifier si le nom d'utilisateur a au moins 4 caractères
        if (strlen($username) < 4) {
            $usernameErr = "Le nom d'utilisateur doit avoir au moins 4 caractères.";
        }
    }

    // Valider le prénom
    if (empty($_POST["prenom"])) {
        $prenomErr = "Le prénom est requis.";
    } else {
        $prenom = test_input($_POST["prenom"]);
    }

    // Valider le mot de passe
    if (empty($_POST["password"])) {
        $passwordErr = "Le mot de passe est requis.";
    } else {
        $password = test_input($_POST["password"]);
        // Vérifier si le mot de passe a au moins 6 caractères
        if (strlen($password) < 6) {
            $passwordErr = "Le mot de passe doit avoir au moins 6 caractères.";
        }
    }

    // Valider la confirmation du mot de passe
    if (empty($_POST["confirmPassword"])) {
        $confirmPasswordErr = "Veuillez confirmer le mot de passe.";
    } else {
        $confirmPassword = test_input($_POST["confirmPassword"]);
        // Vérifier si le mot de passe et la confirmation du mot de passe correspondent
        if ($password != $confirmPassword) {
            $confirmPasswordErr = "La confirmation du mot de passe ne correspond pas.";
        }
    }

    // Si les entrées sont valides, enregistrer les données dans la base de données
    if (empty($usernameErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        // Connexion à la base de données
       

        // Vérifier s'il existe déjà un utilisateur avec le même nom
        $sql = "SELECT * FROM users WHERE nom = '$username' AND prenom = '$prenom'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $usernameErr = "Ce couple nom/prénom d'utilisateur est déjà utilisé.";
        } else {
            // Insérer les données dans la table
            $age = $_POST['age'];
            $sql = "INSERT INTO users (nom, prenom, age, mot_de_passe) VALUES ('$username', '$prenom', '$age', '$password')";
            if ($conn->query($sql) === TRUE) {
               
                
                    echo '<div style="    width: 90%;max-width: 400px;margin: auto;text-align: center;width: 95%;max-width: 400px;margin: auto;text-align: center;background: transparent;border: 2px solid rgba(255 , 255 , 255 , -5);border-top-left-radius: 50px;border-bottom-right-radius: 50px;backdrop-filter: blur(30px);margin-top: 20vh;padding: 5%;" ><h1>Inscription success <span> &#x2713 </span></h1><a href="connexion.php"><button type="submit" style="background-color: #4481b7; cursor:pointer" class="btn">Click to connection</button><a/></div> ';  
                
                exit;
            } else {
                echo "Erreur lors de l'enregistrement des données : " . $conn->error;
            }
        }

        $conn->close();
    }
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
</head>
<body>

    
 <div class="login">
<h2 class="p"  >Création de compte</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" class="email"  name="username" id="username" value="<?php echo $username; ?>">
    <span class="error"><?php echo $usernameErr; ?></span>
    <br><br>
    <label for="prenom">Prénom d'utilisateur:</label>
    <input class="email"  type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>" required>
    <span class="error"><?php echo $prenomErr; ?></span>
    <br><br>
    <label for="age">age</label>
    <input class="email"  type="number" min='10' value="10" name="age" id="password">
    <span class="error"><?php echo $passwordErr; ?></span>
    <br><br>
    <label for="password">Mot de passe:</label>
    <input class="email"  type="password" name="password" id="password">
    <span class="error"><?php echo $passwordErr; ?></span><br><br>
    <label for="password">Comfirmé le Mot de passe:</label>
    <input class="email"  type="password" name="confirmPassword" id="comfirmpassword">
    <span class="error"><?php echo $confirmPasswordErr; ?></span>

    <br><br>
    <div class="option">
            <a class="ins" href="connexion.php">Déja un compte ? Se connecter</a>
        </div>
        <input class="connexion" type="submit" name="submit" value="Valider &#8594" />
</form>
</div>
</body>
</html>
