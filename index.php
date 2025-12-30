<?php 
require('templates/header.php');
?>


  <!-- Header-->
  <header class="header-bg">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">L'excellence Gastronomique</h1><br>
                            <p class="lead text-white mb-4" style="font-weight: bold; font-color: white";>Découvrez une expérience culinaire unique où chaque plat raconte une histoire</p><br><br><br>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/site_restaurant/pages/menu.php">Découvrir le menu</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="/site_restaurant/pages/reservation.php">Réserver une table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- quality section-->
        <div class="bg-light py-5 border-bottom">
        <br>
        <div class="text-center mb-5">
                <h2 class="fw-bolder">Pourquoi Kay's Food</h2>
                <p class="lead mb-0">Une passion pour la gastronomie et un engagement envers l'excellence</p>
        </div>
        </div>
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-gradient text-white rounded-3 mb-3"><img src="assets/icons/cuisine.png" alt="cuisine" width="30"></div>
                        <h2 class="h4 fw-bolder">Cuisine raffinée</h2>
                        <p>Des plats créatifs préparés avec passion par notre chef étoilé.</p>

                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><img src="assets/icons/produit.png" alt="cuisine" width="30"></div>
                        <h2 class="h4 fw-bolder">Produits premium</h2>
                        <p>Ingrédients frais et locaux sélectionnés avec soin chaque jour.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><img src="assets/icons/service.png" alt="cuisine" width="30"></div>
                        <h2 class="h4 fw-bolder">Service impeccable</h2>
                        <p>Une équipe dévouée pour une expérience culinaire mémorable.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Commentaire section-->
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Ce que disent nos clients</h2>
                    <p class="lead mb-0">Des avis authentiques de nos visiteurs</p>
                </div>
            </div>
        </section>
        <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-gradient text-white rounded-3 mb-3"><img src="assets/icons/etoile.png" alt="cuisine" width="80"></div>
                        <p><i>"Une expérience gastronomique exceptionnelle ! Chaque plat est une œuvre d'art."</i></p>
                        <h2 class="h6 fw-bolder">Jean Paul</h2>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><img src="assets/icons/etoile.png" alt="cuisine" width="80"></div>
                        <p><i>"Le meilleur restaurant de Paris. Ambiance chaleureuse et service irréprochable."</i></p><br>
                        <h2 class="h6 fw-bolder">Veronique </h2>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><img src="assets/icons/etoile.png" alt="cuisine" width="80"></div>
                        <p><i>"Des saveurs extraordinaires et une présentation sublime. Je recommande vivement !"</i></p>
                        <h2 class="h6 fw-bolder">Roselia</h2>
                    </div>
                </div>
            </div>
                   
        </section>
        <!-- Reservation section-->
        <header class="bg-primary bg-gradient text-white"><br><br>
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Prêt pour une expérience inoubliable ?</h1><br>
                <p class="lead">Réservez votre table dès maintenant et laissez-vous transporter par nos saveurs</p><br><br>
                <a class="btn btn-lg btn-light" href="/site_restaurant/pages/reservation.php">Réserver maintenant</a><br><br>
            </div>
        </header>
        
<?php 
require('templates/footer.php');
?>