<?php
 if (isset($_GET['$m']) AND isset($_GET['$image'])) {
  echo $_GET['$m'];
  echo $_GET['$image'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableau de Bord</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.4.1-dist/js/jquery-3.7.0.min.js"></script>
    <script src="bootstrap-3.4.1/fonts/glyphicons-halflings-regular.svg" ></script>
    <!-- Inclure le fichier CSS personnalisé -->
    <style>
/* Bouton ou icône pour afficher/masquer le menu */
.toggle-button {
    position: fixed;
    top: 10px;
    left: 10px;
    z-index: 101; /* Plus haut que le menu */
}

/* Ajoutez d'autres styles pour le bouton ou l'icône ici */

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row"> 
            <!-- Menu de navigation gauche -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Tableau de Bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                À Propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Commentaire
                            </a>
                        </li>
                        <!-- Ajoutez d'autres éléments du menu ici -->
                    </ul>
                </div>
            </nav>


            <!-- Contenu principal -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tableau de Bord</h1>
                </div>

                <!-- Informations sur la Gestion des Épreuves -->
                <div class="card" id="filiere1">
                    <div class="card-header">
                        Filière 1
                    </div>
                    <div class="card-body">
                        <!-- Afficher les fichiers d'épreuves pour la Filière 1 -->
                        <ul>
                            <li>Fichier Épreuve 1</li>
                            <li>Fichier Épreuve 2</li>
                            <!-- Ajoutez d'autres fichiers d'épreuves ici -->
                        </ul>
                    </div>
                </div>

                <div class="card" id="filiere2">
                    <div class="card-header">
                        Filière 2
                    </div>
                    <div class="card-body">
                        <!-- Afficher les fichiers d'épreuves pour la Filière 2 -->
                        <ul>
                            <li>Fichier Épreuve 1</li>
                            <li>Fichier Épreuve 2</li>
                            <!-- Ajoutez d'autres fichiers d'épreuves ici -->
                        </ul>
                    </div>
                </div>
            </main>
            </main>
        </div>
    </div>

    <!-- Inclure le fichier JavaScript de Bootstrap (facultatif) -->
     
    <!-- Inclure votre fichier JavaScript personnalisé -->
    
    <script>
    $(document).ready(function() {
        // Gérer le comportement de l'animation du menu
        $(".nav-link").on("click", function() {
            $(".sidebar-sticky").toggleClass("active");
        });
    });
</script>
</body>
</html>
