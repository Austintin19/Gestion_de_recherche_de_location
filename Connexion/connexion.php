<?php
  ob_start(); // Démarre la mise en tampon de sortie
  session_start(); // Démarre une session
require('../Configs/config.php')
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page de connexion</title>
  <link rel="stylesheet" href="connexion.css">
</head>
<body>
  <?php
    $error_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $prenom = $_POST['prenom'];

      if (strlen($username) < 4) {
        $error_message = "Le nom d'utilisateur doit faire au moins 4 caractères.";
      } elseif (strlen($password) < 6 && $username != 'admin') {
        $error_message = "Le mot de passe doit faire au moins 6 caractères.";
      }  else {
        

        // Échapper les caractères spéciaux pour éviter les injections SQL
        $escaped_username = $conn->real_escape_string($username);
        $escaped_password = $conn->real_escape_string($password);
        $escaped_prenom = $conn->real_escape_string($prenom);

        // Vérifier les identifiants dans la base de données
        $sql = "SELECT * FROM users WHERE nom = '$escaped_username' AND mot_de_passe = '$escaped_password' AND prenom = '$escaped_prenom'";
        $result = $conn->query($sql);
        

        if ($result->num_rows > 0) {
          // Identifiants valides, enregistre les informations dans la session
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
          $_SESSION['username'] = $username;

          // Rediriger vers la page d'accueil
          header("Location: ../");
          exit();
        } else {
          // Identifiants incorrects
          $error_message = "Identifiants incorrects.";
        }

        $conn->close();
      }
    }
  ?>
<div class="all">
  <div class="connexio">

    <h2 class="p" >Connexion</h2>
    <form id="login-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="error-message"><?php echo $error_message; ?></div>
    <label for="email">Nom</label>
        <input class="email" type="text" name="username" placeholder="Nom">
    <label for="prenom">Prénom</label>
        <input class="email" type="text" name="prenom" placeholder = "Prénom d'utilisateur">
    <label for="pass">Mot de passe</label>
        <input class="email" type="password" id="pass" name="password" placeholder="Mot de passe" placeholder="Entrez votre mot de passe">

        <div class="option">
            <a class="ins" href="Inscription.php">Vous n'aves pas encore de compte? S'inscrire</a>
        </div>
        <input class="connexion" type="submit" value="Connexion &#8594" />
    </form>
    
  </div>
  </div>
  <?php
    ob_end_flush(); // Envoie le tampon de sortie
  ?>
</body>
</html>
