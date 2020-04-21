<?php ob_start(); ?>
<!DOCTYPE html>
<html>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
                
                

<footer class="page-footer font-small lighten-5" id="page-down" data-spy="scroll" data-target=".page-footer">

  <div style="background-color: #101010; color: #9d9d9d;">
    <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

    <!-- Grid column -->
    <div class="row text-center">
    <h3>Suivez-moi !</h3>
    <!-- Facebook -->
    <a class="btn btn-default">
        <i class="fab fa-facebook-square fa-2x"></i>
    </a>
    <!-- Twitter -->
    <a class="btn btn-default">
        <i class="fab fa-twitter-square fa-2x"></i>
    </a>
    <!-- Google +-->
    <a class="btn btn-default">
        <i class="fab fa-google-plus-square fa-2x"></i>
    </a>
    <!--flickr -->
    <a class="btn btn-default">
        <i class="fab fa-flickr fa-2x"></i>
    </a>
    <!--Instagram-->
    <a class="btn btn-default">
        <i class="fab fa-instagram fa-2x"></i>
    </a>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row-->
    </div>
  

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 white-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Jean Forteroche</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p><i class="fas fa-quote-left">  Ecrire est toujours un art plein de rencontres.</i>  <i class="fas fa-quote-right"></i></p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Administration</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
            
            <a class="page-footer ancre2" href="#auteur">Accueil/</a><a href="#publications" class="ancre2">Chapitres/</a><a href="index.php?action=connexion" >Connexion</a>
        </p>
        <p>
            <a class="dark-grey-text" href="#">Mentions Légales</a>
          
        </p>
        

      </div>
      
      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"></div>

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Paris, MontMartre, France</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> maison@edition.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white-50 py-3">© 2020 Copyright: Béatrice Piat | Projet réalisé dans le cadre du parcours Web Développeur junior d'OpenClassrooms</div>
  <!-- Copyright -->
</div>
</div>
</footer>
<!-- Footer -->
<?php  echo $footer = ob_get_clean(); ?>
<script>
                  
                  // Scroll fluide footer menu
                  $(function () {
                        $('.ancre2').on('click', function(e) {
                              e.preventDefault();
                              var hash = this.hash;
                              $('html, body').animate({
                                    scrollTop: $(this.hash).offset().top
                              }, 1000, function(){
                                    window.location.hash = hash;
                              });
                        });
                  });
            </script>
</html>