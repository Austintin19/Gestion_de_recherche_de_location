<?php /*
    $nom = $_GET['$user'];
    $prenom = $_GET['$last'];
    echo $nom , $prenom ;
*/?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de maison</title>
    <link rel="stylesheet" href="bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap-3.4.1-dist/js/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        .col-6 {
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="container-fluide d-flex justify-content-center">
    <div class="col-4">
        <div class="row">
            <nav class="col-6 d-md-block bg-dark sidebar">
                <div class="position-sticky">
                    <h1 class="text-center py-4"></h1>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mes propriétés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gestion des propriétés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notifications et activités récentes</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Contenu de la page -->
            </main>
        </div>
    </div>
    <div class="col-8">
        <div class="container">
            <h1>Tableau de bord du propriétaire</h1>
            <!-- Vue d'ensemble des propriétés -->
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Propriétés totales</h5>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Annonces actives</h5>
                            <p class="card-text">8</p>
                        </div>
                    </div>
                </div>
                <!-- Ajoutez d'autres statistiques ici -->
            </div>

            <!-- Liste des propriétés -->
            <div class="mt-4">
                <h2>Mes propriétés</h2>
                <ul class="list-group">
                    <li class="list-group-item">Propriété 1</li>
                    <li class="list-group-item">Propriété 2</li>
                    <li class="list-group-item">Propriété 3</li>
                    <!-- Ajoutez plus d'éléments de liste ici -->
                </ul>
            </div>

            <!-- Options de gestion des propriétés -->
            <div class="mt-4">
                <h2>Gérer les propriétés</h2>
                <button class="btn btn-primary">Ajouter une propriété</button>
                <!-- Ajoutez des boutons pour modifier et supprimer les propriétés ici -->
            </div>

            <!-- Annonces de location -->
            <div class="mt-4">
                <h2>Mes annonces de location</h2>
                <ul class="list-group">
                    <li class="list-group-item">Annonce 1</li>
                    <li class="list-group-item">Annonce 2</li>
                    <li class="list-group-item">Annonce 3</li>
                    <!-- Ajoutez plus d'éléments de liste ici -->
                </ul>
            </div>

            <!-- Options de gestion des annonces -->
            <div class="mt-4">
                <h2>Gérer les annonces</h2>
                <button class="btn btn-primary">Ajouter une annonce</button>
                <!-- Ajoutez des boutons pour modifier et supprimer les annonces ici -->
            </div>
        </div>
    </div>
</body>
</html>
