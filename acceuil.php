<?php
 if (isset($_GET['$m']) AND isset($_GET['$image'])) {
  echo $_GET['$m'];
  echo $_GET['$image'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de maison</title>
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.4.1-dist/js/jquery-3.7.0.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <style>
        body {
            background-image: url();
            background-repeat: no-repeat;
            background-size: cover;
            color: #0f0f0f;
            padding-top: 0px;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo.webp" class="img-fluid" width="15%" height="15%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="input-group-md d-flex justify-content-center align-items-center">
                        <input type="text" class="form-control" placeholder="Rechercher une maison">
                        <div class="input-group-append ms-4">
                            <button class="btn btn-primary" type="submit">Rechercher</button>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
<main>
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Location de maison</h1>
            <p class="lead text-center">Trouvez la maison parfaite pour vos vacances ou vos séjours professionnels.</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="maison1.jpg" width="100%" height="100%" alt="Image d'une maison">
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li>Plus de 100 000 maisons disponibles</li>
                        <li>Des locations à tous les prix</li>
                        <li>Une équipe d'experts à votre service</li>
                        <li>Un service de paiement sécurisé</li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <a href="maisons" class="btn btn-primary btn-lg">Voir nos maisons</a>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner container-fluide">
                <div class="carousel-item active">
                    <img src="silde%20(1).jpg" width="100%" height="600" alt="Image d'une maison">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Trouvez la maison parfaite pour vos vacances ou vos séjours professionnels.</h5>
                        <p>Nous vous proposons une large gamme de services pour vous aider à trouver la maison parfaite pour vos besoins.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="silde%20(2).jpg" width="100%" height="600" alt="Image d'une autre maison">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Plus de 100 000 maisons disponibles</h5>
                        <p>Des locations à tous les prix</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="silde%20(3).jpg" width="100%" height="600" alt="Image d'une troisième maison">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Une équipe d'experts à votre service</h5>
                        <p>Un service de paiement sécurisé</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="carousel-indicators">
                <button class="carousel-control-item active" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                <button class="carousel-control-item" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button class="carousel-control-item" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>

    </section>
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">Avis de nos clients</h2>
            <blockquote class="blockquote text-center">
                <p>"Je suis très satisfaite de mes vacances dans cette maison. Elle était exactement comme je l'avais imaginée. Les propriétaires étaient très accueill
            </blockquote>
        </div>
        <section class="py-5">
            <div class="container">
                <h2 class="text-center">Contactez-nous</h2>
                <p class="lead text-center">N'hésitez pas à nous contacter si vous avez des questions ou si vous souhaitez obtenir plus d'informations.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li>Adresse : 123 Main Street, Anytown, CA 12345</li>
                            <li>Téléphone : (123) 456-7890</li>
                            <li>Email : info@example.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <form action="#">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" placeholder="Votre nom">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Votre email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
            <footer class="footer fixed-bottom footer-dark bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-unstyled list-inline d-flex justify-content-between align-items-center">
                                <li><a href="#" class="link">A propos</a></li>
                                <li><a href="#" class="link">Contact</a></li>
                                <li><a href="#" class="link">Politique de confidentialité</a></li>
                                <li><a href="#" class="link">Conditions d'utilisation</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><a href="#" class="link">Suivez-nous sur Facebook</a></li>
                                <li><a href="#" class="link">Suivez-nous sur Twitter</a></li>
                                <li><a href="#" class="link">Suivez-nous sur Instagram</a></li>
                                <li><a href="#" class="link">Suivez-nous sur LinkedIn</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <p class="text">Copyright &copy; 2023 Location de maison</p>
                        </div>
                    </div>
                </div>
            </footer>


        <style>
            footer {
                background-color: #f0f0f0;
                padding: 20px;
                text-align: center;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            li {
                display: inline-block;
                margin-right: 10px;
            }

            a {
                color: #000;
                text-decoration: none;
            }
            .text,.link {
                color: #FFFFFF;
            }
            .text:hover,.link:hover {
                color: #0b5ed7;
            }
        </style>

</body>
</html>
