<div><h1>Envie d'arr�ter de fumer ?</h1></div>

<div>
	<?php 
		echo("Depuis que vous fumez vous avez d�pens� environ ".number_format($_SESSION["argentDepense"], 0, ',', ' ')."�");
		
		echo "<BR>";
		if($_SESSION["reveDepasse"]>=1) {
			echo("Avec cet argent vous auriez pu payer ".$_SESSION["reveDepasse"]." fois votre ".$_SESSION["objLong"]);
		}
		
	?>	
</div>