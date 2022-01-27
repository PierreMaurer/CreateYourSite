<?php
ob_start();
?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<div class="container-fluid">
    <div style="padding-top: 50px; padding-bottom: 50px;"pt-5 class="row">

        <div class=" text-center col-12">
            <h2 class="text-bold">Formulaire de demande</h2>
            <hr class="bg-dark">
            <p>Pour débuter le développement de votre site internet, nous devons obtenir un cahier des charges le plus complet possible. Pour cela un formulaire est disponible afin que vous puissiez nous fournir tout les éléments pour la création d'un site qui vous correspond. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, culpa deleniti doloremque dolorum fugiat iusto molestias necessitatibus nostrum numquam odio quae quam repellendus reprehenderit repudiandae sequi sit ullam. Numquam, ratione.</p>
        </div>
    </div>
</div>

<style type="text/css">
    #second{
        display: none;
    }


</style>

<!-- Formulaire de demande -->
<div class="pt-5 pb-5 bg-dark text-light text-center container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Formulaire de demande</h2>
            <div class="progress">
                <div id="progressbar" class="progress-bar bg-black" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Etape: 1</div>
            </div>
            <form action="../index.php?action=commandRequest" method="post">
                <div id="first">
                <br>
                <h3>Information personnel</h3>
                <hr class="bg-light">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Prenom</label>
                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Jean" required>
                        <b class="form-text text-danger" id="surnameError" ></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Prénom</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Dupuis" required>
                        <b class="form-text text-danger" id="nameError" ></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Adresse email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        <b class="form-text text-danger" id="emailError" ></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Adresse</label>
                        <input type="text" class="form-control" name="adress" id="adress" placeholder="39 rue de Paris" required>
                        <b class="form-text text-danger" id="adressError" ></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ville</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Strasbourg" required>
                        <b class="form-text text-danger" id="cityError" ></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Numero de telephone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="06 85 39 54 12">
                        <b class="form-text text-danger" id="phoneError" ></b>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-outline-light" id="next-1">Next</a>
                    </div>
                </div>
                <div id="second">
                    <h3>Site</h3>
                    <hr class="bg-light">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nom du site</label>
                        <input type="text" class="form-control" id="name_site" name="name_site" placeholder="CreateYourSite" required>
                        <b class="form-text text-danger" id="name_SiteError" ></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Type de site</label>
                        <input type="text" class="form-control" id="type_site" name="type_site" placeholder="ECommerce" required>
                        <b class="form-text text-danger" id="type_SiteError" ></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description du site</label>
                        <textarea class="form-control" id="description_site" name="description_site" rows="3" required></textarea>
                        <b class="form-text text-danger" id="description_SiteError" ></b>
                    </div>

                <div class="form-group">
                    <a class="btn btn-outline-danger" id="previous-1">Previous</a>
                    <button type="submit" class="btn btn-outline-light">Envoyer</button>
                </div>
        </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {


        const regEmail = new RegExp(/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/)
        const regPhone = new RegExp(/^((\+)33|0|0033)[1-9](\d{2}){4}$/)
        $("#next-1").click(function (e) {
            e.preventDefault();
            if($("#surname").val() == '') {
                $("#surnameError").html('* Prénom requis ou trop court.');
                return false;
            } else if ($("#name").val() == '') {
                $("#nameError").html('* Nom requis ou trop court.');
                return false;
            } else if ($("#email").val() == '') {
                $("#emailError").html('* Email requis ou trop court.');
                return false;
            } else if ($("#adress").val() == '') {
                $("#adressError").html('* Adresse requise ou trop court.');
                return false;
            } else if ($("#city").val() == '') {
                $("#cityError").html('* Ville requise ou trop court.');
                return false;
            } else if ($("#phone").val() == '') {
                $("#phoneError").html('* Numero de telephone requis.');
                return false;
            } else if(!regEmail.test($("#email").val())) {
                $("#emailError").html('* Email invalide.');
                return false;
            } else if(!regPhone.test($("#phone").val())) {
                $("#phoneError").html('* Numero de telephone invalide.');
            }
            else {
                $("#second").show();
                $("#first").hide();
                $("#progressbar").css("width", "100%");
                $("#progressbar").html("Etape: 2")
            }
        })

        $("#previous-1").click(function () {
            $("#first").show();
            $("#second").hide();

        })
    });

</script>



<div class="pt-5 pb-5 text-center container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Titre exemple</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet assumenda consectetur doloremque est illo in ipsa iste magni minima nisi, numquam omnis optio porro quae recusandae sed velit, voluptatibus.</p>

        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'template.php';
