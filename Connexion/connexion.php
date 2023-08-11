<?php
global $prenom;
ob_start(); // Démarre la mise en tampon de sortie
  session_start(); // Démarre une session
require('../Configs/config.php')
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page de connexion</title>
  <link rel="stylesheet" href="connexion.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap-3.4.1-dist/js/jquery-3.7.0.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js"></script>
</head>
<body>
<?php

// Définir les paramètres de connexion à la base de données
$dsn = "mysql:host=localhost;dbname=gestion_recherche_location";
$username = "root";
$password = "";

// Créer une instance PDO
$conn = new PDO($dsn, $username, $password);

// Définir le mode d'erreur sur les exceptions
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Échapper les caractères spéciaux pour éviter les injections SQL
$escaped_username = $conn->htmlspecialchars($username);
$escaped_password = $conn->htmlspecialchars($password);
$escaped_prenom = $conn->htmlspecialchars($prenom);

// Vérifier les identifiants dans la base de données
$sql = "SELECT * FROM users WHERE nom = :username AND mot_de_passe = :password AND prenom = :prenom";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $escaped_username);
$stmt->bindParam(':password', $escaped_password);
$stmt->bindParam(':prenom', $escaped_prenom);
$stmt->execute();

// Si la requête a réussi, vérifier si l'utilisateur existe
if ($stmt->rowCount() > 0) {
    // L'utilisateur existe, enregistrer les informations dans la session
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['prenom'] = $prenom;

    // Rediriger vers la page d'accueil
    header("Location: ../");
    exit();
} else {
    // L'utilisateur n'existe pas, afficher un message d'erreur
    $error_message = "Identifiants incorrects.";
}

?>

<!DOCTYPE html>
  <html>
  <head>
      <title>Page de connexion</title>
      <link rel="stylesheet" href="bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
      <link rel="stylesheet" href="connexion.css" >
      <script src="bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
      <script src="bootstrap/bootstrap-3.4.1-dist/js/jquery-3.7.0.min.js"></script>
      <script src="https://unpkg.com/vue"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js"></script>
  </head>
  <body>
  <div class="container-sm ">
      <div class="row justify-content-center">
          <div class="col-md-4">
              <h2 class="text-center text-light">Connexion</h2>
              <form action="connexion.php" method="POST">
                  <div class="form-group mb-3">
                      <label for="name" class="form-label text-light">Nom</label>
                      <input type="text" class="form-control" id="name" name="username" placeholder="Nom d'utilisateur">
                  </div>
                  <div class="form-group mb-3">
                      <label for="prenom" class="form-label text-light">Prénom</label>
                      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom d'utilisateur">
                  </div>
                  <div class="form-group mb-3">
                      <label for="pass" class="form-label text-light">Mot de passe</label>
                      <input type="password" class="form-control" id="pass" name="password" placeholder="Mot de passe">
                  </div>
                  <div class="form-group mb-3 mt-3">
                      <a href="Inscription.php" class="btn btn-secondary">Vous n'avez pas encore de compte? S'inscrire</a>
                  </div>
                  <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-primary ">Connexion &rarr;</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <?php
    ob_end_flush(); // Envoie le tampon de sortie
  ?>
</body>
</html>
