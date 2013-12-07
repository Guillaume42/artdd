<?php
include_once("functions/functions.php");

if ( !isset($_GET['q']) )
	echo(getDonationsCount());
else
{
	switch ($_GET['q']) {
		case 'dons':
			echo(getDonationsCount());
			break;
		case 'annonces':
			echo(getAnnCount());
			break;
		default:
			# code...
			break;
	}
}
?>