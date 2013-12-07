<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'art d'aider">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>L'art d'aider</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="css/odometer.css" />
    <link rel="stylesheet" href="css/jquery.sidr.light.css" />
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <div id="mobile-header">
              <a id="responsive-menu-button" href="#sidr-main">Menu</a>
          </div>
          <a class="navbar-brand" href="#">L'art d'aider</a>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
          <nav>
          <ul class="nav navbar-nav">
          <li><a href="#">Déposer un annonce</a></li>
          <li><a href="#">Offres</a></li>
          <li><a href="#">Association</a></li>
          </ul>
        </nav>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="title">
      <h1>Artdd</h1>
      <h3>faites des euros, faites des heureux !</h3>
    </div>
<div class="container">
<!--
      <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>
-->
      <div class="row marketing">

        <!-- Première colonne -->
        <article class="gallery col-lg-12">
            <img src="img/thumbs/001.jpg">
            <img src="img/thumbs/003.jpg">
            <img src="img/thumbs/002.jpg">
            <img src="img/thumbs/003.jpg">
        </article>

        <!-- Deuxieme colonne -->
        <article class="gallery col-lg-12">
            <img src="img/thumbs/004.jpg">
            <img src="img/thumbs/005.jpg">
            <img src="img/thumbs/006.jpg">
            <img src="img/thumbs/007.jpg">
      </article>

        <!-- Barre de recherche -->
        <div class="col-lg-12 main-search">
            <div class="search-aera">
              <form id="form-search">
                <input placeholder="Rechercher..." type="text" id="search-bar" name="search-bar">
                <button id="search-button" name="search-button"><span class="glyphicon glyphicon-search"></span></button>
              </form>
            </div>
            <div class="counter-aera"><span class="counter odometer">0</span> Euros reversés</div>
        </div>

        <!-- Troisieme colonne -->
        <article class="gallery col-lg-12">
            <img class="img-rounded" src="img/thumbs/008.jpg">
            <img class="img-rounded" src="img/thumbs/009.jpg">
            <img class="img-rounded" src="img/thumbs/010.jpg">
            <img class="img-rounded" src="img/thumbs/011.jpg">
      </article>

      </div>

      <div class="footer">
        <p>&copy; Guillaume Sarfati, Conrad Kleinespel & André Aubin 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/jquery.sidr.js"></script>
    <script src="js/artdd.js"></script>
  </body>
</html>
