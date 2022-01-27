<?php
ob_start(); ?>


<div class="container">
    <div class="row">
        <div class="col-12 pt-5 pb-5 text-center">
            <h1>Panel d'administration</h1>
            <hr class="bg-dark">
            <a href="../index.php?action=creationAdmin" class="btn btn-outline-dark">Nos créations</a>
            <a href="../index.php?action=contactAdmin" class="btn btn-outline-dark">Demande de créations</a>
            <a href="../index.php?action=deconnexion" class="btn btn-outline-danger">Deconnexion</a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'template.php'; ?>