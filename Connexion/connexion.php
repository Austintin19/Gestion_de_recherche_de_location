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
$submitted_username = $_POST['username'];
$submitted_password = $_POST['password'];
$submitted_prenom = $_POST['prenom'];

// Requête SQL pour vérifier les identifiants dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE nom = :username AND mot_de_passe = :password AND prenom = :prenom";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $submitted_username);
$stmt->bindParam(':password', $submitted_password);
$stmt->bindParam(':prenom', $submitted_prenom);
$stmt->execute();

// Si la requête a réussi, vérifier si l'utilisateur existe
if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer les informations de l'utilisateur

    // Enregistrer les informations dans la session (éviter de stocker le mot de passe en clair)
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['nom'];
    $_SESSION['prenom'] = $user['prenom'];

    // Rediriger vers la page d'accueil
    header("Location: ");
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
              <form action="#" method="POST" enctype="multipart/form-data">
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
