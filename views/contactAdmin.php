<?php
ob_start();
?>



<div class="container">
    <div class="row">
        <a href="../index.php?action=admin" class="pt-5 text-dark">Retour</a>
        <div class="col-12 text-center pt-5 pb-5">
            <h1>Demande de création</h1>
            <hr class="bg-dark">
        </div>
    </div>
    <?php foreach ($commands as $command) { ?>

    <div class="row pb-5">
        <div class="col-12">
            <h2 class="text-center">Demande:</h2>
            <h3>Information Personnel</h3>
            <p>Nom:<?php echo $command['user_name'] ?></p>
            <p>Prénom:<?php echo $command['surname'] ?></p>
            <p>Mail:<?php echo $command['email'] ?></p>
            <p>Adresse:<?php echo $command['adress'] ?></p>
            <p>Ville:<?php echo $command['city'] ?></p>
            <p>Numero:<?php echo $command['phone'] ?></p>
            <h3>Demande Technique:</h3>
            <p>Nom du site:<?php echo $command['name_site'] ?></p>
            <p>Type de site:<?php echo $command['type_site'] ?></p>
            <p>Description:<?php echo $command['description'] ?></p>

            <h4>Status: <?php echo ($command['status']? '✅' : '✖️') ?></h4>

            <a href="../index.php?action=changestatus&id=<?php echo $command['id']?> " class="mt-5 btn btn-outline-dark">Changer de status</a>
            <a href="../index.php?action=deleteContact&id=<?php echo $command['id']?> " class="mt-5 ml-5 btn btn-outline-danger">Supprimer</a>
            <hr class="bg-dark">
        </div>
    </div> <?php } ?>
</div>

<?php
$content = ob_get_clean();
require 'template.php';