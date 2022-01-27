<?php
ob_start();
?>


<div class="container">

    <div class="row">
        <a href="../index.php?action=creationAdmin" class="pt-5 text-dark">Retour</a>
        <div class="col-12 pt-5 pb-5">
            <h1>Formulaire d'ajout</h1>
            <hr class="bg-dark">
            <form>
                <div class="form-group">
                    <label for="creationName">Nom:</label>
                    <input type="text" class="form-control" name="creationName" id="creationName">
                </div>
                <div class="form-group">
                    <label for="creationUrl">URL:</label>
                    <input type="text" class="form-control" name="creationUrl" id="creationUrl">
                </div>
                <div class="form-group">
                    <label for="creationImage">Image:</label>
                    <input type="file" class="form-control-file" id="creationImage" name="creationImage">
                </div>
                <button class="mt-2 btn btn-outline-dark">Envoyer</button>
                
                
            </form>
        </div>
    </div>

</div>

<?php

$content = ob_get_clean();
require 'template.php';
