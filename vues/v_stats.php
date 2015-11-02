

<html>
	<head><h1>Voici vos statistiques</h1></head>
	<body>
		<div id="statistiques">
			 <?php echo("Depuis que vous avez arrêté de fumer vous avez économisé ".$argentEconomise." €");?><br><br>
			 
			 <p><?php echo($_SESSION["objCourt"]." : ");?><progress id="avancement" value="<?php echo($pourcentageCourt);?>" max="100"></progress></p>
			  
			 <p><?php echo($_SESSION["objMoyen"]." : ");?><progress id="avancement2" value="<?php echo($pourcentageMoyen);?>" max="100"></progress></p>
			  
			 <p><?php echo($_SESSION["objLong"]." : ");?><progress id="avancement3" value="<?php echo($pourcentageLong);?>" max="100"></progress></p>
			
		</div>	
	</body>
</html>