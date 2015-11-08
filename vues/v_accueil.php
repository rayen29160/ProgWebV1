<html>
	<head>
		
	</head>
	<body>
		<div id="acceuil">
		
		<div id=image>
				<img src="styles/cochon seul.png">
			
		</div>	
		
		<div id = texte>
			<?php 
				echo("<strong><h1>Bienvenue ".$_SESSION["id"]."</h1></strong>");
				echo("<SPAN>Depuis que vous fumez vous avez dépensé environ <br> <h1>".number_format($_SESSION["argentDepense"], 0, ',', ' ')."€</h1> </SPAN>");		
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
			
		</div>
	</body>
</html>