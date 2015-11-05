<html>
	<head>
		<div><h1>Envie d'arrêter de fumer ?</h1></div>
	</head>
	<body>
		<div>
			<?php 
				echo("<SPAN>Depuis que vous fumez vous avez dépensé environ ".number_format($_SESSION["argentDepense"], 0, ',', ' ')."€ </SPAN>");		
				echo "<BR>";
				if($_SESSION["reveDepasse"]>=1) {
					echo("<SPAN>Avec cet argent vous auriez pu payer ".$_SESSION["reveDepasse"]." fois votre ".$_SESSION["objLong"]."</SPAN>");
				} else {
					if($_SESSION["reveDepasse"]<1 && $_SESSION["reveDepasse"]>=0.75) {
						echo("<SPAN>Avec cet argent vous auriez presque pu payer votre ".$_SESSION["objLong"]."</SPAN>");
					}
				}		
			?>	
		</div>
	</body>
</html>