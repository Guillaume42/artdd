<?php
include ('functions/functions.php');


if(isset($_POST['titre']))
{
	$DB = getPdo();

	$titre = $DB->quote($_POST['titre']); 
	$photo = $DB->quote($_POST['photo']);
	$video = $DB->quote($_POST['video']);
	$description = $DB->quote($_POST['description']);
	$vendeur = $DB->quote($_POST['vendeur']);
	$price = $DB->quote($_POST['price']);
	$don = $DB->quote($_POST['don']);
	$asso = $DB->quote($_POST['asso']);
	$adresse = $DB->quote($_POST['adresse']);
	$email = $DB->quote($_POST['email']);
	$tel = $DB->quote($_POST['tel']);
	$nom = $DB->quote($_POST['nom']);
	$prenom = $DB->quote($_POST['prenom']);
							
	// Insertion dans la base de donnée							
	$req = $DB->exec("INSERT INTO a_annonces(titre, photo, video, description, vendeur, price, don, asso, active, transaction) 
		VALUES ($titre, $photo, $video, $description, $vendeur, $price, $don, $asso, 1, 0)");

  $q = "INSERT INTO a_users(nom, prenom, mail, adresse, tel, visible) VALUES($nom, $prenom, $email, $adresse, $tel, 1)";
  var_dump($q);
	$req = $DB->exec($q);
	echo '<br><br>'.$_POST['titre'].' a bien été enregistré.';
}


include ('static/header.php');

?>
<div class="container">
<form class="form-horizontal" role="form" target="#" method="POST">
  <div class="form-group">
    <label for="titre" class="col-sm-2 control-label">Titre</label>
    <div class="col-sm-10">
	<input type="" id="titre"		class="form-control"	name="titre" 		placeholder="Titre" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="photo" class="col-sm-2 control-label">Photo</label>
    <div class="col-sm-10">
	<input type="" id="photo" 		class="form-control"	name="photo" 		placeholder="photo" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="video" class="col-sm-2 control-label">Video</label>
    <div class="col-sm-10">
	<input type="" id="video" 		class="form-control"	name="video" 		placeholder="video" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
	<input type="" id="description"	class="form-control"	name="description" 	placeholder="description" 	/>
    </div>
  </div>
  <div class="form-group">
    <label for="vendeur" class="col-sm-2 control-label">Vendeur</label>
    <div class="col-sm-10">
	<input type="" id="vendeur" 	class="form-control"	name="vendeur" 		placeholder="vendeur" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Prix</label>
    <div class="col-sm-10">
	<input type="" id="price" 		class="form-control"	name="price" 		placeholder="prix" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="don" class="col-sm-2 control-label">Don</label>
    <div class="col-sm-10">
	<input type="" id="don" 		class="form-control"	name="don" 			placeholder="don" 			/>
    </div>
  </div>
  <div class="form-group">
    <label for="asso" class="col-sm-2 control-label">Association</label>
    <div class="col-sm-10">
	<input type="" id="asso" 		class="form-control"	name="asso" 		placeholder="asso" 			/>
    </div>
  </div>
  <div class="form-group">
    <label for="nom" class="col-sm-2 control-label">Nom</label>
    <div class="col-sm-10">
	<input type="" id="nom"		 	class="form-control"	name="nom"	 		placeholder="Nom"	 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="prenom" class="col-sm-2 control-label">Prénom</label>
    <div class="col-sm-10">
	<input type="" id="prenom" 		class="form-control"	name="prenom" 		placeholder="prenom" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="adresse" class="col-sm-2 control-label">Adresse</label>
    <div class="col-sm-10">
	<input type="" id="adresse" 	class="form-control"	name="adresse" 		placeholder="adresse" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
	<input type="" id="email" 		class="form-control"	name="email" 		placeholder="email" 		/>
    </div>
  </div>
  <div class="form-group">
    <label for="tel" class="col-sm-2 control-label">Téléphone</label>
    <div class="col-sm-10">
	<input type="" id="tel" 		class="form-control"	name="tel" 			placeholder="téléphone" 			/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Valider</button>
    </div>
  </div>
</form>
</div>

<?php
	include ('static/footer.php');
?>