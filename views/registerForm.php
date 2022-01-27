<?php
ob_start();
?>

<div class="container">

    <div class="row">
        <a href="index.php?action=admin" class="pt-5 text-dark">Retour</a>
        <div class="col-12 text-center pt-5 pb-5">
            <h1>Enregistrement de compte</h1>
            <hr class="bg-dark">
            <form action="../index.php?action=addUser" method="post">
                <div class="form-group">
                    <label>Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label>Mots de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label>Est Admin ? (Boolean)</label>
                    <input type="text" class="form-control" id="admin" name="admin">
                </div>
                <button type="submit" class="btn btn-outline-dark">Envoyez</button>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'template.php';