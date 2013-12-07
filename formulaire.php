<?php
include ('config/config.inc.php');
?>

<form method="post" action="#">
<input type="" id="titre"		name="titre" 		placeholder="Titre" 		/>
<input type="" id="photo" 		name="photo" 		placeholder="photo" 		/>
<input type="" id="video" 		name="video" 		placeholder="video" 		/>
<input type="" id="description" name="description" 	placeholder="description" 	/>
<input type="" id="vendeur" 	name="vendeur" 		placeholder="vendeur" 		/>
<input type="" id="price" 		name="price" 		placeholder="price" 		/>
<input type="" id="don" 		name="don" 			placeholder="don" 			/>
<input type="" id="asso" 		name="asso" 		placeholder="asso" 			/>
<input type="" id="nom"		 	name="nom"	 		placeholder="Nom"	 		/>
<input type="" id="prenom" 		name="prenom" 		placeholder="prenom" 		/>
<input type="" id="adresse" 	name="adresse" 		placeholder="adresse" 		/>
<input type="" id="email" 		name="email" 		placeholder="email" 		/>
<input type="" id="tel" 		name="tel" 			placeholder="tel" 			/>
<input type="submit" value="valider"/>
</form>
<?php
if(isset($_POST['titre']))
{

$id = getConfig();
$dns = "mysql:host={$id['host']};dbname={$id['db']}";
$DB = new PDO( $dns, $id['user'], $id['pass']);

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
$req = $DB->exec("INSERT INTO a_annonces(titre, photo, video, description, vendeur, price, don, asso, active, transaction) VALUES ($titre, $photo, $video, $description, $vendeur, $price, $don, $asso, 1, 0)");

$req = $DB->exec("INSERT INTO a_users(nom, prenom, email, adresse, tel, visible) VALUES($nom, $prenom, $email, $adresse, $tel, 1)");

echo '<br><br>'.$_POST['titre'].' a bien été enregistré.';
}
?>