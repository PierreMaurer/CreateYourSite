<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap & AOS CSS -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Hello, world!</title>
  </head>
  <body>

  <header>
      <div id="particles-js" class="bg-dark">
          <div id="DivTemplateHeader">
              <h1 id="welcome-text" class="text-light">Bienvenue sur CreateYourSite</h1>
              <img id="arrow-down" src="../assets/img/down-arrow.svg">

          </div>

      </div>


      <script src="/assets/js/particles.js"></script>
      <script src="/assets/js/app.js"></script>
      <script src="/assets/js/particles.min.js"></script>
  </header>

    <?= $content ?>


  <!--Footer -->
  <footer id="footer" class="align-middle bg-dark text-center text-light">
    <p class="pt-5">Copyright &copy; 2020, CreateYourSite. Tout droits Reservé</p>
      <a href="#" class="text-light text-decoration-none">Mentions légales</a>
      <a href="#" class="pl-3 text-light text-decoration-none">Contact </a>
      <a href="#" class="pl-3 text-light text-decoration-none">FAQ </a>
  </footer>



    <!-- Optional JavaScript -->
  <script src="../assets/js/scroll.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>