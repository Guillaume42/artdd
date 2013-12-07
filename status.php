<?php
include ('functions/functions.php');


include ('static/header.php');
?>

<style>.title { background: none !important; height: auto !important;}</style>
<div class="container">
	<div class="row marketing">
        <!-- Status du site -->
        <div class="col-lg-12">
        <div class="col-lg-6 main-counter">
        	<img src="img/logo-artdd.png">
        </div>
        <div class="col-lg-6 main-counter">
        	<h1 class="odometer" id="c-annonces">0</h1>
        	<h2>Annonces</h2>
        	<br>
        	<h1 class="odometer" id="c-dons">0</h1>
        	<h2>Euros collectés</h2>
       	</div>
       	</div>
    </div>
</div>

    <div class="container">

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
    <script type="text/javascript">
var update = function()
{
	$.get("counter.php?q=dons", function(d)
		{
			$("#c-dons").html(parseInt(d));
		});
	$.get("counter.php?q=annonces", function(d)
		{
			$("#c-annonces").html(parseInt(d));
		});
}

$(document).ready(function()
{
		setInterval(update, 2000);
});
</script>
  </body>
</html>