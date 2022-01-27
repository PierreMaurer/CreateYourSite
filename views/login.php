<?php
ob_start();

$errors = [];



?>
<div class="container-fluid">
    <div class="row">
        <div class="pt-5 pb-5 col-12 text-center">
            <h1>Formulaire de connexion</h1>
            <hr class="bg-dark">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center pb-5">

            <form method="post" action="../index.php?action=connexion">
                <b class="loginError"></b>
                <div class="form-group">
                    <label>Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-dark" id="submitLogin">Submit</button>

            </form>

        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#submitLogin").click(function () {
            if ($("#username").val() == '') {
                $("#usernameError").html("Utilisateur ou mots de passe invalide");
                return false;
            }
        })



    })



</script>


<?php

$content = ob_get_clean();
require 'template.php';