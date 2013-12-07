
/*
 * Va aller chercher la somme des don avec
 * une petite requête ajax et mettre à jour
 * le champ dans la page html.
 */
var getCount = function()
{
	$.get("counter.php", function(d)
		{
			$(".odometer#home").html(parseInt(d));
		});
}

$(document).ready(function()
	{
		$(".odometer").html(0);
		$('#responsive-menu-button').sidr({
		      name: 'sidr-main',
		      source: '#navigation'
		});
		setInterval(getCount, 10000);
	});