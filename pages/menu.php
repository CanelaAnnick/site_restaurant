<?php 
require('../templates/header.php');
?>


<header class="bg-primary bg-gradient text-white"><br><br>
    <div class="container px-4 text-center"><br><br>
        <h1 class="fw-bolder">Notre Menu</h1><br>
        <p class="lead">Découvrez notre sélection de plats raffinés, préparés avec passion et des produits d'exception</p><br><br>
    </div>
</header>

<br>
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Entrées</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Plats</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dessert</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >Boissons</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <ul class="list-group">
    <li class="list-group-item"><h5>Beignets Haricots (BHB)</h5><p>Beignets croustillants, haricots sautés a l'oignon, piment doux</p></li>
    <li class="list-group-item"><h5>Poisson Fumé & Avocat</h5><p>Emietté de poisson fumé, avocat mur, vinaigrette citronnée</p></li>
    <li class="list-group-item"><h5>Salade de Gombo Frais</h5><p>Gombo cru finement émincé, tomate, oignon,huile rouge légère</p></li>
    <li class="list-group-item"><h5>Pastels de Viande</h5><p>Chaussons frits garnis de boeuf épicé et herbes locales</p></li>
    </ul>
</div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
    <ul class="list-group">
    <li class="list-group-item"><h5>Ndolè Royal</h5><p>Feuilles de ndolè, pate d'arachide, crevettes et viande, servi avec miondo</p></li>
    <li class="list-group-item"><h5>Poulet DG</h5><p>Poulet sauté, bananes plantain mures, légumes croquants</p></li>
    <li class="list-group-item"><h5>Eru & Water Fufu</h5><p>Feuilles d'eru, épinards, viande fumée, huile de palme</p></li>
    <li class="list-group-item"><h5>Poisson Braisé</h5><p>Bar entier Braisé, sayce verte, plantain mur</p></li>
    </ul>
</div>
<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
    <ul class="list-group">
    <li class="list-group-item"><h5>Beignets Soufflés</h5><p>Beignets mouelleux légèrement sucrés</p></li>
    <li class="list-group-item"><h5>Banane Plantain Caramélisée</h5><p>Plantain mur roti, caramel au sucre brun</p></li>
    <li class="list-group-item"><h5>Gateau de Manioc</h5><p>Manioc rapé, lait de cooc, vanille</p></li>
    <li class="list-group-item"><h5>Salade de Fruits Tropicaux</h5><p>Papaye,ananas,pasteque,citron vert</p></li>
    </ul>
</div>
<div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
    <ul class="list-group">
    <li class="list-group-item"><h5>Foléré Glacé</h5><p>Infusion d'hibiscus, gingembre et citron</p></li>
    <li class="list-group-item"><h5>Jus de Bissap Ananas</h5><p>Bissap naturel mélangé a l'ananas frais</p></li>
    <li class="list-group-item"><h5>Vin de Palme Frais</h5><p>Vin naturel légèrement sucré</p></li>
    <li class="list-group-item"><h5>Jus de Gingembre Maison</h5><p>Gingembre frais, citron, miel</p></li>
    </ul>
</div>
</div>
<br><br>

<header class="bg-secondary bg-gradient text-white" style="backgroung-color:black"><br><br>
    <div class="container px-4 text-center"><br><br>
        <h1 class="fw-bolder">Menu Dégustation</h1><br>
        <p class="lead">Laissez-vous surprendre par notre menu dégustation en 7 services,
        une aventure culinaire orchestrée par notre chef</p>
        <h3>30 000 Fcfa par personne</h3><br>
    </div>
</header>
<br>

<?php 
require('../templates/footer.php');
?>