<div><h1>Envie d'arrêter de fumer ?</h1></div>

<div>
	<?php 
		echo("Depuis que vous fumez vous avez dépensé environ ".$_SESSION["argentDepense"]."€");
		
		if($_SESSION["reveDepasse"]>=1) {
			echo("Avec cet argent vous auriez pu payer ".$_SESSION["reveDepasse"]." fois votre ".$_SESSION["objLong"]);
		}
		
	?>	
</div>