<?php
ob_start();

?>

    <div class="container-fluid">
        <div class="container-homepage row">
            <div data-aos="zoom-in" class="col-6">

                <h2 class="text-center">Qui somme nous ?</h2>
                <hr class="bg-dark">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, hic incidunt maxime minima nisi nobis optio quas quisquam rerum voluptatibus. Dolore labore maxime mollitia pariatur perspiciatis ratione recusandae velit. Temporibus.</p>
            </div>
            <div data-aos="zoom-in" class="col-6">
                <h2 class="text-center">Quel est notre but ?</h2>
                <hr class="bg-dark">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus beatae consequatur corporis dolores ducimus error eveniet fugiat harum impedit ipsum laudantium magnam nostrum, officiis quae quisquam, reprehenderit ullam vel. Assumenda.</p>
            </div>
        </div>

        <div class="pt-5 pb-5 bg-dark row text-light text-center">
            <div class="col-12">
                <h2>Commander votre site dès maintenant !</h2>
                <hr class="bg-light">
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad adipisci commodi consequatur deserunt dolores dolorum hic incidunt iusto, quasi, quidem quod quos ratione reiciendis sint tenetur unde vitae voluptatum!</p>
                <a href="index.php?action=commandForm">
                    <button type="button" class="mt-2 btn-large btn btn-outline-light">COMMANDER</button>
                </a>
            </div>
        </div>

        <div class="pt-5 pb-5 row">
            <div class="col-12">
                <h2 class="text-center">Nos production:</h2>
                <hr class="bg-dark">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <div class="card-deck-home card-deck text-center">
                    <div data-aos="zoom-in" class="card" style="width: 18rem;">
                        <img src="../assets/img/createYoourSite.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>CreateYourSite</h3>
                            <hr class="bg-dark">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="button" class="btn btn-outline-dark">Visualiser</button>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="card" style="width: 18rem;">
                        <img src="../assets/img/createYoourSite.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>Lorihen</h3>
                            <hr class="bg-dark">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="button" class="btn btn-outline-dark">Visualiser</button>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="card" style="width: 18rem;">
                        <img src="../assets/img/createYoourSite.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>Amicale des Deux Ferrette</h3>
                            <hr class="bg-dark">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="button" class="btn btn-outline-dark">Visualiser</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
$content = ob_get_clean();
require 'template.php';