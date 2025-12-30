<?php 
require('../templates/header.php');
?>

<header class="bg-primary bg-gradient text-white"><br><br>
    <div class="container px-4 text-center"><br><br>
        <h1 class="fw-bolder">Réservation</h1><br>
        <p class="lead">Réservez votre table pour une expérience gastronomique inoubliable</p><br><br>
    </div>
</header>

<!--------Contact form----------->
<div class="bg-light py-3 border-bottom">
    <div class="text-center mb-1">
            <h2 class="fw-bolder">Réservez une table</h2>
    </div>


<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-6">
        <div class="bg-white py-3 border-bottom">
            <form action="" method="post" >
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nom complet *</span>
                <input type="text" class="form-control" placeholder="Kelly canela" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Email *</span>
                <input type="email" class="form-control" placeholder="kelly@example.com" aria-label="Recipient’s username" aria-describedby="basic-addon2">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Téléphone *</span>
                <input type="tel" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Date *</span>
                <input type="date" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Heure *</span>
                <input type="time" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group">
                <label for="area" class="input-group-text">Message (optionnel)</label>
                <textarea class="form-control" aria-label="With textarea" name="area" placeholder="Allergies, régimes spéciaux, occasions spéciales...."></textarea>
                </div>
                <div class="d-flex justify-content-center mt-4 ">
                    <button class="btn btn-primary py-2" style="width:100%;" type="submit">confirmer ma réservation</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>



<?php 
require('../templates/footer.php');
?>