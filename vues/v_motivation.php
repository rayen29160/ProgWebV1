<html>
	<head><h1>Voilà l'avancement de vos objectifs</h1></head>
	<body>
	<div id="acceuil">
		<p><?php echo($_SESSION["objCourt"]." : ");?><progress id="avancement" value="<?php echo($pourcentageCourt);?>" max="100"></progress></p>
			  
		<p><?php echo($_SESSION["objMoyen"]." : ");?><progress id="avancement2" value="<?php echo($pourcentageMoyen);?>" max="100"></progress></p>
			  
		<p><?php echo($_SESSION["objLong"]." : ");?><progress id="avancement3" value="<?php echo($pourcentageLong);?>" max="100"></progress></p>			
	</div>
	</body>
</html>	
	
	
	
	
	