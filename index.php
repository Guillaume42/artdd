<?php
  include ('static/header.php');
?>

<div class="container">
<!--
      <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>
-->
      <div class="row marketing">

        <!-- Barre de recherche -->
        <div class="col-lg-12 main-search">
            <div class="search-aera">
              <form id="form-search">
                <input placeholder="Rechercher..." type="text" id="search-bar" name="search-bar">
                <button id="search-button" name="search-button"><span class="glyphicon glyphicon-search"></span></button>
              </form>
            </div>
            <div class="counter-aera"><span class="counter odometer" id="home-counter">0</span> Euros reversés</div>
        </div>

        <!-- Première colonne -->
        <article class="gallery col-lg-12">
            <img src="img/thumbs/001.jpg">
            <img src="img/thumbs/002.jpg">
            <img src="img/thumbs/003.jpg">
            <img src="img/thumbs/012.jpg">
        </article>


        <!-- Deuxieme colonne -->
        <article class="gallery col-lg-12">
            <img src="img/thumbs/004.jpg">
            <img src="img/thumbs/005.jpg">
            <img src="img/thumbs/006.jpg">
            <img src="img/thumbs/007.jpg">
      </article>

        <!-- Troisieme colonne -->
        <article class="gallery col-lg-12">
            <img class="img-rounded" src="img/thumbs/008.jpg">
            <img class="img-rounded" src="img/thumbs/009.jpg">
            <img class="img-rounded" src="img/thumbs/010.jpg">
            <img class="img-rounded" src="img/thumbs/011.jpg">
      </article>

      </div>
    </div> <!-- /container -->
    <?php
    include ('static/footer.php');
    ?>