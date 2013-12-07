<?php
include 'config/config.inc.php';

/*
 * Va retourner un objet PDO déja connecté.
 */
function getPdo()
{
	$id = getConfig();
	$dns = "mysql:host={$id['host']};dbname={$id['db']}";
	$DB = new PDO( $dns, $id['user'], $id['pass']);
	return($DB);
}

/*
 * Va retourner le montant total des donations, en euros.
  */
function getDonationsCount()
{
	$db = getPdo();
	$query = "SELECT SUM( don ) AS total FROM  `a_annonces`";
	$p = $db->prepare($query);
	$p->execute();
	$res = $p->fetchAll();
	return ($res[0]['total']);
}

/*
 * Va retourner le nombre d'annonces.
  */
function getAnnCount()
{
	$db = getPdo();
	$query = "SELECT count(*) AS total FROM  `a_annonces`";
	$p = $db->prepare($query);
	$p->execute();
	$res = $p->fetchAll();
	return ($res[0]['total']);
}


?>