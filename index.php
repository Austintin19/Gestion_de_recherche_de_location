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
    <link rel="stylesheet" href="bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap-3.4.1-dist/js/jquery-3.7.0.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js"></script>

    <style>
        body {
            background-image: url();
            background-repeat: no-repeat;
            background-size: cover;
            color: #0f0f0f;
            padding-top: 0px;
        }
         .navbar-nav .nav-link:hover {
             color: #66afe9;
         }
        #section1 {
            background: linear-gradient(to bottom, #00416A, #E4E5E6);
            height: 100vh;
        }
        #section2 {
            background: linear-gradient(to top, #00416A, #E4E5E6);
            height: 100vh;
        }

    </style>
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mx-4" href="#"><img src="" width="50" alt="Logo Maison"></a>
            <div class="d-none d-md-block">
                <a  href="inscription.html" class="link link-light" >
                    <marquee direction="left" behavior="scroll" class="text-center">
                        Recherche de Location de maison
                    </marquee>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            FAQ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Question 1</a>
                            <a class="dropdown-item" href="#">Question 2</a>
                            <a class="dropdown-item" href="#">Question 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline d-flex justify-content-between align-items-centerx">
                            <input class="form-control" type="search" placeholder="Rechercher une maison" aria-label="Rechercher">
                            <button class="btn btn-outline-light ms-4" type="submit">Rechercher</button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

<script>
    window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 80) {
            navbar.style.backgroundColor = "#343a40"; // Fond dark lorsque l'utilisateur fait défiler la page
            navbar.style.boxShadow = "2px 2px 2px rgba(0, 0, 0, 0.5)";
        } else {
            navbar.style.backgroundColor = "transparent"; // Fond transparent par défaut
            navbar.style.boxShadow = "0 0 0 rgba(0, 0, 0)";
        }
    });
</script>

</header>
<main>

    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner container-fluide">
                <div class="carousel-item active">
                   <img src="image/pexel%20(1).jpg" class="d-block w-100" height="700" alt="Image d'une maison">
                    <div class="carousel-caption d-block">
                        <h5>Trouvez la maison parfaite pour vos vacances ou vos séjours professionnels.</h5>
                        <p>Nous vous proposons une large gamme de services pour vous aider à trouver la maison parfaite pour vos besoins</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/pexel%20(3).jpg" class="d-block w-100" height="700" alt="Image d'une maison">
                    <div class="carousel-caption d-block">
                        <h5>Plus de 100 000 maisons disponibles</h5>
                        <p>Des locations à tous les prix</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/pexel%20(2).jpg" class="d-block w-100" height="700" alt="Image d'une maison">
                    <div class="carousel-caption d-block">
                        <h5>Une équipe d'experts à votre service</h5>
                        <p>Un service de paiement sécurisé</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
    </section>
    <section class="py-5 gradient-bg" id="section1">
        <div class="container">
            <h2 class="text-center">Pourquoi choisir notre service de location</h2>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div id="carouselFeature1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/vac1.jpg" alt="Image 1" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/vac%20(1).jpg" alt="Image 2" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/vac%20(2).jpg" alt="Image 3" class="d-block w-100 img-fluid">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselFeature1" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselFeature1" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="text-center">
                        <h4>Large sélection</h4>
                        <p>Nous vous offrons un vaste choix de maisons de vacances dans différentes destinations.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="carouselFeature2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/vac1.jpg" alt="Image 1" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/vac%20(1).jpg" alt="Image 2" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/vac%20(2).jpg" alt="Image 3" class="d-block w-100 img-fluid">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselFeature2" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselFeature2" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="text-center">
                        <h4>Prix compétitifs</h4>
                        <p>Nos tarifs de location sont compétitifs et adaptés à tous les budgets.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="carouselFeature3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/vac1.jpg" alt="Image 1" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/vac%20(1).jpg" alt="Image 2" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/vac%20(2).jpg" alt="Image 3" class="d-block w-100 img-fluid">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselFeature3" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselFeature3" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="text-center">
                    <h4>Service personnalisé</h4>
                    <p>Notre équipe d'experts est à votre disposition pour vous aider à trouver la maison idéale.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 banner ">
        <div class="container text-center">
            <h2 class="text-dark">Promotion spéciale</h2>
            <p class="lead text-dark mb-4">Réservez dès maintenant et économisez 20% sur votre prochaine location de vacances !</p>
            <a href="promotions" class="btn btn-primary btn-lg">Découvrir les offres &rarr;</a>
        </div>
    </section>


    <section class="py-5 gradient-bg" id="section2">
        <div class="container mt-5">
            <h1 class="text-center">Location de maison</h1>
            <p class="lead text-center">Trouvez la maison parfaite pour vos vacances ou vos séjours professionnels.</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="image/maison1.jpg" width="100%" height="100%" alt="Image d'une maison">
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled icon-list d-flex flex-column justify-content-between align-items-center">
                        <li class="">Plus de 100 000 maisons disponibles</li>
                        <li>Des locations à tous les prix</li>
                        <li>Une équipe d'experts à votre service</li>
                        <li>Un service de paiement sécurisé</li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <a href="maisons" class="btn btn-outline-light btn-lg m-4">Voir nos maisons &rarr;</a>
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
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Contactez-nous</h2>
                <p class="lead text-center mb-5">N'hésitez pas à nous contacter si vous avez des questions ou si vous souhaitez obtenir plus d'informations.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt me-2 text-primary"></i>Adresse : 123 Main Street, Anytown, CA 12345</li>
                            <li><i class="fas fa-phone-alt me-2 text-primary"></i>Téléphone : (123) 456-7890</li>
                            <li><i class="fas fa-envelope me-2 text-primary"></i>Email : info@example.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <form action="#">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="name" placeholder="Votre nom">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Votre email">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer footer-dark bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="mb-4">Liens utiles</h4>
                        <ul class="list-unstyled d-flex flex-column justify-content-between align-items-center text-left">
                            <li><a href="#" class="link">A propos</a></li>
                            <li><a href="#" class="link">Contact</a></li>
                            <li><a href="#" class="link">Politique de confidentialité</a></li>
                            <li><a href="#" class="link">Conditions d'utilisation</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-4">Suivez-nous</h4>
                        <ul class="list-unstyled social-links d-flex flex-column justify-content-between align-items-center text-justify">
                            <li><a href="#" class="link"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#" class="link"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#" class="link"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li><a href="#" class="link"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-between align-items-center text-left">
                        <p class="text text-right mb-0">&copy; 2023 Location de maison. Tous droits réservés.</p>
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
