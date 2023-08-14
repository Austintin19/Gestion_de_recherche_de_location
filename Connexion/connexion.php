<?php
try {
    $dsn = "mysql:host=localhost;dbname=gestion_recherche_location";
    $username = "root";
    $password = "";

    $conn = new PDO($dsn, $username, $password);

    // La connexion a réussi !
    # echo "Connexion réussie à la base de données."
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
session_start();

// Récupérer les valeurs soumises par le formulaire
$submitted_email = $_POST['email'];
$submitted_password = $_POST['password'];

// Requête SQL pour vérifier les identifiants dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE email = :email AND mot_de_passe = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $submitted_email);
$stmt->bindParam(':password', $submitted_password);
$stmt->execute();

// Si la requête a réussi, vérifier si l'utilisateur existe
if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer les informations de l'utilisateur

    // Enregistrer les informations dans la session (éviter de stocker le mot de passe en clair)
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['nom'];
    $_SESSION['prenom'] = $user['prenom'];

    // Rediriger vers la page d'accueil
    header('Location: ../dashboard.php?user='.$_SESSION['username'].'&last='.$_SESSION['prenom']);
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
  <div class="container-sm ">
      <div class="row justify-content-center">
          <div class="col-md-4">
              <h2 class="text-center text-light">Connexion</h2>
              <form action="connexion.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                      <label for="email" class="form-label text-light">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
                  </div>
                  <div class="form-group mb-3">
                      <label for="pass" class="form-label text-light">Mot de passe</label>
                      <input type="password" class="form-control" id="pass" name="password" placeholder=" Votre mot de passe">
                  </div>
                  <div class="form-group mb-3 mt-3">
                      <a href="../Inscription/Inscription.php" class="btn btn-secondary">Vous n'avez pas encore de compte? S'inscrire</a>
                  </div>
                  <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-primary ">Connexion &rarr;</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</body>
</html>
