<?php
ob_start();


?>





<div class="container">
    <div class="row">
        <a href="../index.php?action=admin" class="pt-5 text-dark">Retour</a>
        <div class="col-12 pt-5 pb-5 text-center">
            <h1>Nos créations</h1>
            <a href="addCreation.php" class="mt-3 btn btn-outline-dark">Formulaire d'ajout</a>
            <hr class="bg-dark">

        </div>

        <div class="col-12 text-center pb-5">
            <h2>LORIHEN</h2>
            <p></p>
            <p>Url: lorihen.fr</p>
            <p>Image:</p>
            <a href="editCreation.php" class="btn btn-outline-dark">Modifier</a>
            <a class="btn btn-outline-danger">Supprimer</a>
            <hr class="bg-dark">
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();
require 'template.php';